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
        $categoryId = I('get.id', 0);
        $page = I('get.page', 1);
        $pageSize = I('get.page_size', 4);
        $category = CategoryService::category();
        $this->assign('category', $category);
        $categoryId = !empty($categoryId) ? $categoryId : $category[0]['type_id'];
        $this->assign('product', ProductService::index($page, $pageSize, ProductConstant::PRODUCT, $categoryId));
        $introduct = CompanyService::introduct();
        $this->assign('introduct', $introduct);
        $contact = CompanyService::contact();
        $this->assign('contact', $contact);
        $device = ProductService::index($page, $pageSize, ProductConstant::DEVICE);
        $this->assign('flag', $categoryId);
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

    public function email()
    {
        require __DIR__ . '/../../Library/class.phpmailer.php';

        try {
            $mail = new \PHPMailer();
            //是否启用smtp的debug进行调试 开发环境建议开启 生产环境注释掉即可 默认关闭debug调试模式
            $mail->SMTPDebug = 1;
            //使用smtp鉴权方式发送邮件，当然你可以选择pop方式 sendmail方式等 本文不做详解
            //可以参考http://phpmailer.github.io/PHPMailer/当中的详细介绍
            $mail->isSMTP();
            //smtp需要鉴权 这个必须是true
            $mail->SMTPAuth=true;
            //设置ssl连接smtp服务器的远程服务器端口号 可选465或587
            $mail->Port =465;
            //链接域名邮箱的服务器地址
            $mail->Host = 'smtp.qq.com';
            //smtp登录的账号 这里填入字符串格式的qq号即可
            $mail->Username ='811472925@qq.com';
            //smtp登录的密码 这里填入“独立密码” 若为设置“独立密码”则填入登录qq的密码 建议设置“独立密码”
            $mail->Password = 'zfvlufiugtcqbehi';
            $mail->From = "811472925@qq.com";
            //设置使用ssl加密方式登录鉴权
            $mail->SMTPSecure = 'ssl';
            //设置发件人姓名（昵称） 任意内容，显示在收件人邮件的发件人邮箱地址前的发件人姓名
            $mail->FromName = '手机端网站';
            $mail->CharSet = "utf-8";
            $mail->AddAddress('bjsdly@126.com');
            $mail->AddAddress('sysdlysx@163.com');
            $mail->AddAddress('381493538@qq.com');
            //邮件正文是否为html编码 注意此处是一个方法 不再是属性 true或false
            $mail->isHTML(true);
            //添加该邮件的主题
            $mail->Subject = date('Y-m-d H:i') . ' 客户咨询：';
            //添加邮件正文 上方将isHTML设置成了true，则可以是完整的html字符串 如：使用file_get_contents函数读取本地的html文件
            $mail->Body = '标题：' . I('post.subject', '') . '<br>'.
                '地址：' . I('post.address', '') . '<br/>'.
                '姓名：' . I('post.name', '') . '<br/>'.
                '单位：' . I('post.company', '') . '<br/>'.
                '电邮：' . I('post.email', '') . '<br/>'.
                '电话：' . I('post.tel', '') . '<br/>'.
                '传真：' . I('post.fax', '') . '<br/>'.
                '内容：' . I('post.content', '');
            $mail->AltBody = "text/html";
            //PS：经过测试，要是收件人不存在，若不出现错误依然返回true 也就是说在发送之前 自己需要些方法实现检测该邮箱是否真实有效
            $mail->send();
            redirect(U('Index/index/order'), 5, '发送成功,页面跳转中...');
        } catch (\phpmailerException $e) {
            redirect(U('Index/index/order'), 5, '发送失败,页面跳转中...');
        }
    }
}