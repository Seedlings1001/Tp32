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

		<div class="banner"><img src="/Public/style/images/banner.jpg"></div>
		<div class="index_pro">
			<div class="index_tit">
				<h3>产品展示</h3>
				<hr>
				<span>Products</span>
			</div>
			<div class="content">
				<div class="index_sort">
					<?php if(is_array($category)): foreach($category as $k=>$vo): if(($k == 0)): ?><a class="cur"><?php echo ($vo["type_name"]); ?></a>
						<?php else: ?>
							<a href="<?php echo U('index?id='.$vo['type_id']);?>"><?php echo ($vo["type_name"]); ?></a><?php endif; endforeach; endif; ?>
					<a href="<?php echo U('Index/Product/index');?>">查看更多>></a>
				</div>
			</div>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php if(is_array($product)): foreach($product as $k=>$vo): ?><div class="swiper-slide">
							<a class="now" href="<?php echo U('Index/Product/index?id='.$vo['id']);?>">
								<img src="<?php echo ($vo["picurl1"]); ?>" />
								<span><?php echo ($vo["product_name"]); ?></span>
							</a>
						</div><?php endforeach; endif; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-pagination"></div>
			</div>
		</div>
		<!--公司介绍-->
		<div class="index_comp">
			<div class="index_tit">
				<h3>公司简介</h3>
				<hr>
				<span>Introduction</span>
			</div>
			<div class="index_comp_txt content">
				<img src="/Public/style/images/comp.jpg" />
				<?php if(is_array($introduct)): foreach($introduct as $k=>$vo): ?><p><?php echo ($vo); ?></p><?php endforeach; endif; ?>
				<a class="more" href="<?php echo U('Index/Index/introduct');?>">查看更多</a>
			</div>
		</div>

		<!--公司设备-->
		<div class="index_ser">
			<div class="index_tit">
				<h3>公司设备</h3>
				<hr>
				<span style="background: #e8f2fb;">Equipment</span>
			</div>
			<div class="swiper-container ser_list">
				<div class="swiper-wrapper">
					<?php if(is_array($device)): foreach($device as $k=>$vo): ?><div class="swiper-slide">
							<a href="<?php echo U('Index/Device/detail?id='.$vo['id']);?>"><img src="<?php echo ($vo["picurl1"]); ?>"><span><?php echo ($vo["product_name"]); ?></span></a>
						</div><?php endforeach; endif; ?>
				</div>
				<!-- Add Pagination -->
				<div class="swiper-button-prev"></div>
				<!--左箭头。如果放置在swiper-container外面，需要自定义样式。-->
				<div class="swiper-button-next"></div>
				<!--右箭头。如果放置在swiper-container外面，需要自定义样式。-->
			</div>
		</div>

		<!--联系我们-->
		<div class="index_link">
			<div class="index_tit">
				<h3>联系我们</h3>
				<hr>
				<span style="background: #fff;">Contact us</span>
			</div>

			<div class="index_info">
				<div class="info_con">
					<h3>北京盛达龙源不锈钢水箱有限公司</h3>
					<ul>
						<li>手机：13641133307(代经理)</li>
						<li>电话：010-89240469</li>
						<li>网址：www.bjsdly.com</li>
						<li>邮箱：bjsdly@126.com</li>
						<li>地址：北京市通州区永乐店经济开发区恒业八街6号院12栋</li>
					</ul>
				</div>

				<div class="info_con">
					<h3>沈阳盛达龙源不锈钢水箱有限公司</h3>
					<ul>
						<li>手机：13641133307(代经理)</li>
						<li>邮箱：sysdlysx@163.com</li>
						<li>网址：www.sysdlysx.com</li>
						<li>地址：沈阳市铁西区凌空二街58-1号</li>
					</ul>
				</div>
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
			var swiperslide = new Swiper('.swiper-container', {
				slidesPerView: 2,
				slidesPerColumn: 2,
				spaceBetween: 30,
				slidesPerGroup: 2,
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
				}
			});
			var swiper = new Swiper('.ser_list', {
				slidesPerView: 2,
				spaceBetween: 30,
				navigation: {
					nextEl: '.swiper-button-next',
					prevEl: '.swiper-button-prev',
				},
			});
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