import { Component, Input, Output, EventEmitter, ViewChild, HostListener } from '@angular/core';

// Import dependencies
import moment from 'moment';
import * as d3 from 'd3';

@Component({
  selector: 'calendar-heatmap',
  template: `<div #root></div>`,
  styles: [`
    :host {
      user-select: none;
      -ms-user-select: none;
      -moz-user-select: none;
      -webkit-user-select: none;
    }
    :host >>> .item {
      cursor: pointer;
    }
    :host >>> .label {
      cursor: pointer;
      fill: rgb(170, 170, 170);
      font-family: Helvetica, arial, 'Open Sans', sans-serif;
    }
    :host >>> .button {
      cursor: pointer;
      fill: transparent;
      stroke-width: 2;
      stroke: rgb(170, 170, 170);
    }
    :host >>> .button text {
      stroke-width: 1;
      text-anchor: middle;
      fill: rgb(170, 170, 170);
    }
    :host >>> .heatmap-tooltip {
      pointer-events: none;
      position: absolute;
      z-index: 9999;
      width: 250px;
      max-width: 250px;
      overflow: hidden;
      padding: 15px;
      font-size: 12px;
      line-height: 14px;
      color: rgb(51, 51, 51);
      font-family: Helvetica, arial, 'Open Sans', sans-serif;
      background: rgba(255, 255, 255, 0.75);
    }
    :host >>> .heatmap-tooltip .header strong {
      display: inline-block;
      width: 250px;
    }
    :host >>> .heatmap-tooltip span {
      display: inline-block;
      width: 50%;
      padding-right: 10px;
      box-sizing: border-box;
    }
    :host >>> .heatmap-tooltip span,
    :host >>> .heatmap-tooltip .header strong {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
  `],
})
export class CalendarHeatmap  {
  @ViewChild('root') element: any;

  @Input() data: Array<object>;
  @Input() color: string = '#ff4500';
  @Input() overview: string = 'global';

  @Output() handler: EventEmitter<object> = new EventEmitter<object>();
  @Output() onChange: EventEmitter<object> = new EventEmitter<object>();

  // Defaults
  private gutter: number = 5;
  private item_gutter: number = 1;
  private width: number = 1000;
  private height: number = 200;
  private item_size: number = 10;
  private label_padding: number = 40;
  private max_block_height: number = 20;
  private transition_duration: number = 500;
  private in_transition: boolean = false;

  // Tooltip defaults
  private tooltip_width: number = 250;
  private tooltip_padding: number = 15;

  // Overview defaults
  private history = ['day'];
  private selected = {};

  // D3 related variables
  private svg: any;
  private items: any;
  private labels: any;
  private tooltip: any;


  /**
   * Check if data is available
   */
  ngOnChanges() {
    if ( !this.data ) { return; }

    // Update data summaries
    this.updateDataSummary();

    // Draw the chart
    this.drawChart();
  };


  /**
   * Get hold of the root element and append our svg
   */
  ngAfterViewInit() {
    var element = this.element.nativeElement;

    // Initialize svg element
    this.svg = d3.select(element)
      .append('svg')
      .attr('class', 'svg');

    // Initialize main svg elements
    this.items = this.svg.append('g');
    this.labels = this.svg.append('g');

    // Add tooltip to the same element as main svg
    this.tooltip = d3.select(element).append('div')
      .attr('class', 'heatmap-tooltip')
      .style('opacity', 0);

    // Calculate chart dimensions
    this.calculateDimensions();

    // Draw the chart
    this.drawChart();
  };


  /**
   * Utility function to get number of complete weeks in a year
   */
  getNumberOfWeeks() {
    var dayIndex = Math.round((+moment() - +moment().subtract(1, 'year').startOf('week')) / 86400000);
    var colIndex = Math.trunc(dayIndex / 7);
    var numWeeks = colIndex + 1;
    return numWeeks;
  };


  /**
   * Utility funciton to calculate chart dimensions
   */
  calculateDimensions() {
    var element = this.element.nativeElement;
    this.width = element.clientWidth < 1000 ? 1000 : element.clientWidth;
    this.item_size = ((this.width - this.label_padding) / this.getNumberOfWeeks() - this.gutter);
    this.height = this.label_padding + 7 * (this.item_size + this.gutter);
    this.svg.attr('width', this.width).attr('height', this.height);
  };


  /**
   * Recalculate dimensions on window resize events
   */
  @HostListener('window:resize', ['$event'])
  onResize(event: any) {
    this.calculateDimensions();
    if ( !!this.data && !!this.data[0]['summary'] ) {
      this.drawChart();
    }
  };


  /**
   * Helper function to check for data summary
   */
  updateDataSummary() {
    // Get daily summary if that was not provided
    if ( !this.data[0]['summary'] ) {
      this.data.map((d) => {
        var summary = d['details'].reduce( (uniques: any, project: any) => {
          if ( !uniques[project.name] ) {
            uniques[project.name] = {
              'value': project.value
            };
          } else {
            uniques[project.name].value += project.value;
          }
          return uniques;
        }, {});
        var unsorted_summary = Object.keys(summary).map((key) => {
          return {
            'name': key,
            'value': summary[key].value
          };
        });
        d['summary'] = unsorted_summary.sort((a, b) => {
          return b.value - a.value;
        });
        return d;
      });
    }
  }


