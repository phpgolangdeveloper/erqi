<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
		<title>个人中心</title>
		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/Public/Home/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/Public/Home/css/vipstyle.css" rel="stylesheet" type="text/css">
		<script src="/Public/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
	</head>

	<body>
		<!--头 -->
		<header>
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd"> 
									<?php  if (empty(session('user'))) { echo "<a href=".U('Index/index')." title='点击前往商城首页'>&nbsp;欢迎您来到零食商城,</a>　<a href=".U('Login/login')." title='亲，要登录后才能买东西哦~'>登录</a>　|　<a href=".U('Login/emailRegister')." title='还没账号?点击立即注册'>注册</a>"; } else { echo "<a href=".U('Index/index')." title='点击前往商城首页'>&nbsp;☺欢迎您,</a><a href=".U('Usercenter/index')." title='点击前往个人中心'>".session('user')['username']."</a> ｜ <a href=".U('Login/logout')." title='点击退出登录'>注销</a>"; } ?>　　
								</div>
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="<?php echo U('Index/index');?>" target="_top" class="h">商城首页</a></div>
							</div>
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="<?php echo U('Usercenter/index');?>" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
							</div>
							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="#" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>我的购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
							</div>
							<div class="topMessage favorite">
								
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							<div class="logoBig">
								<a href="<?php echo U('Index/index');?>" title="回商城首页"><li><img src="/Public/Home/images/logobig.png" /></li></a>
							</div>

							<div class="search-bar pr">
								<a name="index_none_header_sysc" href="#"></a>
								<form>
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
								</form>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</article>
		</header>
<!-- 头部 -->
<!--模板 整体继承可重写模块开始 头部->尾部  -->

