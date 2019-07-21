<?php

namespace Index\Service;

use Index\Service\Product\ProductFactory;

class ProductService
{
    public function index($page, $pageSize, $productName, $categoryId = 0)
    {
        $product = ProductFactory::create($productName);
        return $product->index($page, $pageSize, $categoryId);
    }

    public function detail($productName, $id)
    {
        $product = ProductFactory::create($productName);
        return $product->detail($id);
    }

    public function total($productName, $categoryId = 0)
    {
        $product = ProductFactory::create($productName);
        return $product->total($categoryId);
    }
}