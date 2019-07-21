<?php

namespace Index\Service\Product;

Abstract class AbstractProduct
{
    const PICTURE_HOST = 'http://www.bjsdly.com/admin/uploadpic/';

    abstract function index($page, $pageSize, $categoryId = 0);

    abstract function detail($id);

    abstract function total($categoryId = 0);
}