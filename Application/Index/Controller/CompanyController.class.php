<?php


namespace Index\Controller;

use Index\Service\CategoryService;
use Index\Service\ProductService;
use Think\Controller;

class CompanyController extends Controller
{

    public function index()
    {
        $categoryId = I('get.id');
        $category = CategoryService::category();
        $this->assign('category', $category);
        $this->assign('product', ProductService::product($categoryId));
        $this->display('index');
    }

    public function detail()
    {
        $productId = I('get.id');
        $category = CategoryService::category();
        $detail = !empty($productId) ? ProductService::productDetail($productId) : [];
        $content = !empty($detail) ? $detail['content'] : '';
        $this->assign('category', $category);
        $this->assign('detail', $detail);
        $this->assign('content', $content);
        $this->display('detail');
    }
}