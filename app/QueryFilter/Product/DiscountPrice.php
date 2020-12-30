<?php


namespace App\QueryFilter\Product;


use App\QueryFilter\Filter;
use Illuminate\Support\Str;

class DiscountPrice extends Filter
{
    protected $filter_name = 'price_interval';

    protected function applyFilter($query_builder)
    {
        return $query_builder->whereBetween('discount_price', $this->getPriceInterval());
    }

    private function getPriceInterval()
    {
        $price_interval = request('price_interval');

        if (Str::contains($price_interval, 'level_1')) {
            return [10000, 14999];
        }
        if (Str::contains($price_interval, 'level_2')) {
            return [15000, 19999];
        }
        if (Str::contains($price_interval, 'level_3')) {
            return [20000, 24999];
        }
        if (Str::contains($price_interval, 'level_4')) {
            return [25000, 30000];
        }
    }
}
