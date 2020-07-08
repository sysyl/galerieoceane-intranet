<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

use App\StoreRevenue;
use Carbon\Carbon;

class RevenuesForTheCurrentYear extends Value
{
    /**
     * Get the displayable name of the metric.
     *
     * @return string
     */
    public function name()
    {
        return __('Revenues For The Current Year');
    }

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $current_year = Carbon::Now()->year;
        $last_year = Carbon::Now()->subYear()->year;

        $total_store_revenues_current_year = StoreRevenue::where('store_id', $request->resourceId)
            ->whereYear('report_date', $current_year)
            ->sum('amount');

        $total_store_revenues_last_year = StoreRevenue::where('store_id', $request->resourceId)
            ->whereYear('report_date', $last_year)
            ->sum('amount');

        return $this->result($total_store_revenues_current_year)->previous($total_store_revenues_last_year)->prefix('€');
    }

    /**
     * Get the ranges available for the metric.
     *
     * @return array
     */
    public function ranges()
    {
        return [];
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        return now()->addMinutes(1440);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'revenues-for-the-current-year';
    }
}
