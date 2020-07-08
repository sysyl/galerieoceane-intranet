<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

use App\Product;
use App\Store;
use App\StoreRevenue;
use Carbon\Carbon;

class TotalRevenuesPerProductForTheLastTwelveMonths extends Partition
{
    /**
     * Get the displayable name of the metric.
     *
     * @return string
     */
    public function name()
    {
        return __('Last 12 Months Totals');
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

        $colors = Product::pluck('color', 'name')->toArray();

        $total_store_revenues = StoreRevenue::join('stores', 'store_revenues.store_id', '=', 'stores.id')
            ->join('products', 'stores.product_id', '=', 'products.id')
            ->groupBy('products.id')
            ->selectRaw('sum(store_revenues.amount) as sum, products.name as name')
            ->where('store_revenues.report_date', '>', Carbon::createFromFormat('Y-m-d', $last_report_date)->subMonths(12)->endOfMonth()->toDateString())
            ->pluck('sum','name')
            ->toArray();

        // Rounded in M€
        $func = function($value) {
            return $value/1000000;
        };
        $total_store_revenues = array_map($func, $total_store_revenues);

        return $this->result($total_store_revenues)->colors($colors);
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
        return 'total-revenues-per-product-for-the-last-twelve-months';
    }
}
