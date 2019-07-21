<?php


namespace Index\Controller;

use Index\Service\CategoryService;
use Index\Service\Product\ProductConstant;
use Index\Service\ProductService;
use Index\Traits\Paginater;
use Think\Controller;

class HalfController extends Controller
{
    use Paginater;

    public function index()
    {
        $categoryId = I('get.id');
        $page = I('get.page', 1);
        $pageSize = I('get.page_size', 4);
        $category = CategoryService::halfCategory();
        $this->assign('category', $category);
        $this->assign('product', ProductService::index($page , $pageSize, ProductConstant::HALF, $categoryId));
        $this->assign('page', $this->render(ProductConstant::HALF, $categoryId));
        $this->display('index');
    }

    public function detail()
    {
        $productId = I('get.id');
        $category = CategoryService::halfCategory();
        $detail = !empty($productId) ? ProductService::detail(ProductConstant::HALF ,$productId) : [];
        $content = !empty($detail) ? $detail['content'] : '';
        $this->assign('category', $category);
        $this->assign('detail', $detail);
        $this->assign('content', $content);
        $this->display('detail');
    }
}