  /**
   * Draw the chart based on the current overview type
   */
  drawChart() {
    if ( !this.svg || !this.data ) { return; }

    if ( this.overview === 'global' ) {
      this.drawGlobalOverview();
    } else if ( this.overview === 'year' ) {
      this.drawYearOverview();
      this.onChange.emit({
        overview: this.overview,
        start: moment(this.selected['date']).startOf('year'),
        end: moment(this.selected['date']).endOf('year'),
      })
    } else if ( this.overview === 'month' ) {
      this.drawMonthOverview();
      this.onChange.emit({
        overview: this.overview,
        start: moment(this.selected['date']).startOf('month'),
        end: moment(this.selected['date']).endOf('month'),
      })
    } else if ( this.overview === 'week' ) {
      this.drawWeekOverview();
      this.onChange.emit({
        overview: this.overview,
        start: moment(this.selected['date']).startOf('week'),
        end: moment(this.selected['date']).endOf('week'),
      })
    } else if ( this.overview === 'day' ) {
      this.drawDayOverview();
      this.onChange.emit({
        overview: this.overview,
        start: moment(this.selected['date']).startOf('day'),
        end: moment(this.selected['date']).endOf('day'),
      })
    }
  };


//  

  /**
   * Draw day overview
   */
  drawDayOverview() {
    // Add current overview to the history
    if ( this.history[this.history.length-1] !== this.overview ) {
      this.history.push(this.overview);
    }

    // Initialize selected date to today if it was not set
    if ( !Object.keys(this.selected).length ) {
        this.selected = this.data[this.data.length - 1];
    }

    var project_labels = this.selected['summary'].map((project: any) => {
      return project.name;
    });
    var projectScale = d3.scaleBand()
      .rangeRound([this.label_padding, this.height])
      .domain(project_labels);

    var itemScale = d3.scaleTime()
      .range([this.label_padding * 2, this.width])
      .domain([moment(this.selected['date']).startOf('day'), moment(this.selected['date']).endOf('day')]);
    this.items.selectAll('.item-block').remove();
    this.items.selectAll('.item-block')
      .data(this.selected['details'])
      .enter()
      .append('rect')
      .attr('class', 'item item-block')
      .attr('x', (d: any) => {
        return itemScale(moment(d.date));
      })
      .attr('y', (d: any) => {
        return (projectScale(d.name) + projectScale.bandwidth() / 2) - 15;
      })
      .attr('width', (d: any) => {
        var end = itemScale(d3.timeSecond.offset(moment(d.date).toDate(), d.value));
        return Math.max((end - itemScale(moment(d.date))), 1);
      })
      .attr('height', () => {
        return Math.min(projectScale.bandwidth(), this.max_block_height);
      })
      .attr('fill', () => {
        return this.color;
      })
      .style('opacity', 0)
      .on('mouseover', (d: any) => {
        if ( this.in_transition ) { return; }

        // Construct tooltip
        var tooltip_html = '';
        tooltip_html += '<div class="header"><strong>' + d.name + '</strong><div><br>';
        tooltip_html += '<div><strong>' + (d.value ? this.formatTime(d.value) : 'No time') + ' tracked</strong></div>';
        tooltip_html += '<div>on ' + moment(d.date).format('dddd, MMM Do YYYY HH:mm') + '</div>';

        // Calculate tooltip position
        var x = d.value * 100 / (60 * 60 * 24) + itemScale(moment(d.date));
        while ( this.width - x < (this.tooltip_width + this.tooltip_padding * 3) ) {
          x -= 10;
        }
        var y = projectScale(d.name) + projectScale.bandwidth() / 2 + this.tooltip_padding / 2;

        // Show tooltip
        this.tooltip.html(tooltip_html)
          .style('left', x + 'px')
          .style('top', y + 'px')
          .transition()
            .duration(this.transition_duration / 2)
            .ease(d3.easeLinear)
            .style('opacity', 1);
      })
      .on('mouseout', () => {
        if ( this.in_transition ) { return; }
        this.hideTooltip();
      })
      .on('click', (d: any) => {
        if ( this.handler ) {
          this.handler.emit(d);
        }
      })
      .transition()
        .delay(() => {
          return (Math.cos(Math.PI * Math.random()) + 1) * this.transition_duration;
        })
        .duration(() => {
          return this.transition_duration;
        })
        .ease(d3.easeLinear)
        .style('opacity', 0.5)
        .call((transition: any, callback: any) => {
          if ( transition.empty() ) {
            callback();
          }
          var n = 0;
          transition
            .each(() => { ++n; })
            .on('end', function () {
              if ( !--n ) {
                callback.apply(this, arguments);
              }
            });
          }, () => {
            this.in_transition = false;
          });

    // Add time labels
    var timeLabels = d3.timeHours(
      moment(this.selected['date']).startOf('day').toDate(),
      moment(this.selected['date']).endOf('day').toDate()
    );
    var timeScale = d3.scaleTime()
      .range([this.label_padding * 2, this.width])
      .domain([0, timeLabels.length]);
    this.labels.selectAll('.label-time').remove();
    this.labels.selectAll('.label-time')
      .data(timeLabels)
      .enter()
      .append('text')
      .attr('class', 'label label-time')
      .attr('font-size', () => {
        return Math.floor(this.label_padding / 3) + 'px';
      })
      .text((d: any) => {
        return moment(d).format('HH:mm');
      })
      .attr('x', (d: any, i: number) => {
        return timeScale(i);
      })
      .attr('y', this.label_padding / 2)
      .on('mouseenter', (d: any) => {
        if ( this.in_transition ) { return; }

        var selected = itemScale(moment(d));
        this.items.selectAll('.item-block')
          .transition()
          .duration(this.transition_duration)
          .ease(d3.easeLinear)
          .style('opacity', (d: any) => {
            var start = itemScale(moment(d.date));
            var end = itemScale(moment(d.date).add(d.value, 'seconds'));
            return ( selected >= start && selected <= end ) ? 1 : 0.1;
          });
      })
      .on('mouseout', () => {
        if ( this.in_transition ) { return; }

        this.items.selectAll('.item-block')
          .transition()
          .duration(this.transition_duration)
          .ease(d3.easeLinear)
          .style('opacity', 0.5);
      });

    // Add project labels
    var label_padding = this.label_padding;
    this.labels.selectAll('.label-project').remove();
    this.labels.selectAll('.label-project')
      .data(project_labels)
      .enter()
      .append('text')
      .attr('class', 'label label-project')
      .attr('x', this.gutter)
      .attr('y', (d: any) => {
        return projectScale(d) + projectScale.bandwidth() / 2;
      })
      .attr('min-height', () => {
        return projectScale.bandwidth();
      })
      .style('text-anchor', 'left')
      .attr('font-size', () => {
        return Math.floor(this.label_padding / 3) + 'px';
      })
      .text((d: any) => {
        return d;
      })
      .each(function (d: any, i: number) {
        var obj = d3.select(this),
          text_length = obj.node().getComputedTextLength(),
          text = obj.text();
        while (text_length > (label_padding * 1.5) && text.length > 0) {
          text = text.slice(0, -1);
          obj.text(text + '...');
          text_length = obj.node().getComputedTextLength();
        }
      })
      .on('mouseenter', (project: any) => {
        if ( this.in_transition ) { return; }

        this.items.selectAll('.item-block')
          .transition()
          .duration(this.transition_duration)
          .ease(d3.easeLinear)
          .style('opacity', (d: any) => {
            return (d.name === project) ? 1 : 0.1;
          });
      })
      .on('mouseout', () => {
        if ( this.in_transition ) { return; }

        this.items.selectAll('.item-block')
          .transition()
          .duration(this.transition_duration)
          .ease(d3.easeLinear)
          .style('opacity', 0.5);
      });

  };


