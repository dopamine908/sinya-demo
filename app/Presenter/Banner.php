<?php


namespace App\Presenter;


class Banner
{
    public function getTitleSearchValue()
    {
        return request()->input('title');
    }
}
