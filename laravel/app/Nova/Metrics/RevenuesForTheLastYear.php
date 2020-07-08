<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Value;

use App\StoreRevenue;
use Carbon\Carbon;

class RevenuesForTheLastYear extends Value
{
    /**
     * Get the displayable name of the metric.
     *
     * @return string
     */
    public function name()
    {
        return __('Revenues For The Last Year');
    }

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $last_year = Carbon::Now()->subYear()->year;
        $two_years_ago = Carbon::Now()->subYears(2)->year;

        $total_store_revenues_last_year = StoreRevenue::where('store_id', $request->resourceId)
            ->whereYear('report_date', $last_year)
            ->sum('amount');

        $total_store_revenues_two_years_ago = StoreRevenue::where('store_id', $request->resourceId)
            ->whereYear('report_date', $two_years_ago)
            ->sum('amount');

        return $this->result($total_store_revenues_last_year)->previous($total_store_revenues_two_years_ago)->prefix('€');
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
        return 'revenues-for-the-last-year';
    }
}