  /**
   * Helper function to calculate item position on the x-axis
   * @param d object
   */
  calcItemX(d: any, start_of_year: any) {
    var date = moment(d.date);
    var dayIndex = Math.round((+date - +moment(start_of_year).startOf('week')) / 86400000);
    var colIndex = Math.trunc(dayIndex / 7);
    return colIndex * (this.item_size + this.gutter) + this.label_padding;
  };


  /**
   * Helper function to calculate item position on the y-axis
   * @param d object
   */
  calcItemY(d: any) {
    return this.label_padding + moment(d.date).weekday() * (this.item_size + this.gutter);
  };


  /**
   * Helper function to calculate item size
   * @param d object
   * @param max number
   */
  calcItemSize(d: any, max: number) {
    if ( max <= 0 ) { return this.item_size; }
    return this.item_size * 0.75 + (this.item_size * d.total / max) * 0.25;
  };


 

  /**
   * Helper function to hide the tooltip
   */
  hideTooltip() {
    this.tooltip.transition()
      .duration(this.transition_duration / 2)
      .ease(d3.easeLinear)
      .style('opacity', 0);
  };





  /**
   * Helper function to convert seconds to a human readable format
   * @param seconds Integer
   */
  formatTime(seconds: number) {
    var hours = Math.floor(seconds / 3600);
    var minutes = Math.floor((seconds - (hours * 3600)) / 60);
    var time = '';
    if ( hours > 0 ) {
      time += hours === 1 ? '1 hour ' : hours + ' hours ';
    }
    if ( minutes > 0 ) {
      time += minutes === 1 ? '1 minute' : minutes + ' minutes';
    }
    if ( hours === 0 && minutes === 0 ) {
      time = Math.round(seconds) + ' seconds';
    }
    return time;
  };
}
