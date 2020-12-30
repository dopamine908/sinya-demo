<?php


namespace App\Presenter;


class ProductShow
{
    public function getProductItemTitle($product)
    {
        return '[ ' . $product->brand . ' ] ' . $product->title;
    }

    public function getProductItemOriginalPrice($original_price)
    {
        return '$ ' . $original_price;
    }

    public function getProductItemDiscountPrice($discount_price)
    {
        return '$ ' . $discount_price;
    }

    public function getPaginationLinks($products_paginate)
    {
        return $products_paginate->appends(request()->input())->links();
    }

    public function getPreviewImageUrl()
    {
        return 'https://picsum.photos/id/1/300/200';
    }
}
