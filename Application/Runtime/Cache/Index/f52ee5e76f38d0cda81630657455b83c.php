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
			<h3>半产品展示</h3>
		</div>
		
		<div class="product content">
			<ul class="product_nav">
				<?php if($flag == 0): ?><li class="tab"><a href="<?php echo U('index');?>">全部</a></li>
					<?php else: ?>
					<li><a href="<?php echo U('index');?>">全部</a></li><?php endif; ?>
				<?php if(is_array($category)): foreach($category as $k=>$vo): if($k == $flag -1): ?><li class="tab"><a href="<?php echo U('index?id='.$vo['type_id']);?>"><?php echo ($vo["type_name"]); ?></a></li>
					<?php else: ?>
						<li><a href="<?php echo U('index?id='.$vo['type_id']);?>"><?php echo ($vo["type_name"]); ?></a></li><?php endif; endforeach; endif; ?>
			</ul>
			<div class="product_list">
				<?php if(is_array($product)): foreach($product as $k=>$vo): if(($k == 0)): ?><a class="now" href="<?php echo U('detail?id='.$vo['id']);?>">
							<img src="<?php echo ($vo["picurl1"]); ?>">
							<span><?php echo ($vo["product_name"]); ?></span>
						</a>
						<?php else: ?>
						<a href="<?php echo U('detail?id='.$vo['id']);?>">
							<img src="<?php echo ($vo["picurl1"]); ?>">
							<span><?php echo ($vo["product_name"]); ?></span>
						</a><?php endif; endforeach; endif; ?>
			</div>
			<?php if(($page["pages"] != 0)): ?><div class="page">
        <a href="?page_size=<?php echo ($page["page_size"]); ?>&page=<?php echo ($page["first_page"]); ?>">首页</a>
        <?php if(($page["prev_page"] != 0)): ?><a href="?page_size=<?php echo ($page["page_size"]); ?>&page=<?php echo ($page["prev_page"]); ?>">上一页</a>
            <?php else: ?>
            <a href="">上一页</a><?php endif; ?>
        <p><span class="page_now"><?php echo ($page["current_page"]); ?></span>/<span><?php echo ($page["pages"]); ?></span></p>
        <?php if(($page["next_page"] != 0)): ?><a href="?page_size=<?php echo ($page["page_size"]); ?>&page=<?php echo ($page["next_page"]); ?>">下一页</a>
            <?php else: ?>
            <a href="">下一页</a><?php endif; ?>
        <a href="?page_size=<?php echo ($page["page_size"]); ?>&page=<?php echo ($page["pages"]); ?>">末页</a>
    </div><?php endif; ?>
		</div>

		<div class="index_bot">
    <a href="http://wpa.qq.com/msgrd?v=6&uin=1045348200&site=qq&menu=yes"><img src="/Public/style/images/icon-3.png"><span>在线QQ</span></a>
    <i class="line_throw"></i>
    <a href="tel:13641133307"><img src="/Public/style/images/icon-4.png"><span>在线电话</span></a>
    <i class="line_throw"></i>
    <a class="scroll_top"><img src="/Public/style/images/icon-5.png"><span>返回顶部</span></a>
</div>

		<script src="/Public/style//js/swiper.min.js"></script>
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