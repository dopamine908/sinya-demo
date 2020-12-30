<?php


namespace App\QueryFilter\Product;

use App\QueryFilter\Filter;


class Brand extends Filter
{
    protected $filter_name = 'brand';

    protected function applyFilter($query_builder)
    {
        return $query_builder->where($this->filter_name, '=', request($this->filter_name));
    }
}
