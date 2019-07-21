<?php


namespace Index\Controller;

use Index\Service\CategoryService;
use Index\Service\CompanyService;
use Index\Service\Product\ProductConstant;
use Index\Service\ProductService;
use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $categoryId = I('get.id');
        $category = CategoryService::category();
        $this->assign('category', $category);
        $categoryId = !empty($categoryId) ? $categoryId : $category[0]['type_id'];
        $this->assign('product', ProductService::index(ProductConstant::PRODUCT, $categoryId));
        $introduct = CompanyService::introduct();
        $this->assign('introduct', $introduct);
        $contact = CompanyService::contact();
        $this->assign('contact', $contact);
        $device = ProductService::index(ProductConstant::DEVICE);
        $this->assign('device', $device);
        $this->display('index');
    }

    public function contact()
    {
        $contact = CompanyService::contact();
        $this->assign('contact', $contact);
        $this->display('contact');
    }

    public function cases()
    {
        $this->display('cases');
    }

    public function introduct()
    {
        $introduct = CompanyService::introduct();
        $this->assign('introduct', $introduct);
        $this->display('introduct');
    }

    public function order()
    {
        $this->display('order');
    }
}