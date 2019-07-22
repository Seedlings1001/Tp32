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
			<h3>工程案例</h3>
		</div>
		
		<!--案列-->
		<div class="case content">
			<h3 class="case_tit">北京盛达龙源水箱有限公司2012年部分业绩表北京盛达龙源水箱有限公司2012年部分业绩表</h3>
			<div class="case_tab">
				<table>
					<thead><tr><th>序号</th><th>工程名称</th><th>产品名称</th><th>规格</th><th>数量（台）</th></tr></thead>
					<tbody><tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						<tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						<tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						<tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						<tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						<tr><td>1</td><td>钓鱼台国宾馆</td><td>不锈钢水箱</td><td>5*3*2=30M</td><td>3</td></tr>
						
					</tbody>
				</table>
			</div>
		</div>


		<div class="index_bot">
			<a><img src="/Public/style/images/icon-3.png"><span>在线QQ</span></a>
			<i class="line_throw"></i>
			<a><img src="/Public/style/images/icon-4.png"><span>在线电话</span></a>
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
	</body>

</html>