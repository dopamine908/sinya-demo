<?php


namespace App\QueryFilter;


use Closure;

abstract class Filter
{
    //search key name
    protected $filter_name;

    public function handle($request, Closure $next)
    {
        if (request()->has($this->filter_name)) {
            $query_builder = $next($request);
            return $this->applyFilter($query_builder);
        }
        return $next($request);
    }

    abstract protected function applyFilter($query_builder);

}
