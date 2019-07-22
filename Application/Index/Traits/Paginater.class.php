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
        $currentPage = $page <= ceil($total / $pageSize) ? $page : ceil($total / $pageSize);
        $nextPage = $currentPage == ceil($total / $pageSize) ? 0 : $currentPage + 1;
        $prevPage = $currentPage <= 1 ? 0 : $currentPage - 1;
        return [
            'pages' => ceil($total / $pageSize),
            'page_size' => $pageSize,
            'current_page' => $currentPage,
            'back_page' => ceil($total / $pageSize),
            'first_page' => 1,
            'next_page' => $nextPage ,
            'prev_page' => $prevPage,
        ];
    }
}