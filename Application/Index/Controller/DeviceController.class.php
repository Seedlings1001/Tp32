<?php


namespace Index\Controller;

use Index\Service\CategoryService;
use Index\Service\Product\ProductConstant;
use Index\Service\ProductService;
use Think\Controller;

class DeviceController extends Controller
{

    public function index()
    {
        $page = I('get.page', 1);
        $pageSize = I('get.page_size', 4);
        $this->assign('product', ProductService::index(ProductConstant::DEVICE));
        $this->display('index');
    }

    public function detail()
    {
        $productId = I('get.id');
        $detail = !empty($productId) ? ProductService::detail(ProductConstant::DEVICE ,$productId) : [];
        $content = !empty($detail) ? $detail['content'] : '';
        $this->assign('detail', $detail);
        $this->assign('content', $content);
        $this->display('detail');
    }
}