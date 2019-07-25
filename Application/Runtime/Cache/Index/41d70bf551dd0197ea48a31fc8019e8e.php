<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title></title>
    <link href="/Public/style/css/style.css" type="text/css" rel="stylesheet" />
    <link href="/Public/style/css/swiper.min.css" type="text/css" rel="stylesheet">
    <script src="/Public/style/js/jquery-1.8.3.min.js"></script>
</head>

	<body>
		<!--头部-->
		<div class="head">
			<h3>北京盛达龙源不锈钢水箱有限公司</h3>
			<a class="top_nav top_menu"></a>
		</div>
		<div class="menu_nav">
    <div class="menu_txt">
        <a href="<?php echo U('Index/Index/index');?>">网站首页</a>
        <a href="<?php echo U('Index/Index/introduct');?>">公司简介</a>
        <a href="<?php echo U('Index/Product/index');?>">产品展示</a>
        <a href="<?php echo U('Index/Index/cases');?>">工程案例</a>
        <a href="<?php echo U('Index/Device/index');?>">公司设备</a>
        <a href="<?php echo U('Index/Half/index');?>">半成品展示</a>
        <a href="<?php echo U('Index/Index/order');?>">在线订单</a>
        <a href="<?php echo U('Index/Index/contact');?>">联系我们</a>
    </div>
</div>
		
		<!--顶部栏-->
		<div class="top_bar">
			<a href="javascript:window.history.back(-1);" class="bar_l"></a>
			<h3>公司简介</h3>
		</div>
		
		<!--公司介绍-->
		<div class="index_comp" style="padding: 1rem 0 7rem;">
			<div class="index_comp_txt content">
				<img src="/Public/style/images/comp.jpg" />
				<?php if(is_array($introduct)): foreach($introduct as $k=>$vo): ?><p><?php echo ($vo); ?></p><?php endforeach; endif; ?>
			</div>
		</div>

		<div class="index_bot">
    <a href="http://wpa.qq.com/msgrd?v=6&uin=1045348200&site=qq&menu=yes"><img src="/Public/style/images/icon-3.png"><span>在线QQ</span></a>
    <i class="line_throw"></i>
    <a href="tel:13641133307"><img src="/Public/style/images/icon-4.png"><span>在线电话</span></a>
    <i class="line_throw"></i>
    <a class="scroll_top"><img src="/Public/style/images/icon-5.png"><span>返回顶部</span></a>
</div>

		<script src="/Public/style/js/swiper.min.js"></script>
		<script>

			$(document).ready(function() {
				$('.top_nav').click(function() {
					if($(this).hasClass('top_menu')) {
						$(this).removeClass('top_menu')
						$(this).addClass('top_close')
						$('.menu_nav').show()
					} else {
						$(this).removeClass('top_close')
						$(this).addClass('top_menu')
						$('.menu_nav').hide()
					}
				})
				
				$('.scroll_top').click(function(){
					window.scrollTo(0,0);
				})
			})
		</script>
		<script>
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "https://hm.baidu.com/hm.js?4ced54e4876ca5921cde012b4191166b";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s);
			})();
		</script>
	</body>

</html>