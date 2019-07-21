<?php


namespace Index\Controller;

use Index\Service\CategoryService;
use Index\Service\Product\ProductConstant;
use Index\Service\ProductService;
use Think\Controller;

class ProductController extends Controller
{

    public function index()
    {
        $page = I('get.page', 1);
        $pageSize = I('get.page_size', 4);
        $categoryId = I('get.id');
        $category = CategoryService::category();
        $this->assign('category', $category);
        $this->assign('product', ProductService::index(ProductConstant::PRODUCT, $categoryId));
        $this->display('index');
    }

    public function detail()
    {
        $productId = I('get.id');
        $category = CategoryService::category();
        $detail = !empty($productId) ? ProductService::detail(ProductConstant::PRODUCT, $productId) : [];
        $content = !empty($detail) ? $detail['content'] : '';
        $this->assign('category', $category);
        $this->assign('detail', $detail);
        $this->assign('content', $content);
        $this->display('detail');
    }
}