<link href="/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/personal.css" rel="stylesheet" type="text/css">
<link href="/Public/Home/css/infstyle.css" rel="stylesheet" type="text/css">
<script src="/Public/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
<script src="/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>	
<style>
	/*错误提示信息类样式*/
	.error-message {color:red;}

	/*设置输入框的提示信息样式*/
	.prompt-message{color: #C5C5C5;font-size: 16px;}

	/*错误图标样式*/
	.item-error{
		float:left;
		position:relative;
		top:4px;
		color:#fc4343;
		height:16px;
		line-height:14px;
		padding-left:20px;
		background:url("/Public/Images/Login/err_small.png") 0 0 no-repeat;
	}

	/*正确图标样式*/
		.item-succ{
			float:left;
			position:relative;
			top:5px;
			color:#fc4343;
			height:16px;
			line-height:12px;
			padding-left:20px;
			background:url("/Public/Images/Login/reg_icons.png") -80px 0 no-repeat;
		}
</style>	
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">

					<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr/>

						<!--头像 -->
					<form class="am-form am-form-horizontal" method="post" action="<?php echo U('Usercenter/information');?>" enctype="multipart/from-data">
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								<img class="am-circle am-img-thumbnail" src="/Public/Home/images/getAvatar.do.jpg" alt="" />
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i><?php echo ($data['username']); ?></i></b></div>
								<div class="vip">
                                      <span></span><a href="#">会员专享</a>
								</div>
							</div>
						</div>
							<!--个人信息 -->
							<div class="info-main">

									<div class="am-form-group">
										<label for="user-name2" class="am-form-label">昵称</label>
										<div class="am-form-content">
											<input type="text" id="nickname" placeholder="nickname" value="<?php echo ($data['nickname']); ?>" name="nickname" maxlength="20">
										</div>
									</div>

									<div class="am-form-group">
										<label for="user-name" class="am-form-label">姓名</label>
										<div class="am-form-content">
											<?php $tname = $data['tname']; ?>
											<?php if(empty($tname)): ?>还没实名认证? <a href="<?php echo U('Usercenter/idcard');?>" target="_blank" title="点击前往实名认证">点击认证</a><span style="color:red">&nbsp;&nbsp;&nbsp;未验证</span>
											<?php else: ?>
												<a href="<?php echo U('Usercenter/idcard');?>" title="点击查看实名认证详情"><?php echo ($data['tname']); ?></a><span style="color:green">&nbsp;&nbsp;&nbsp;已验证</span><?php endif; ?>
										</div>
									</div>
									
									<div class="am-form-group">
										<label class="am-form-label">性别</label>
										<div class="am-form-content sex">
											<label class="am-radio-inline">
												<input type="radio" name="sex" <?= $data['sex'] == 1? 'checked' : '';?> value="1" data-am-ucheck> 男
											</label>
											<label class="am-radio-inline">
												<input type="radio" name="sex" <?= $data['sex'] ==2 ? 'checked' : '';?> value="2" data-am-ucheck> 女
											</label>
											<label class="am-radio-inline">
												<input type="radio" name="sex" <?= $data['sex'] ==3 ? 'checked' : '';?> value="3" data-am-ucheck> 保密
											</label>
										</div>
									</div>

									<div class="am-form-group">
										<label for="user-birth" class="am-form-label">生日</label>
										<div class="am-form-content birth">
											<div id="box">
												<div class="birth-select">
											    	<select name="year" id="sel1">
											        	<option value="option" selected="selected" name="year">--请选择--</option>
											    	</select> 
											    	<em>年</em>
											    </div>
											    <div class="birth-select2">
										        	<select name="month" id="sel2">
										        		<option value="option1" selected="selected" name="month">--请选择--</option>
										      		</select>
										      		<em>月</em>
										      	</div> 
										      	<div class="birth-select2">
										      		<select name="day" id="sel3">
										        		<option value="option2" selected="selected" name="day">--请选择--</option>
										      		</select>
										      		<em>日</em>
										      	</div>
										      	<span id="result"></span>
										    </div>
									    </div>
									</div>
										
									<!-- <div class="am-form-group">
										<label for="user-phone" class="am-form-label">电话</label>
										<div class="am-form-content">
											<?php if(empty($sessiontel)): ?>还没有绑定手机号码? <a href="<?php echo U('Usercenter/bindphone');?>" target="_blank" title="点击绑定手机号码">点击绑定</a><span style="color:red">&nbsp;&nbsp;&nbsp;未验证</span>
											<?php else: ?>

												<span id="Tel mask"><?=session('user')['tel']?></span>　<a href="<?php echo U('Usercenter/tel');?>" target="_blank" title="点击更换绑定手机">点击换绑</a><span style="color:green">&nbsp;&nbsp;&nbsp;已验证</span><?php endif; ?>
										</div>
									</div> -->

									<div class="am-form-group">
										<label for="user-email" class="am-form-label">电子邮件</label>
										<div class="am-form-content">
											
											<?php $sessionemail = $data['email']; ?>
											<?php if(empty($sessionemail)): ?>还没有绑定邮箱? <a href="<?php echo U('Usercenter/email');?>" target="_blank" title="点击绑定邮箱">点击绑定</a><span style="color:red">&nbsp;&nbsp;&nbsp;未验证</span>
											<?php else: ?>

												<span id="Mailbox mask"><?php echo ($data['email']); ?></span>　<a href="<?php echo U('Usercenter/replaceemail');?>" target="_blank" title="点击更换绑定邮箱">点击换绑</a><span style="color:green">&nbsp;&nbsp;&nbsp;已验证</span><?php endif; ?>
										</div>
									</div>

									<div class="am-form-group address">
										<label for="user-address" class="am-form-label">收货地址</label>
										<div class="am-form-content address">
											<a href="address.html">
												<p class="new-mu_l2cw">
													<span class="province">湖北</span>省
													<span class="city">武汉</span>市
													<span class="dist">洪山</span>区
													<span class="street">雄楚大道666号(中南财经政法大学)</span>
													<span class="am-icon-angle-right"></span>
												</p>
											</a>
										</div>
									</div>

									<div class="am-form-group safety">
										<label for="user-safety" class="am-form-label">账号安全</label>
										<div class="am-form-content safety">
											<a href="safety.html">
												<span class="am-icon-angle-right"></span>
											</a>
										</div>
									</div>

									<div class="info-btn">
										<button class="am-btn am-btn-danger" type="submit" id="savebtn">保存修改</button>
									</div>
								</form>
							</div>
							
					</div>
				</div>
<script>
$(function() {

	// 当点击输入框时显示提示信息
    $('form :input').click(function() {
    	
    	// 如果是昵称输入框
    	if ($(this).is('#nickname')) {
    		// nextAll,查找当前元素之后所有的同辈元素。
			$(this).nextAll().remove();

    		var $listItem = $(this).parents('div:first');
    		// 设置输入的提示信息
			var promptMessage = "昵称长度不能超过20个汉字";
			$('<span></span>')
			.addClass('prompt-message')
			.text(promptMessage)
			.appendTo($listItem);
    	}

    	// 如果是姓名输入框
    	if ($(this).is('#tname')) {
    		// nextAll,查找当前元素之后所有的同辈元素。
			$(this).nextAll().remove();

    		var $listItem = $(this).parents('div:first');
    		// 设置输入的提示信息
			var promptMessage = "请填写实名认证信息，一经提交无法修改，请慎重填写！";
			$('<span></span>')
			.addClass('prompt-message')
			.text(promptMessage)
			.appendTo($listItem);
    	}
    });


    // 当输入框失去焦点的时候触发
    $('form :input').blur(function() {
    	// 如果是昵称输入框
    	if ($(this).is('#nickname')) {
    		
	    	// nextAll()删除所选输入框的同辈元素 
	    	$(this).nextAll().remove();
	    	var $listItem = $(this).parents('div:first');

	    	if (this.value != '' && !/^[\S\s]{1,20}$/.test(this.value)) {

	    		// 将Input框的颜色设置为红色
				$('#nickname').css('border-color', 'red');

				// 添加错误按钮
				$('<i></i>')
				.addClass('item-error')
				.appendTo($listItem);

				// 设置错误信息
				var errorMessage = '昵称长度不能超过20个汉字';
		        $('<span></span>')
		          .addClass('error-message')
		          .text(errorMessage)
		          .appendTo($listItem);

		        // 阻止表单提交
				return false;
	    	} else {
	    		// 将Input框的颜色设置为灰色
				$('#nickname').css('border-color', '#E4EAEE');

    			// 允许表单提交
				return true;
	    	}
	    };
	

	    // 如果是姓名输入框
    	if ($(this).is('#tname')) {
    		
	    	// nextAll()删除所选输入框的同辈元素 
	    	$(this).nextAll().remove();
	    	var $listItem = $(this).parents('div:first');

	    	// 判断姓名是否正确
		    // 1.可以是中文
			// 2.可以是英文，允许输入点（英文名字中的那种点）， 允许输入空格
			// 3.中文和英文不能同时出现
			// 4.长度在2-20个字符以内
	    	if (this.value != '' && !/^([\u4e00-\u9fa5]{2,20}|[a-zA-Z\.\s]{2,20})$/.test(this.value)) {

	    		// 将Input框的颜色设置为红色
				$('#tname').css('border-color', 'red');

				// 添加错误按钮
				$('<i></i>')
				.addClass('item-error')
				.appendTo($listItem);

				// 设置错误信息
				var errorMessage = '输入的姓名不正确请重新输入';
		        $('<span></span>')
		          .addClass('error-message')
		          .text(errorMessage)
		          .appendTo($listItem);

		        // 阻止表单提交
				return false;
	    	} else {
	    		// 将Input框的颜色设置为灰色
				$('#tname').css('border-color', '#E4EAEE');

    			// 允许表单提交
				return true;
	    	}
	    };

	});
})

	//生成日期函数
	function creatDate()
	{
		//生成1930年-今年
		for(var i = <?php echo date('Y', time()) ?>; i >= 1930; i--)
		{
			//循环创建select项
			var option = document.createElement('option');
			// 设置选项的值
			option.setAttribute('value',i);
			// 将值显示为i
			option.innerHTML = i;
			// 往年份选项追加元素
			sel1.appendChild(option);
		}

		//生成1月-12月
		for(var i = 1; i <=12; i++){
			var option1 = document.createElement('option');
			option1.setAttribute('value',i);
			option1.innerHTML = i;
			// 往月份选项追加元素
			sel2.appendChild(option1);
		}

		//生成1日—31日
		for(var i = 1; i <=31; i++){
			var option2 = document.createElement('option');
			option2.setAttribute('value',i);
			option2.innerHTML = i;
			// 往天数选项追加元素 
			sel3.appendChild(option2);
		}
	}
	// 调用生成日期函数
	creatDate();

	//保存某年某月的天数
	var days;
 
	//年份点击 绑定函数
	sel1.onclick = function()
	{
		//月份显示默认值
		sel2.options[0].selected = true;
		//天数显示默认值
		sel3.options[0].selected = true;
	}

	//月份点击 绑定函数
	sel2.onclick = function()
	{
		//天数显示默认值
		sel3.options[0].selected = true;
		//计算天数的显示范围
		//如果是2月
		if(sel2.value == 2)
		{
			//判断闰年
			if((sel1.value % 4 === 0 && sel1.value % 100 !== 0) || sel1.value % 400 === 0)
			{
				days = 29;
			}
			else
			{
				days = 28;
			}
			//判断小月
		}else if(sel2.value == 4 || sel2.value == 6 ||sel2.value == 9 ||sel2.value == 11){
			days = 30;
		}else{
			days = 31;
		}

		//增加或删除天数
		//如果是28天，则删除29、30、31天(即使他们不存在也不报错)
		if(days == 28){
			sel3.remove(31);
			sel3.remove(30);
			sel3.remove(29);
		}

	    //如果是29天
	    if(days == 29){
	        sel3.remove(31);
	        sel3.remove(30);
	        //如果第29天不存在，则添加第29天
	        if(!sel3.options[29]){
		        sel3.add(new Option('29','29'),null)
	        }
	    }

	    //如果是30天
	    if(days == 30){
	        sel3.remove(31);
	        //如果第29天不存在，则添加第29天
	        if(!sel3.options[29]){
	            sel3.add(new Option('29','29'),null)
	        }
	        //如果第30天不存在，则添加第30天
	        if(!sel3.options[30]){
	            sel3.add(new Option('30','30'),null)
	        }
	    }

	    //如果是31天
	    if(days == 31){
	        //如果第29天不存在，则添加第29天
	        if(!sel3.options[29])
	        {
		        sel3.add(new Option('29','29'),null)
	        }
	        //如果第30天不存在，则添加第30天
	        if(!sel3.options[30])
	        {
		        sel3.add(new Option('30','30'),null)
	        }
	        //如果第31天不存在，则添加第31天
	        if(!sel3.options[31])
	        {
		        sel3.add(new Option('31','31'),null)
	        }
	    }
	}
 </script>


<!-- 重写模块结束 -->

				<!--底部-->
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">恒望科技</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有. 更多模板 <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></em>
						</p>
					</div>
				</div>

			</div>

			<aside class="menu">
				<ul>
					<li class="person active">
						<a href="index.html"><i class="am-icon-user"></i>个人中心</a>
					</li>
					<li class="person">
						<p><i class="am-icon-newspaper-o"></i>个人资料</p>
						<ul>
							<li> <a href="<?php echo U('Usercenter/information');?>">个人信息</a></li>
							<li> <a href="<?php echo U('Usercenter/safety');?>">安全设置</a></li>
							<li> <a href="<?php echo U('Usercenter/address');?>">地址管理</a></li>
							
						</ul>
					</li>
					<li class="person">
						<p><i class="am-icon-balance-scale"></i>我的交易</p>
						<ul>
							<li><a href="<?php echo U('Usercenter/order');?>">订单管理</a></li>
							<li> <a href="#">退款售后</a></li>
							<li> <a href="<?php echo U('Usercenter/comment');?>">评价商品</a></li>
						</ul>
					</li>
					<li class="person">
						<p><i class="am-icon-dollar"></i>我的资产</p>
						<ul>
							<li> <a href="<?php echo U('Usercenter/points');?>">我的积分</a></li>
							<li> <a href="<?php echo U('Usercenter/coupon');?>">代币券 </a></li>
							<li> <a href="<?php echo U('Usercenter/walletlist');?>">账户余额</a></li>
							<li> <a href="<?php echo U('Usercenter/bill');?>">账单明细</a></li>
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-tags"></i>我的收藏</p>
						<ul>
							<li> <a href="<?php echo U('Usercenter/collection');?>">收藏</a></li>									
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-qq"></i>在线客服</p>
						<ul>
							<li> <a href="consultation.html">商品咨询</a></li>
							<li> <a href="suggest.html">意见反馈</a></li>	
							<li> <a href="news.html">我的消息</a></li>
						</ul>
					</li>
				</ul>

			</aside>
		</div>
		<!--引导 -->
		<div class="navCir">
			<li><a href="<?php echo U('Index/index');?>"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="<?php echo U('');?>"><i class="am-icon-list"></i>分类</a></li>
			<li><a href="<?php echo U;?>"><i class="am-icon-shopping-basket"></i>购物车</a></li>
			<li class="active"><a href="index.html"><i class="am-icon-user"></i>我的</a></li>
		</div>
	</body>

</html>