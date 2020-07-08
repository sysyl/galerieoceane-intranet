<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Trend;
use Laravel\Nova\Metrics\TrendResult;

use App\StoreRevenue;
use Carbon\Carbon;

class TotalRevenuesForTheLastTwelveMonths extends Trend
{
    /**
     * Get the displayable name of the metric.
     *
     * @return string
     */
    public function name()
    {
        return __('Revenues For The Last 12 Months');
    }

    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        /**
         * Get max report_date available
         * Then select the twelve previous months
         */
        $last_report_date = StoreRevenue::max('report_date');

        $total_store_revenues = StoreRevenue::groupBy('report_date')
            ->selectRaw('sum(amount) as sum, report_date')
            ->where('report_date', '>', Carbon::createFromFormat('Y-m-d', $last_report_date)->subMonths(12)->endOfMonth()->toDateString())
            ->pluck('sum','report_date')
            ->toArray();

        return (new TrendResult)->trend($total_store_revenues)
            ->showLatestValue()
            ->prefix('€');
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
        return 'total-revenues-for-the-last-twelve-months';
    }
}
