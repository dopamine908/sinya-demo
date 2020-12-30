<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Service\Product;

class IndexController extends Controller
{

    /**
     * @var Product
     */
    private $ProductService;

    public function __construct(Product $product)
    {
        $this->ProductService = $product;
    }

    public function index(ProductRequest $request)
    {
        $all_brand = $this->ProductService->getAllBrand();
        $products_paginate = $this->ProductService->getSearchProduct();
        return view('index', compact('products_paginate', 'all_brand'));
    }
}
