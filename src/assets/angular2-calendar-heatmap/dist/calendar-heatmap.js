import { Component, EventEmitter, HostListener, Input, Output, ViewChild } from '@angular/core';
import moment from 'moment';
import { easeLinear, event, max, scaleBand, scaleLinear, scaleTime, select, timeDays, timeHours, timeMonths, timeSecond, timeYears } from 'd3/index';
import * as d3 from 'd3/index';

// Import dependencies
var CalendarHeatmap = /** @class */ (function () {
    function CalendarHeatmap() {
        this.color = '#ff4500';
        this.overview = 'global';
        this.handler = new EventEmitter();
        this.onChange = new EventEmitter();
        this.gutter = 5;
        this.item_gutter = 1;
        this.width = 1000;
        this.height = 200;
        this.item_size = 10;
        this.label_padding = 40;
        this.max_block_height = 20;
        this.transition_duration = 500;
        this.in_transition = false;
        this.tooltip_width = 250;
        this.tooltip_padding = 15;
        this.history = ['global'];
        this.selected = {};
    }
    /**
     * Check if data is available
     * @return {?}
     */
    CalendarHeatmap.prototype.ngOnChanges = function () {
        if (!this.data) {
            return;
        }
        // Update data summaries
        this.updateDataSummary();
        // Draw the chart
        this.drawChart();
    };
    
    /**
     * Get hold of the root element and append our svg
     * @return {?}
     */
    CalendarHeatmap.prototype.ngAfterViewInit = function () {
        var /** @type {?} */ element = this.element.nativeElement;
        // Initialize svg element
        this.svg = select(element)
            .append('svg')
            .attr('class', 'svg');
        // Initialize main svg elements
        this.items = this.svg.append('g');
        this.labels = this.svg.append('g');
        // Add tooltip to the same element as main svg
        this.tooltip = select(element).append('div')
            .attr('class', 'heatmap-tooltip')
            .style('opacity', 0);
        // Calculate chart dimensions
        this.calculateDimensions();
        // Draw the chart
        this.drawChart();
    };
    
    /**
     * Utility function to get number of complete weeks in a year
     * @return {?}
     */
    CalendarHeatmap.prototype.getNumberOfWeeks = function () {
        var /** @type {?} */ dayIndex = Math.round((+moment() - +moment().subtract(1, 'year').startOf('week')) / 86400000);
        var /** @type {?} */ colIndex = Math.trunc(dayIndex / 7);
        var /** @type {?} */ numWeeks = colIndex + 1;
        return numWeeks;
    };
    
    /**
     * Utility funciton to calculate chart dimensions
     * @return {?}
     */
    CalendarHeatmap.prototype.calculateDimensions = function () {
        var /** @type {?} */ element = this.element.nativeElement;
        this.width = element.clientWidth < 1000 ? 1000 : element.clientWidth;
        this.item_size = ((this.width - this.label_padding) / this.getNumberOfWeeks() - this.gutter);
        this.height = this.label_padding + 7 * (this.item_size + this.gutter);
        this.svg.attr('width', this.width).attr('height', this.height);
    };
    
    /**
     * Recalculate dimensions on window resize events
     * @param {?} event
     * @return {?}
     */
    CalendarHeatmap.prototype.onResize = function (event$$1) {
        this.calculateDimensions();
        if (!!this.data && !!this.data[0]['summary']) {
            this.drawChart();
        }
    };
    
    /**
     * Helper function to check for data summary
     * @return {?}
     */
    CalendarHeatmap.prototype.updateDataSummary = function () {
        // Get daily summary if that was not provided
        if (!this.data[0]['summary']) {
            this.data.map(function (d) {
                var /** @type {?} */ summary = d['details'].reduce(function (uniques, project) {
                    if (!uniques[project.name]) {
                        uniques[project.name] = {
                            'value': project.value
                        };
                    }
                    else {
                        uniques[project.name].value += project.value;
                    }
                    return uniques;
                }, {});
                var /** @type {?} */ unsorted_summary = Object.keys(summary).map(function (key) {
                    return {
                        'name': key,
                        'value': summary[key].value
                    };
                });
                d['summary'] = unsorted_summary.sort(function (a, b) {
                    return b.value - a.value;
                });
                return d;
            });
        }
    };
    /**
     * Draw the chart based on the current overview type
     * @return {?}
     */
    CalendarHeatmap.prototype.drawChart = function () {
        if (!this.svg || !this.data) {
            return;
        }
        if (this.overview === 'global') {
            this.drawGlobalOverview();
        }
        else if (this.overview === 'year') {
            this.drawYearOverview();
            this.onChange.emit({
                overview: this.overview,
                start: moment(this.selected['date']).startOf('year'),
                end: moment(this.selected['date']).endOf('year'),
            });
        }
        else if (this.overview === 'month') {
            this.drawMonthOverview();
            this.onChange.emit({
                overview: this.overview,
                start: moment(this.selected['date']).startOf('month'),
                end: moment(this.selected['date']).endOf('month'),
            });
        }
        else if (this.overview === 'week') {
            this.drawWeekOverview();
            this.onChange.emit({
                overview: this.overview,
                start: moment(this.selected['date']).startOf('week'),
                end: moment(this.selected['date']).endOf('week'),
            });
        }
        else if (this.overview === 'day') {
            this.drawDayOverview();
            this.onChange.emit({
                overview: this.overview,
                start: moment(this.selected['date']).startOf('day'),
                end: moment(this.selected['date']).endOf('day'),
            });
        }
    };

    /**
     * Draw day overview
     * @return {?}
     */
    CalendarHeatmap.prototype.drawDayOverview = function () {
        var _this = this;
        // Add current overview to the history
        if (this.history[this.history.length - 1] !== this.overview) {
            this.history.push(this.overview);
        }
        // Initialize selected date to today if it was not set
        if (!Object.keys(this.selected).length) {
            this.selected = this.data[this.data.length - 1];
        }
        var /** @type {?} */ project_labels = this.selected['summary'].map(function (project) {
            return project.name;
        });
        var /** @type {?} */ projectScale = scaleBand()
            .rangeRound([this.label_padding, this.height])
            .domain(project_labels);
        var /** @type {?} */ itemScale = scaleTime()
            .range([this.label_padding * 2, this.width])
            .domain([moment(this.selected['date']).startOf('day'), moment(this.selected['date']).endOf('day')]);
        this.items.selectAll('.item-block').remove();
        this.items.selectAll('.item-block')
            .data(this.selected['details'])
            .enter()
            .append('rect')
            .attr('class', 'item item-block')
            .attr('x', function (d) {
            return itemScale(moment(d.date));
        })
            .attr('y', function (d) {
            return (projectScale(d.name) + projectScale.bandwidth() / 2) - 15;
        })
            .attr('width', function (d) {
            var /** @type {?} */ end = itemScale(timeSecond.offset(moment(d.date).toDate(), d.value));
            return Math.max((end - itemScale(moment(d.date))), 1);
        })
            .attr('height', function () {
            return Math.min(projectScale.bandwidth(), _this.max_block_height);
        })
            .attr('fill', function () {
            return _this.color;
        })
            .style('opacity', 0)
            .on('mouseover', function (d) {
            if (_this.in_transition) {
                return;
            }
            // Construct tooltip
            var /** @type {?} */ tooltip_html = '';
            tooltip_html += '<div class="header"><strong>' + d.name + '</strong><div><br>';
            tooltip_html += '<div><strong>' + (d.value ? _this.formatTime(d.value) : 'No time') + ' tracked</strong></div>';
            tooltip_html += '<div>on ' + moment(d.date).format('dddd, MMM Do YYYY HH:mm') + '</div>';
            // Calculate tooltip position
            var /** @type {?} */ x = d.value * 100 / (60 * 60 * 24) + itemScale(moment(d.date));
            while (_this.width - x < (_this.tooltip_width + _this.tooltip_padding * 3)) {
                x -= 10;
            }
            var /** @type {?} */ y = projectScale(d.name) + projectScale.bandwidth() / 2 + _this.tooltip_padding / 2;
            // Show tooltip
            _this.tooltip.html(tooltip_html)
                .style('left', x + 'px')
                .style('top', y + 'px')
                .transition()
                .duration(_this.transition_duration / 2)
                .ease(easeLinear)
                .style('opacity', 1);
        })
            .on('mouseout', function () {
            if (_this.in_transition) {
                return;
            }
            _this.hideTooltip();
        })
            .on('click', function (d) {
            if (_this.handler) {
                _this.handler.emit(d);
            }
        })
            .transition()
            .delay(function () {
            return (Math.cos(Math.PI * Math.random()) + 1) * _this.transition_duration;
        })
            .duration(function () {
            return _this.transition_duration;
        })
            .ease(easeLinear)
            .style('opacity', 0.5)
            .call(function (transition, callback) {
            if (transition.empty()) {
                callback();
            }
            var /** @type {?} */ n = 0;
            transition
                .each(function () { ++n; })
                .on('end', function () {
                if (!--n) {
                    callback.apply(this, arguments);
                }
            });
        }, function () {
            _this.in_transition = false;
        });
        // Add time labels
        var /** @type {?} */ timeLabels = timeHours(moment(this.selected['date']).startOf('day').toDate(), moment(this.selected['date']).endOf('day').toDate());
        var /** @type {?} */ timeScale = scaleTime()
            .range([this.label_padding * 2, this.width])
            .domain([0, timeLabels.length]);
        this.labels.selectAll('.label-time').remove();
        this.labels.selectAll('.label-time')
            .data(timeLabels)
            .enter()
            .append('text')
            .attr('class', 'label label-time')
            .attr('font-size', function () {
            return Math.floor(_this.label_padding / 3) + 'px';
        })
            .text(function (d) {
            return moment(d).format('HH:mm');
        })
            .attr('x', function (d, i) {
            return timeScale(i);
        })
            .attr('y', this.label_padding / 2)
            .on('mouseenter', function (d) {
            if (_this.in_transition) {
                return;
            }
            var /** @type {?} */ selected = itemScale(moment(d));
            _this.items.selectAll('.item-block')
                .transition()
                .duration(_this.transition_duration)
                .ease(easeLinear)
                .style('opacity', function (d) {
                var /** @type {?} */ start = itemScale(moment(d.date));
                var /** @type {?} */ end = itemScale(moment(d.date).add(d.value, 'seconds'));
                return (selected >= start && selected <= end) ? 1 : 0.1;
            });
        })
            .on('mouseout', function () {
            if (_this.in_transition) {
                return;
            }
            _this.items.selectAll('.item-block')
                .transition()
                .duration(_this.transition_duration)
                .ease(easeLinear)
                .style('opacity', 0.5);
        });
        // Add project labels
        var /** @type {?} */ label_padding = this.label_padding;
        this.labels.selectAll('.label-project').remove();
        this.labels.selectAll('.label-project')
            .data(project_labels)
            .enter()
            .append('text')
            .attr('class', 'label label-project')
            .attr('x', this.gutter)
            .attr('y', function (d) {
            return projectScale(d) + projectScale.bandwidth() / 2;
        })
            .attr('min-height', function () {
            return projectScale.bandwidth();
        })
            .style('text-anchor', 'left')
            .attr('font-size', function () {
            return Math.floor(_this.label_padding / 3) + 'px';
        })
            .text(function (d) {
            return d;
        })
            .each(function (d, i) {
            var /** @type {?} */ obj = select(this), /** @type {?} */ text_length = obj.node().getComputedTextLength(), /** @type {?} */ text = obj.text();
            while (text_length > (label_padding * 1.5) && text.length > 0) {
                text = text.slice(0, -1);
                obj.text(text + '...');
                text_length = obj.node().getComputedTextLength();
            }
        })
            .on('mouseenter', function (project) {
            if (_this.in_transition) {
                return;
            }
            _this.items.selectAll('.item-block')
                .transition()
                .duration(_this.transition_duration)
                .ease(easeLinear)
                .style('opacity', function (d) {
                return (d.name === project) ? 1 : 0.1;
            });
        })
            .on('mouseout', function () {
            if (_this.in_transition) {
                return;
            }
            _this.items.selectAll('.item-block')
                .transition()
                .duration(_this.transition_duration)
                .ease(easeLinear)
                .style('opacity', 0.5);
        });
        // Add button to switch back to previous overview

    };
    
    /**
     * Helper function to calculate item position on the x-axis
     * @param {?} d object
     * @param {?} start_of_year
     * @return {?}
     */
    CalendarHeatmap.prototype.calcItemX = function (d, start_of_year) {
        var /** @type {?} */ date = moment(d.date);
        var /** @type {?} */ dayIndex = Math.round((+date - +moment(start_of_year).startOf('week')) / 86400000);
        var /** @type {?} */ colIndex = Math.trunc(dayIndex / 7);
        return colIndex * (this.item_size + this.gutter) + this.label_padding;
    };
    
    /**
     * Helper function to calculate item position on the y-axis
     * @param {?} d object
     * @return {?}
     */
    CalendarHeatmap.prototype.calcItemY = function (d) {
        return this.label_padding + moment(d.date).weekday() * (this.item_size + this.gutter);
    };
    
    /**
     * Helper function to calculate item size
     * @param {?} d object
     * @param {?} max number
     * @return {?}
     */
    CalendarHeatmap.prototype.calcItemSize = function (d, max$$1) {
        if (max$$1 <= 0) {
            return this.item_size;
        }
        return this.item_size * 0.75 + (this.item_size * d.total / max$$1) * 0.25;
    };
    

    

    /**
     * Helper function to hide the tooltip
     * @return {?}
     */
    CalendarHeatmap.prototype.hideTooltip = function () {
        this.tooltip.transition()
            .duration(this.transition_duration / 2)
            .ease(easeLinear)
            .style('opacity', 0);
    };
    
 
    
    /**
     * Helper function to convert seconds to a human readable format
     * @param {?} seconds Integer
     * @return {?}
     */
    CalendarHeatmap.prototype.formatTime = function (seconds) {
        var /** @type {?} */ hours = Math.floor(seconds / 3600);
        var /** @type {?} */ minutes = Math.floor((seconds - (hours * 3600)) / 60);
        var /** @type {?} */ time = '';
        if (hours > 0) {
            time += hours === 1 ? '1 hour ' : hours + ' hours ';
        }
        if (minutes > 0) {
            time += minutes === 1 ? '1 minute' : minutes + ' minutes';
        }
        if (hours === 0 && minutes === 0) {
            time = Math.round(seconds) + ' seconds';
        }
        return time;
    };
    
    CalendarHeatmap.decorators = [
        { type: Component, args: [{
                    selector: 'calendar-heatmap',
                    template: "<div #root></div>",
                    styles: ["\n    :host {\n      user-select: none;\n      -ms-user-select: none;\n      -moz-user-select: none;\n      -webkit-user-select: none;\n    }\n    :host >>> .item {\n      cursor: pointer;\n    }\n    :host >>> .label {\n      cursor: pointer;\n      fill: rgb(170, 170, 170);\n      font-family: Helvetica, arial, 'Open Sans', sans-serif;\n    }\n    :host >>> .button {\n      cursor: pointer;\n      fill: transparent;\n      stroke-width: 2;\n      stroke: rgb(170, 170, 170);\n    }\n    :host >>> .button text {\n      stroke-width: 1;\n      text-anchor: middle;\n      fill: rgb(170, 170, 170);\n    }\n    :host >>> .heatmap-tooltip {\n      pointer-events: none;\n      position: absolute;\n      z-index: 9999;\n      width: 250px;\n      max-width: 250px;\n      overflow: hidden;\n      padding: 15px;\n      font-size: 12px;\n      line-height: 14px;\n      color: rgb(51, 51, 51);\n      font-family: Helvetica, arial, 'Open Sans', sans-serif;\n      background: rgba(255, 255, 255, 0.75);\n    }\n    :host >>> .heatmap-tooltip .header strong {\n      display: inline-block;\n      width: 250px;\n    }\n    :host >>> .heatmap-tooltip span {\n      display: inline-block;\n      width: 50%;\n      padding-right: 10px;\n      box-sizing: border-box;\n    }\n    :host >>> .heatmap-tooltip span,\n    :host >>> .heatmap-tooltip .header strong {\n      white-space: nowrap;\n      overflow: hidden;\n      text-overflow: ellipsis;\n    }\n  "],
                },] },
    ];
    /**
     * @nocollapse
     */
    CalendarHeatmap.ctorParameters = function () { return []; };
    CalendarHeatmap.propDecorators = {
        'element': [{ type: ViewChild, args: ['root',] },],
        'data': [{ type: Input },],
        'color': [{ type: Input },],
        'overview': [{ type: Input },],
        'handler': [{ type: Output },],
        'onChange': [{ type: Output },],
        'onResize': [{ type: HostListener, args: ['window:resize', ['$event'],] },],
    };
    return CalendarHeatmap;
}());

export { CalendarHeatmap };
