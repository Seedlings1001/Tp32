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
			<a class="bar_l"></a>
			<h3>产品详情</h3>
		</div>
		<div class="content">

			<ul class="product_nav" style="margin-bottom: 0;">
				<li class="tab">
					<a href="<?php echo U('index');?>">全部</a>
				</li>
				<?php if(is_array($category)): foreach($category as $k=>$vo): ?><li>
					<a href="<?php echo U('index?id='.$vo['type_id']);?>"><?php echo ($vo["type_name"]); ?></a>
					</li><?php endforeach; endif; ?>
			</ul>
			
			<!--产品详情-->
			<div class="pro_detail" style="padding: 1rem 0 7rem;">
				<?php if(!empty($detail)): ?><h3 class="pro_de_tit"><?php echo ($detail["product_name"]); ?></h3>
					<img src="<?php echo ($detail["picurl1"]); ?>" />
					<?php if(!empty($content)): if(is_array($content)): foreach($content as $k=>$vo): if(($vo == '')): elseif(($k == 0) OR ($k == count($content)- 2)): ?>
								<p><?php echo ($vo); ?></p>
								<?php else: ?>
								<?php if(($vo == '产品特点')): ?><h3 class="pro_h3"><?php echo ($vo); ?></h3>
								<?php else: ?>
									<span><?php echo ($vo); ?></span><?php endif; endif; endforeach; endif; endif; endif; ?>
			</div>

		</div>

		<div class="index_bot">
			<a><img src="/Public/style/images/icon-3.png"><span>在线QQ</span></a>
			<i class="line_throw"></i>
			<a><img src="/Public/style/images/icon-4.png"><span>在线电话</span></a>
			<i class="line_throw"></i>
			<a><img src="/Public/style/images/icon-5.png"><span>返回顶部</span></a>
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
			})
		</script>
	</body>

</html>