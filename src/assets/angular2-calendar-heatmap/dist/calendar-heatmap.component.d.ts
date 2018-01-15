import { EventEmitter } from '@angular/core';
export declare class CalendarHeatmap {
    element: any;
    data: Array<object>;
    color: string;
    overview: string;
    handler: EventEmitter<object>;
    onChange: EventEmitter<object>;
    private gutter;
    private item_gutter;
    private width;
    private height;
    private item_size;
    private label_padding;
    private max_block_height;
    private transition_duration;
    private in_transition;
    private tooltip_width;
    private tooltip_padding;
    private history;
    private selected;
    private svg;
    private items;
    private labels;
   
    private tooltip;
    /**
     * Check if data is available
     */
    ngOnChanges(): void;
    /**
     * Get hold of the root element and append our svg
     */
    ngAfterViewInit(): void;
    /**
     * Utility function to get number of complete weeks in a year
     */
    getNumberOfWeeks(): number;
    /**
     * Utility funciton to calculate chart dimensions
     */
    calculateDimensions(): void;
    /**
     * Recalculate dimensions on window resize events
     */
    onResize(event: any): void;
    /**
     * Helper function to check for data summary
     */
    updateDataSummary(): void;
    /**
     * Draw the chart based on the current overview type
     */
    drawChart(): void;
    /**
     * Draw global overview (multiple years)
     */

    drawDayOverview(): void;
    /**
     * Helper function to calculate item position on the x-axis
     * @param d object
     */
    calcItemX(d: any, start_of_year: any): number;
    /**
     * Helper function to calculate item position on the y-axis
     * @param d object
     */
    calcItemY(d: any): number;
    /**
     * Helper function to calculate item size
     * @param d object
     * @param max number
     */
    calcItemSize(d: any, max: number): number;



  
    hideTooltip(): void;
 
    /**
     * Helper function to convert seconds to a human readable format
     * @param seconds Integer
     */
    formatTime(seconds: number): string;
}
