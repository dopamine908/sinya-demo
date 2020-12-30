<?php


namespace App\Repositories;


use App\QueryFilter\Product\Brand;
use App\QueryFilter\Product\DiscountPrice;
use App\QueryFilter\Product\Title;
use Illuminate\Pipeline\Pipeline;

class Product
{
    private $per_page = 20;

    public function getSearchProduct()
    {
        $pipeline = app(Pipeline::class)
            ->send(\App\Models\Product::query())
            ->through(
                [
                    Brand::class,
                    Title::class,
                    DiscountPrice::class,
                ]
            )->thenReturn();

        return $pipeline->paginate($this->per_page);
    }

    public function getAllBrand()
    {
        return \App\Models\Product::distinct()->pluck('brand');
    }
}
