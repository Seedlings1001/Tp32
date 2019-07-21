<?php

namespace Index\Traits;

use Index\Service\ProductService;

trait Paginater
{
    public function render($productName, $categoryId = 0)
    {
        $page = I('get.page', 1);
        $pageSize = I('get.page_size', 4);
        $total = ProductService::total($productName, $categoryId);
        return [
            'pages' => ceil($total / $pageSize),
            'page_size' => $pageSize,
            'current_page' => $page,
            'back_page' => ceil($total / $pageSize),
            'first_page' => 1,
            'next_page' => $page + 1,
            'prev_page' => ($page - 1) == 0 ? 1 : ($page - 1),
        ];
    }
}