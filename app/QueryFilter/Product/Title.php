<?php


namespace App\QueryFilter\Product;


use App\QueryFilter\Filter;

class Title extends Filter
{
    protected $filter_name = 'title';

    protected function applyFilter($query_builder)
    {
        return $query_builder->where($this->filter_name, 'like', '%' . request($this->filter_name) . '%');
    }
}
