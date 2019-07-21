<?php

namespace Index\Service\Product;

use \Exception;

class ProductFactory
{
    public static function create($productName)
    {
        $class = 'Index\\Service\\Product\\' . $productName;
        if (!class_exists($class)) {
            throw new Exception("Invalid product name : $productName");
        }
        return new $class;
    }
}