<?php


namespace App\Service;


use App\Repositories\Product as ProductRepo;

class Product
{
    /**
     * @var ProductRepo
     */
    private $ProductRepo;

    public function __construct(ProductRepo $ProductRepo)
    {
        $this->ProductRepo = $ProductRepo;
    }

    public function getSearchProduct()
    {
        return $this->ProductRepo->getSearchProduct();
    }
}
