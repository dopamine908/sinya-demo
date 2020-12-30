<?php


namespace App\Presenter;


class SearchTag
{
    public function isBrandSelected($brand)
    {
        if ($brand == request()->input('brand')) {
            return 'selected';
        } else {
            return '';
        }
    }

    public function isPriceLevelSelected($price_level_)
    {
        if (request()->input('price_interval') == $price_level_) {
            return 'selected';
        } else {
            return '';
        }
    }
}
