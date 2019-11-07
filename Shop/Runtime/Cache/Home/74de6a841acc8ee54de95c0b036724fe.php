<?php if (!defined('THINK_PATH')) exit();?>

		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link type="text/css" href="/Public/Home/css/optstyle.css" rel="stylesheet" />
		<link type="text/css" href="/Public/Home/css/style.css" rel="stylesheet" />

		<script type="text/javascript" src="/Public/Home/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/Public/Home/basic/js/quick_links.js"></script>

		<script type="text/javascript" src="/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="/Public/Home/js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="/Public/Home/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="/Public/Home/js/list.js"></script>
		
	
	<!-- 下面的样式是在首页移动过来的 -->
		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/Public/Home/css/hmstyle.css" rel="stylesheet" type="text/css" />

		<!--顶部导航条 -->
		<div class="am-container header">
			<ul class="message-l">
					<div class="topMessage">
						<div class="menu-hd">
						<?php  if (empty(session('user'))) { echo "<a href=".U('Index/index')." title='点击前往商城首页'>&nbsp;欢迎您来到零食商城,</a>　<a href=".U('Login/login')." title='亲，要登录后才能买东西哦~'>登录</a>　|　<a href=".U('Login/emailRegister')." title='还没账号?点击立即注册'>注册</a>"; } else { echo "<a href=".U('Index/index')." title='点击前往商城首页'>&nbsp;欢迎您,</a><a href=".U('Usercenter/index')." title='点击前往个人中心'>".session('user')['username']."</a> ｜ <a href=".U('Login/logout')." title='点击退出登录'>注销</a>"; } ?>
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
						<div class="menu-hd"><a id="mc-menu-hd" href="<?php echo U('Shopcart/index');?>" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h"></strong></a></div>
					</div>
					<div class="topMessage favorite">
						<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
				</ul>
				</div>

			<!--悬浮搜索框-->

			<div class="nav white">
				<div class="logo"></div>
				<div class="logoBig">
					<li></li>
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


				<ol class="am-breadcrumb am-breadcrumb-slash">
					<li><a href="#">首页</a></li>
					<li><a href="#">分类</a></li>
					<li class="am-active">内容</li>
				</ol>
				<script type="text/javascript">
					$(function() {});
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider) {
								$('body').removeClass('loading');
							}
						});
					});
				</script>
				<div class="scoll">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="/Public/Home/images/01.jpg" title="pic" />
								</li>
								<li>
									<img src="/Public/Home/images/02.jpg" />
								</li>
								<li>
									<img src="/Public/Home/images/03.jpg" />
								</li>
							</ul>
						</div>
					</section>
				</div>

				<!--放大镜-->

				<div class="item-inform">
					<div class="clearfixLeft" id="clearcontent">

						<div class="box">
							<script type="text/javascript">
								$(document).ready(function() {
									$(".jqzoom").imagezoom();
									$("#thumblist li a").click(function() {
										$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
										$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
										$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
									});
								});
							</script>

							<div class="tb-booth tb-pic tb-s310">
								<a href="#"><img id='pic' src="/Public/<?php echo ($goodsList[0]['image1']); ?>" alt="细节展示放大镜特效" rel="/Public/<?php echo ($goodsList[0][image1]); ?>" class="jqzoom" /></a>
							</div>
							<ul class="tb-thumb" id="thumblist">
							<?php if(is_array($goodsImage)): foreach($goodsImage as $k=>$v): ?><li class="tb-selected">
									<div class="tb-pic tb-s40">
										<a href="javascript:void(0)"><img  pic="<?php echo ($v); ?>" src="/Public/<?php echo ($v); ?>" mid="/Public/<?php echo ($v); ?>" big="/Public/<?php echo ($v); ?>"></a>
									</div>
								</li><?php endforeach; endif; ?>
								
							</ul>
						</div>
						<div class="clear"></div>
					</div>

					<div class="clearfixRight">

						<!--规格属性-->
						<!--名称-->
						<div class="tb-detail-hd">
							<h1>	
					<?php echo ($goodsList[0]['name']); ?>
	          </h1>
						</div>
						<div class="tb-detail-list">
							<!--价格-->
							<div class="tb-detail-price" style="height: 114px;">
								<li class="price iteminfo_price">
									<dt>价格</dt>
									<dd id="sbs"><em>¥　</em><b class="sys_item_price" id="price"><?php if ($min[0] == $max[0]) { echo $min[0]; } else { echo $min[0].'-'.$max[0]; }?></b>  </dd>   

									<?php if(($crr['data'] == '2')): ?><a id="as">秒杀价</a><div class="miao" style="margin-left: 92px;">距离活动开始还有 <a id="shi">时</a> <a id="fen">分</a> <a id="miao">秒</a></div><?php endif; ?>  

								</li>
								<li class="price iteminfo_mktprice">
									<dt>原价</dt>
									<dd><em>¥</em><b class="sys_item_mktprice"><?php echo ($goodsList[0]['ymoney']); ?></b></dd>									
								</li>
								<div class="clear"></div>
							</div>

							<!--地址-->
							<dl class="iteminfo_parameter freight">
								<dt>配送至</dt>
								<div class="iteminfo_freprice">

								<!-- 地址form表单 -->
								<form action="#" id="testForm" method="post" style="position:relative; z-index: 100;">
									<div class="am-form-content address">
										<select id="sf" name="sf" style="margin-top: 6px">
											<option value="0">--请选择--</option>
										<!-- 遍历省份表 -->
									<?php if(is_array($areasList)): foreach($areasList as $key=>$v): ?><option value="<?php echo ($v['id']); ?>"><?php echo ($v['area_name']); ?></option><?php endforeach; endif; ?>
										</select>
										<select id="city" name="city" style="margin-top: 6px">
											<option value="">--请选择--</option>
										</select>
										<select id="area" name="area" style="margin-top: 6px">
											<option value="">--请选择--</option>
										</select>
									</div>

								</form>
<script>

		/**
		 * 这是个处理省份的方法
		 */
		$('#sf').change(function() {
			// 清空下级城市
			$("select[name='city']")[0].length = 1;
			$("select[name='area']")[0].length = 1;
			

			// 获取省份的ID
			var id = $(this).val();
			var str = '';
			$.ajax({

				url: "<?php echo U('Detail/areas');?>",

				type: 'get',

				data: {id: id},

				success: function(msg) {
					// console.log(msg.length);
					for (var i = 0; i < msg.length; i++) {

						str += "<option value='"+msg[i].id+"'>"+msg[i].area_name+"</option>";

					}
					
					$("#city").append(str)
				}

			});
		});

		$('#city').change(function() {
			// 清空下级城市
			$("select[name='area']")[0].length = 1;

			// 获取省份ID
			var id = $(this).val();
			var str = '';

			$.ajax({


				url: "<?php echo U('Detail/areas');?>",

				type: 'get',

				data: {id: id},

				success: function(msg) {
					
					for (var i = 0; i < msg.length; i++) {

						str += "<option value='"+msg[i].id+"'>"+msg[i].area_name+"</option>";
					}
					
					$("#area").append(str)
				}

			});

		});

</script>
									
								</div>
							</dl>
							<div class="clear"></div>

							<!--销量-->
							<ul class="tm-ind-panel">
								<li class="tm-ind-item tm-ind-sellCount canClick">
									<div class="tm-indcon"><span class="tm-label">收藏数</span><span class="tm-count"><?php echo ($goodsList[0]['collectnum']); ?></span></div>
								</li>
								<li class="tm-ind-item tm-ind-sumCount canClick">
									<div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count"><?php echo ($goodsList[0]['sellnum']); ?></span></div>
								</li>
								<li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
									<div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count"><?php echo ($goodsList[0]['commentnum']); ?></span></div>
								</li>
							</ul>
							<div class="clear"></div>

							<!--各种规格-->
							<dl class="iteminfo_parameter sys_item_specpara">
								<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
								<dd>
									<!--操作页面-->

									<div class="theme-popover-mask"></div>

									<div class="theme-popover">
										<div class="theme-span"></div>
										<div class="theme-poptit">
											<a href="javascript:;" title="关闭" class="close">×</a>
										</div>
										<div class="theme-popbod dform">
											<div style="margin-top: 15px; margin-left: 5px"><a href="<?php echo U('Detail/index', ['id' => $goodsList[0][id]]);?>"><span style="border: 2px solid #F5F5F5; padding: 4px; ">重新分配</span></a></div>
											<form class="theme-signin" name="loginform" action="" method="post">

												<div class="theme-signin-left">
													<div class="theme-options">
														<div class="cart-title">包装</div>
														<ul id="baozhuang">

														<!-- 包装 -->
														<?php for ($i = 0; $i < count($baozhuangs); $i++ ) :?>
															<li abc="" onclick="shuxing(this)" gid="<?php echo ($goodsList[0]['id']); ?>" id="baozhuangs"  class="sku-line"><?php echo ($baozhuangs[$i]); ?></li>
														<?php endfor; ?>
														
														</ul>
													</div>
													<div class="theme-options">
														<div class="cart-title">口味</div>
														<ul id="kouwei">

														<!-- 口味 -->
														<?php for ($i = 0; $i < count($kouweis); $i++ ) :?>
															<li abc="" onclick="kouwei(this)" id="kouweis" gid="<?php echo ($goodsList[0]['id']); ?>" class="sku-line"><?php echo ($kouweis[$i]); ?></li>
														<?php endfor; ?>

														</ul>
													</div>
		
													<script>
														/**
														 * 点击口味的时候触发
														 */
														function kouwei(d) {
															
															// 删除其他的值
															// $(d).siblings().removeAttr('abc');
															// $("#LikBuy").siblings().removeAttr('kouwei');
															// $('#LikBasket').siblings().removeAttr('kouwei');
															// 获取口味的值
															// var kouwei = $(d).html();
															// console.log(kouwei);
															// $("#LikBuy").attr('kouwei', kouwei);
															// $("#LikBasket").attr('kouwei', kouwei);
														
															
														}
														/**
														 * 点击包装触发
														 * @param  {[type]} a [用户点击的包装]
														 * 触发ajax去获取这个包装下的口味
														 */
														function shuxing(a) {
															// 删除其他的值
															$(a).siblings().removeAttr('abc');
															$("#LikBuy").siblings().removeAttr('baozhuang');
															$("#LikBasket").siblings().removeAttr('baozhuang');
															
															// 获取包装的值
															var baozhuang = $(a).html();
															
															// 设置属性
															$(a).attr('abc', baozhuang);
															$("#LikBuy").attr('baozhuang', baozhuang);
															$("#LikBasket").attr('baozhuang', baozhuang);

															
															// 获取gid
															var gid = $(a).attr('gid');
															
															var str = '';

															$.ajax({

																type: 'get',

																data: {baozhuang: baozhuang, gid: gid},

																url: "<?php echo U('Detail/attr');?>",

																success: function(msg) {
																	
																	for (var i = 0; i < msg.length; i++) {
																		str += "<li id='kouweis' baozhuang='"+baozhuang+"' xid='"+msg[i].id+"' gid='"+msg[i].gid+"' onclick='kucun(this)' class='sku-line'>"+msg[i].kouwei+"</li>";
																	}

																	// 更新包装的内容
																	$('#kouwei').html(str);

																	// 但鼠标点击口味时候哦触发
																	$('#kouwei li').mousedown(function() {
																		$(this).css('border', '2px solid #BE0106');
																		$(this).siblings().css('border', '2px solid #F5F5F5');
																	})
																
																}
															});
														}

														/**
														 * 获取库存和价钱和图片
														 */
														function kucun(b) {
															var kouwei = $(b).html();
															
															$("#LikBuy").attr('kouwei', kouwei);
															$("#LikBasket").attr('kouwei', kouwei);

															// 获取包装
															var baozhuang = $(b).attr('baozhuang');

															var kouwei = $(b).html();
														
															// 获取gid
															var gid = $(b).attr('gid');
															
															var str = "";

															$.ajax({
																type: 'get',

																data: {baozhuang: baozhuang, gid: gid, kouwei: kouwei},

																url: "<?php echo U('Detail/kp');?>",

																success: function(msg) {
																	// 更换选好的图片
																	$('#pic').attr('src', "/Public/" + msg[0].image);
																	$('#pic').attr('rel', "/Public/" + msg[0].image);


																	// 更换库存
																	$('#num').html(msg[0].num);

																	// 更换价钱
																	$('#price').html(msg[0].price);
																}

															});
														}
													</script>
													<div class="theme-options">
														<div class="cart-title number">数量</div>
														<dd>
															<input onclick="jian(this)" id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
															<input id="text_box" name="" type="text" value="1" style="width:30px;" />
															<input onclick="jia(this)" id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
															<span id="Stock" class="tb-hidden">库存<span id="num" class="stock" >0</span>件</span>
														</dd>

													</div>

													<!-- 库存的+ - -->
													<script>
													/**
													 *  库存的加
													 */
													function jia(a) {

													// 当值小于库存加号则打开
													if ($('#text_box').val() <= $('#num').html()) {
														$('#add').attr('disabled', false);
													}
														// 库存
														var num = $('#num').html();

														// 添加的值
														var val = $('#text_box').val();
														
														// 库存-2  因为模板自配的JS问题，所以-2解决
														num = parseInt(num-2);
														
														// 用户点击的值
														val = parseInt(val);
													
														if (val > num) {

															$('#add').attr('disabled', 'true');
														}
													}

													// 当用户输入东西大于库存货小于库存时候的判断
													$('#text_box').blur(function() {
														
														if ($(this).val() > $('#num').html()) {
															
															$(this).val('1');
														}
													});

													// 当用户输入东西小于于库存货小于库存时候的判断
													$('#text_box').blur(function() {
														
														if ($(this).val() < $('#num').html()) {
															
															$(this).val('1');

														}
													});

													/**
													 * 减号的判断
													 */
													function jian() {


														var value = $('#text_box').val();
														
														// 只能为正数的正则
														var check= /^[1-9]+$/;
														
														// 减到0 则变回1
														if (value == '1') {

															// 这个打印为1
															// console.log($('#text_box').val());

															$('#text_box').val(2);

														}

														var a = check.test(value);

														if (!a) {
															$('#text_box').val(1);
														}

														// 当值大于等于库存，加号开启
														if ($('#text_box').val() >= $('#num').html()) {
														
															$('#add').attr('disabled', false);
														}


													}
													
													
													</script>

													<div class="clear"></div>

													<div class="btn-op">
														<div class="btn am-btn am-btn-warning">确认</div>
														<div class="btn close am-btn am-btn-warning">取消</div>
													</div>
												</div>
																		<div class="theme-signin-right">
													<div class="img-info">
														<img src="../images/songzi.jpg" />
													</div>
													<div class="text-info">
														<span class="J_Price price-now">¥39.00</span>
														<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
													</div>
												</div>
											</form>
										</div>
									</div>

								</dd>
							</dl>
							
							<div class="clear"></div>
							<!--活动	-->
							<div class="shopPromotion gold">
								<div class="hot">
									<dt class="tb-metatit">店铺优惠</dt>
									<div class="gold-list">
										<p>购物满2件打8折，满3件7折<span>点击领券<i class="am-icon-sort-down"></i></span></p>
									</div>
								</div>
								<div class="clear"></div>
								<div class="coupon">
									<dt class="tb-metatit">优惠券</dt>
									<div class="gold-list">
										<ul>
											<li>125减5</li>
											<li>198减10</li>
											<li>298减20</li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="pay">
							<div class="pay-opt">
							<a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
							<a><span class="am-icon-heart am-icon-fw">收藏</span></a>
							
							</div>
							<li>
								<div class="clearfix tb-btn tb-btn-buy theme-login">
									<a onclick="shopTijiao(this)" kouwei="" baozhuang="" id="LikBuy" title="点此按钮到下一步确认购买信息" href="#">立即购买</a>
								</div>
							</li>
							<li>
								<div  class="clearfix tb-btn tb-btn-basket theme-login">
									<a onclick="shopCat(this)" id="LikBasket" title="加入购物车" kouwei="" baozhuang=""  href="#"><i></i>加入购物车</a>
								</div>
							</li>
						</div>

					</div>
					<form id="form" method="post" action="<?php echo U('Pay/index');?>">
						<input id="shuju" type="hidden" name="id" value="">
					</form>
					<div class="clear"></div>

				</div>
	<script>
	/**
	 * 立即购买
	 */
	function shopTijiao(a) {

		// 口味
		var kouwei = $(a).attr('kouwei');

		// 包装
		var baozhuang = $(a).attr('baozhuang');

		// 商品ID
		var gid = $('#kouweis').attr('gid');

		// 库存
		var shuliang = $('#text_box').val();

		// 价钱
		var price = $('#price').html();
		
		if (kouwei) {
			
		} else {
			alert('请选择您要的口味');
			return;
		}

		if (baozhuang) {
			
		} else {
			alert('请选择您要的包装');
			return;
		}
		
		// 处理拼接
		$.ajax({
			type: 'get',

			data: {kouwei: kouwei, baozhuang: baozhuang, gid: gid, shuliang: shuliang, price: price},

			url: "<?php echo U('Detail/chuLi');?>",

			success: function(msg) {
				
				$('#shuju').attr('value', msg);
				$('#form').submit();
			}

		});
		

	}

	/**
	 * 加入购物车
	 */
	function shopCat(a) {
		// 口味
		var kouwei = $(a).attr('kouwei');

		// 包装
		var baozhuang = $(a).attr('baozhuang');

		// 商品ID
		var gid = $('#kouweis').attr('gid');

		// 选择数量
		var shuliang = $('#text_box').val();

		// 价钱
		var price = $('#price').html();
		

		if (kouwei) {
			
		} else {
			alert('请选择您要的口味');
			return;
		}

		if (baozhuang) {
			
		} else {
			alert('请选择您要的包装');
			return;
		}
		
		// 处理拼接
		var str = '';
		$.ajax({
			type: 'get',

			data: {kouwei: kouwei, baozhuang: baozhuang, gid: gid, shuliang: shuliang, price: price},

			async: false,
			
			url: "<?php echo U('Detail/chuLi');?>",

			success: function(msg) {
				
				str = msg;
				
			}

		});
		
		$.ajax({

			type: 'get',

			data: {id: str},

			url: "<?php echo U('Shopcart/handle');?>",

			success: function(msg) {
				alert('成功加入购物车');
			}
		})
	}
	</script>
<div id="shoucang" uid="<?php echo ($_SESSION['user']['id']); ?>" gid="<?php echo ($goodsList[0]['id']); ?>">
<?php if(($shouCangs == '2')): ?><div onclick="shoucang()" style="margin-left: 254px; margin-top: 20px; cursor: pointer; width: 80px;"><span style="color: #E4393C; font-size: 18px; display: inline-block;"><i class="icon-star"></i>收藏</span></div>
	</div>
<?php else: ?>

	<div onclick="quxiaoshoucang()" style="margin-left: 254px; margin-top: 20px; cursor: pointer; width: 80px;"><span style="color: #E4393C; font-size: 18px; display: inline-block;"><i class="icon-star"></i>取消收藏</span></div>
	</div><?php endif; ?>

				<!--优惠套装-->
				<div class="match">
					<div class="match-title">优惠套装</div>
					<div class="match-comment">
						<ul class="like_list">
							<li>
								<div class="s_picBox">
									<a class="s_pic" href="#"><img src="/Public/Home/images/cp.jpg"></a>
								</div> <a class="txt" target="_blank" href="#">萨拉米 1+1小鸡腿</a>
								<div class="info-box"> <span class="info-box-price">¥ 29.90</span> <span class="info-original-price">￥ 199.00</span> </div>
							</li>
							<li class="plus_icon"><i>+</i></li>
							<li>
								<div class="s_picBox">
									<a class="s_pic" href="#"><img src="/Public/Home/images/cp2.jpg"></a>
								</div> <a class="txt" target="_blank" href="#">ZEK 原味海苔</a>
								<div class="info-box"> <span class="info-box-price">¥ 8.90</span> <span class="info-original-price">￥ 299.00</span> </div>
							</li>
							<li class="plus_icon"><i>=</i></li>
							<li class="total_price">
								<p class="combo_price"><span class="c-title">套餐价:</span><span>￥35.00</span> </p>
								<p class="save_all">共省:<span>￥463.00</span></p> <a href="#" class="buy_now">立即购买</a> </li>
							<li class="plus_icon"><i class="am-icon-angle-right"></i></li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
				<!-- 收藏 -->
<script>
	function shoucang() {

		// 获取用户ID
		var uid = $('#shoucang').attr('uid');

		if (!uid) {
			
			alert('亲，您要先登录才可以收藏商品哦~');
			return;
		} 
		
		// 获取商品id
		var gid = $('#shoucang').attr('gid');

		$.ajax({

			url: "<?php echo U('Shoucang/add');?>",

			type: 'get',

			data: {gid: gid, uid: uid},

			success: function(msg) {

				if (msg == 1) {

				var str = "<div onclick='quxiaoshoucang()' id='shoucang' uid='<?php echo ($_SESSION['user']['id']); ?>' gid='<?php echo ($goodsList[0]['id']); ?>' style='margin-left: 254px; margin-top: 20px; cursor: pointer; width: 80px;'><span style='color: #E4393C; font-size: 18px; display: inline-block;'><i class='icon-star'></i>取消收藏</span></div>";

					alert('收藏成功');

					$('#shoucang').html(str);
				} else {

					// 失败
					alert('收藏失败');

				}
			}

		});
	};

	/**
	 * 用户点击取消收藏
	 */
	function quxiaoshoucang() {

		// 获取用户ID
		var uid = $('#shoucang').attr('uid');
		// 获取商品id
		var gid = $('#shoucang').attr('gid');

		$.ajax({

			url: "<?php echo U('Shoucang/del');?>",

			type: 'get',

			data: {gid: gid, uid: uid},

			success: function(msg) {
				
				if (msg == 1) {

				var str = "<div onclick='shoucang()' id='shoucang' uid='<?php echo ($_SESSION['user']['id']); ?>' gid='<?php echo ($goodsList[0]['id']); ?>' style='margin-left: 254px; margin-top: 20px; cursor: pointer; width: 80px;'><span style='color: #E4393C; font-size: 18px; display: inline-block;'><i class='icon-star'></i>收藏</span></div>";

					alert('取消收藏成功');

					$('#shoucang').html(str);
					
				} else {

					// 失败
					alert('取消收藏失败');


				}

			}

		});


	}
</script>	
							
				<!-- introduce-->

				<div class="introduce">
					<div class="browse">
					    <div class="mc"> 
						     <ul>					    
						     	<div class="mt">            
						            <h2>浏览记录</h2>        
					            </div>
						     	<?php if(is_array($liuLangJilu)): foreach($liuLangJilu as $k=>$abc): ?><li class="first">
							      	<div class="p-img">                    
							      		<a href="<?php echo U('Detail/index', ['id' => $abc['0']]);?>"> <img class="" src="/Public/<?php echo ($abc[1]); ?>"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		<a href="<?php echo U('Detail/index', ['id' => $abc['0']]);?>"></a><?php echo ($abc['2']); ?>
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥<?php echo ($abc['3']['0']); ?></strong></div>
							      </li><?php endforeach; endif; ?>
					      
						     </ul>					
					    </div>
					</div>
					<div class="introduceMain">
						<div class="am-tabs" data-am-tabs>
							<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active">
									<a href="#">

										<span class="index-needs-dt-txt">宝贝详情</span></a>

								</li>

								<li>
									<a href="#">

										<span class="index-needs-dt-txt">全部评价</span></a>

								</li>

								<li>
									<a shuju="" gid="<?php echo ($goodsList[0]['id']); ?>"  href="#" id="caini">

										<span class="index-needs-dt-txt">猜你喜欢</span></a>
								</li>
							</ul>

							<div class="am-tabs-bd">

								<div class="am-tab-panel am-fade am-in am-active">
									<div class="J_Brand">

										<div class="attr-list-hd tm-clear">
											<h4>产品参数：</h4></div>
										<div class="clear"></div>
										<ul id="J_AttrUL">
											<li title="">产品类型:&nbsp;<?php echo ($typeName['name']); ?></li>
											<li title="">原料产地:&nbsp;<?php echo ($goodsList[0]['material']); ?></li>
											<li title="">产地:&nbsp;<?php echo ($goodsList[0]['material']); ?></li>
											<li title="">配料表:&nbsp;<?php echo ($goodsList[0]['material']); ?></li>
											<li title="">产品规格:&nbsp;<?php echo ($goodsList[0]['weight']); ?></li>
											<li title="">保质期:&nbsp;<?php echo ($goodsList[0]['baozhiqi']); ?></li>
											<li title="">产品标准号:&nbsp;<?php echo ($goodsList['norm']); ?></li>
											<li title="">生产许可证编号：&nbsp;<?php echo ($goodsList[0]['norm']); ?></li>
											<li title="">储存方法：&nbsp;<?php echo ($goodsList[0]['stockpile']); ?> </li>
											<li title="">食用方法：&nbsp;</li>
										</ul>
										<div class="clear"></div>
									</div>

									<div class="details">
										<div class="attr-list-hd after-market-hd">
											<h4>商品细节</h4>
										</div>
										<div class="twlistNews">
										<?php if(is_array($pic)): foreach($pic as $k=>$vs): ?><img width="938" src="/Public/<?php echo ($vs); ?>" /><?php endforeach; endif; ?>
										</div>
									</div>
									<div class="clear"></div>

								</div>

								<div class="am-tab-panel am-fade">
									
                                    <div class="actor-new">
                                    	<div class="rate">                
                                    		<strong>100<span>%</span></strong><br> <span>好评度</span>            
                                    	</div>
                                        <dl>                    
                                            <dt>买家印象</dt>                    
                                            <dd class="p-bfc">
                                            			<q class="comm-tags"><span>味道不错</span><em>(2177)</em></q>
                                            			<q class="comm-tags"><span>颗粒饱满</span><em>(1860)</em></q>
                                            			<q class="comm-tags"><span>口感好</span><em>(1823)</em></q>
                                            			<q class="comm-tags"><span>商品不错</span><em>(1689)</em></q>
                                            			<q class="comm-tags"><span>香脆可口</span><em>(1488)</em></q>
                                            			<q class="comm-tags"><span>个个开口</span><em>(1392)</em></q>
                                            			<q class="comm-tags"><span>价格便宜</span><em>(1119)</em></q>
                                            			<q class="comm-tags"><span>特价买的</span><em>(865)</em></q>
                                            			<q class="comm-tags"><span>皮很薄</span><em>(831)</em></q> 
                                            </dd>                                           
                                         </dl> 
                                    </div>	
                                    <div class="clear"></div>
									<div class="tb-r-filter-bar" >
										<ul class=" tb-taglist am-avg-sm-4">
											<li class="tb-taglist-li tb-taglist-li-current">
												<div class="comment-info">
													<span>全部评价</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li-1">
												<div class="comment-info">
													<span>好评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li-0">
												<div class="comment-info">
													<span>中评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>

											<li class="tb-taglist-li tb-taglist-li--1">
												<div class="comment-info">
													<span>差评</span>
													<span class="tb-tbcr-num">(32)</span>
												</div>
											</li>
										</ul>
									</div>
									<div class="clear"></div>

									<ol class="am-comments-list am-comments-list-flip" >
									<?php if(is_array($pinLunList)): foreach($pinLunList as $key=>$a): ?><li class="am-comment" id="pinlun">
											<!-- 评论容器 -->
											<a href="">
												<img class="am-comment-avatar" src="/Public/Home/images/hwbn40x40.jpg" />
												<!-- 评论者头像 -->
											</a>

											<div class="am-comment-main">
												<!-- 评论内容容器 -->
												<header class="am-comment-hd">
													<!--<h3 class="am-comment-title">评论标题</h3>-->
													<div class="am-comment-meta">
														<!-- 评论元数据 -->
														<a href="#" class="am-comment-author"><?php echo ($a['username']); ?></a>
														<!-- 评论者 -->
														评论于
														<time datetime=""><?php echo ($a['atime']); ?></time>
													</div>
												</header>

												<div class="am-comment-bd">
													<div class="tb-rev-item " data-id="255776406962">
														<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
															内容：<?php echo ($a['content']); ?>
														</div>
													</div>

												</div>
												<!-- 评论内容 -->
											</div>
										</li><?php endforeach; endif; ?>
									</ul>

									<div class="clear"></div>

									<!--分页 -->
									<ul id="show" class="am-pagination am-pagination-right">
										<?php echo ($show); ?>
									</ul>
									<div class="clear"></div>

									<div class="tb-reviewsft">
										<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
									</div>

								</div>
						<script>
							/*
								评价
							 */
							// 分页类样式
							$('#show a, #show span').unwrap('<div></div>').wrap('<li></li>');

							$('body').delegate('#show a, #show span', 'click', function() {

								var url = $(this).attr('href');
								var str = '';
								$.ajax({

									url: url,

									type: 'get',


									success: function(msg) {
										
										$("#show").html(msg.show);

										for (var i = 0; i < msg.pinLunList.length; i++) {
											str += "<li class='am-comment'><a href=''><img class='am-comment-avatar' src='/Public/Home/images/hwbn40x40.jpg' /></a><div class='am-comment-main'><header class='am-comment-hd'><h3 class='am-comment-title'><div class='am-comment-meta'><a href='#' class='am-comment-author'>用户名："+msg.pinLunList[i].username+"　</a><time datetime=''>评论于"+msg.pinLunList[i].atime+"</time></div></header><div class='am-comment-bd'><div class='tb-rev-item ' data-id='255776406962'><div class='J_TbcRate_ReviewContent tb-tbcr-content '>内容："+msg.pinLunList[i].content+"</div><div class='tb-r-act-bar'>属性："+msg.pinLunList[i].attr+"</div></div></div></div></li>";
										}
										
										
										$('#show a, #show span').unwrap('<div></div>').wrap('<li></li>');
										$("#pinlun").html(str);

									}

								});

								return false;
							});
							

						</script>
								<div class="am-tab-panel am-fade">
									<div class="like">
										<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes" id="cainiList">
											
										</ul>
									</div>
									<div class="clear"></div>

									<!--分页 -->
									<ul class="am-pagination am-pagination-right">
									
									</ul>
									<div class="clear"></div>

								</div>

							</div>

						</div>

	<!-- 猜你喜欢 -->
	<script>
	
	/**
	 * 当鼠标移动到猜你喜欢上方时候会触发
	 */
	$('#caini').mouseenter(function() {

		// 判断标记有没有设置了，设置了就代表有值
		if ($(this).attr('panduan') == 'true') {
			
			// 有值区域
			$('#cainiList').html($(this).attr('shuju'));
			
		} else {
				// 没有值区域，请求ajax
				var b = $('#caini').attr('gid');

				$.ajax({

				url: "<?php echo U('Detail/cainixihuan');?>",

				type: "get",

				// 商品GID
				data: {id: b},

				success: function(msg) {
				
					var str = "";

					// 循环遍历
					for (var i = 0; i < msg.length; i++) {

						str += "<li><div class='i-pic limit'><img  src='/Public/"+msg[i].image0+"' /><p>"+msg[i].name+"</p><p class='price fl'><b>¥</b><strong>"+msg[i].money+"</strong></p></div></li>";
					}

						// 替换内容
						$('#cainiList').html(str);

						// 设置标记
						$('#caini').attr('shuju', str);
						$('#caini').attr('panduan', true);

				}
			});
		}

	});

	</script>

<div class="clear"></div>


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

				</div>
			</div>

			<!--菜单 -->
			<div class=tip>
				<div id="sidebar">
					<div id="wrap">
						<div id="prof" class="item">
							<a href="#">
								<span class="setting"></span>
							</a>
							<div class="ibar_login_box status_login">
								<div class="avatar_box">
									<p class="avatar_imgbox"><img src="/Public/Home/images/no-img_mid_.jpg" /></p>
									<ul class="user_info">
										<li>用户名：sl1903</li>
										<li>级&nbsp;别：普通会员</li>
									</ul>
								</div>
								<div class="login_btnbox">
									<a href="#" class="login_order">我的订单</a>
									<a href="#" class="login_favorite">我的收藏</a>
								</div>
								<i class="icon_arrow_white"></i>
							</div>

						</div>
						<div id="shopCart" class="item">
							<a href="#">
								<span class="message"></span>
							</a>
							<p>
								购物车
							</p>
							<p class="cart_num">0</p>
						</div>
						<div id="asset" class="item">
							<a href="#">
								<span class="view"></span>
							</a>
							<div class="mp_tooltip">
								我的资产
								<i class="icon_arrow_right_black"></i>
							</div>
						</div>

						<div id="foot" class="item">
							<a href="#">
								<span class="zuji"></span>
							</a>
							<div class="mp_tooltip">
								我的足迹
								<i class="icon_arrow_right_black"></i>
							</div>
						</div>

						<div id="brand" class="item">
							<a href="#">
								<span class="wdsc"><img src="/Public/Home/images/wdsc.png" /></span>
							</a>
							<div class="mp_tooltip">
								我的收藏
								<i class="icon_arrow_right_black"></i>
							</div>
						</div>

						<div id="broadcast" class="item">
							<a href="#">
								<span class="chongzhi"><img src="/Public/Home/images/chongzhi.png" /></span>
							</a>
							<div class="mp_tooltip">
								我要充值
								<i class="icon_arrow_right_black"></i>
							</div>
						</div>

						<div class="quick_toggle">
							<li class="qtitem">
								<a href="#"><span class="kfzx"></span></a>
								<div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
							</li>
							<!--二维码 -->
							<li class="qtitem">
								<a href="#none"><span class="mpbtn_qrcode"></span></a>
								<div class="mp_qrcode" style="display:none;"><img src="/Public/Home/images/weixin_code_145.png" /><i class="icon_arrow_white"></i></div>
							</li>
							<li class="qtitem">
								<a href="#top" class="return_top"><span class="top"></span></a>
							</li>
						</div>

						<!--回到顶部 -->
						<div id="quick_links_pop" class="quick_links_pop hide"></div>

					</div>

				</div>
				<div id="prof-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						我
					</div>
				</div>
				<div id="shopCart-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						购物车
					</div>
				</div>
				<div id="asset-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						资产
					</div>

					<div class="ia-head-list">
						<a href="#" target="_blank" class="pl">
							<div class="num">0</div>
							<div class="text">优惠券</div>
						</a>
						<a href="#" target="_blank" class="pl">
							<div class="num">0</div>
							<div class="text">红包</div>
						</a>
						<a href="#" target="_blank" class="pl money">
							<div class="num">￥0</div>
							<div class="text">余额</div>
						</a>
					</div>

				</div>
				<div id="foot-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						足迹
					</div>
				</div>
				<div id="brand-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						收藏
					</div>
				</div>
				<div id="broadcast-content" class="nav-content">
					<div class="nav-con-close">
						<i class="am-icon-angle-right am-icon-fw"></i>
					</div>
					<div>
						充值
					</div>
				</div>
			</div>


	</body>
	<script>
		if ($('#price').html() == '9.90' && <?php echo ($crr["data"]); ?> != '4' && <?php echo ($crr["data"]); ?> != '1' && <?php echo ($crr["data"]); ?> != '3') {
		// console.log(123);	
			var time1 = setInterval("time()",1000);
			// $('#font').html('距离活动开始还有');
			function time(){
				var ts = (new Date(<?php echo ($arr["year"]); ?>, <?php echo ($arr["month"]); ?>, <?php echo ($arr["day"]); ?>, <?php echo ($arr["time"]); ?>, <?php echo ($arr["branch"]); ?>, <?php echo ($arr["second"]); ?>)) - (new Date());

				// if (ts <= 0) {
				// 	return;
				// }
				// // console.log(ts);
				var hh = parseInt(ts / 1000 / 60 / 60 % 24, 10);
				var mm = parseInt(ts / 1000 / 60 % 60, 10);
				var ss = parseInt((ts / 1000 ) % 60 , 10);
				
				hh = checkTime(hh) +'：';
				mm = checkTime(mm) +'：';
				ss = checkTime(ss); 

				$("#shi").html(hh);
				$("#fen").html(mm);
				$("#miao").html(ss);

				// console.log(hh);
				// console.log(mm);
				// console.log(ss);

				// 	// console.log($("#less_hour"));
				// 	// console.log($("#less_hour").html('1'));
				// 	// $("#less_minutes").html('行');
				// 	// $("#less_seconds").html('中');

					if (hh == '00：' && mm == '00：' && ss == '00') {

						clearTimeout(time1);
						$.ajax({
							url:"<?php echo U('Index/hand');?>",
							type:'get',
							async:false,
							success:function(res) {
								// if (res == '1') {
								// alert('活动已结束!');
								// }
								console.log(123);
								var time2 = setTimeout(times(),1000);
							},
						})
					}

					if (<?php echo ($crr["data"]); ?> == '3') {
				var time2 = setTimeout(times(),1000);
			}
			
			function times() {
				console.log(666);
				$('.miao').remove();
				$('#as').remove();
				$('#sbs').append('<a id="as">秒杀价</a><div class="miao" style="margin-left: 20px;">距离活动结束还有 <a id="shi">00</a> <a id="fen">00</a> <a id="miao">00</a></div>');
				
					time3 = setInterval(function(){

					var ts = (new Date(<?php echo ($brr["year"]); ?>, <?php echo ($brr["month"]); ?>, <?php echo ($brr["day"]); ?>, <?php echo ($brr["time"]); ?>, <?php echo ($brr["branch"]); ?>, <?php echo ($brr["second"]); ?>)) - (new Date());
					// if (ts <= 0) {
					// 	return;
					// }
					// console.log(ts);
					var hhs = parseInt(ts / 1000 / 60 / 60 % 24, 10);
					var mms = parseInt(ts / 1000 / 60 % 60, 10);
					var sss = parseInt((ts / 1000 ) % 60 , 10);

					// console.log(hhs);
					// console.log(mms);
					// console.log(sss);

					hhs = checkTime(hhs) +'：';
					mms = checkTime(mms) +'：';
					sss = checkTime(sss);

					console.log(hhs);
					console.log(mms);
					console.log(sss);

					if (hhs == '00：' && mms == '00：' && sss == '00') {
						$.ajax({
							url:"<?php echo U('Index/end');?>",
							type:'get',
							async:false,
							success:function(res) {
								console.log(777);
								clearTimeout(time3);
								$('#as').remove();
								$('.miao').html('活动已结束');
								location.reload();
							},
						})
					}

					$("#shi").html(hhs);
					$("#fen").html(mms);
					$("#miao").html(sss);


				},1000);
				
				
			}
				}
			}




				function checkTime(i){
					if (i < 10) {  
		   				i = "0" + i; 
					}
						return i;
				}
				var i = 0;	
			
			if (<?php echo ($crr["data"]); ?> == '3') {
				var time2 = setTimeout(times(),1000);
			}

			function times() {
				console.log(3343);
				$('.miao').remove();
				$('#as').remove();
				$('#sbs').append('<a id="as">秒杀价</a><div class="miao" style="margin-left: 20px;">距离活动结束还有 <a id="shi">00</a> <a id="fen">00</a> <a id="miao">00</a></div>');
				
					time3 = setInterval(function(){

					var ts = (new Date(<?php echo ($brr["year"]); ?>, <?php echo ($brr["month"]); ?>, <?php echo ($brr["day"]); ?>, <?php echo ($brr["time"]); ?>, <?php echo ($brr["branch"]); ?>, <?php echo ($brr["second"]); ?>)) - (new Date());

					var hhs = parseInt(ts / 1000 / 60 / 60 % 24, 10);
					var mms = parseInt(ts / 1000 / 60 % 60, 10);
					var sss = parseInt((ts / 1000 ) % 60 , 10);

					hhs = checkTime(hhs) +'：';
					mms = checkTime(mms) +'：';
					sss = checkTime(sss);



					if (hhs == '00：' && mms == '00：' && sss == '00') {
						$.ajax({
							url:"<?php echo U('Index/end');?>",
							type:'get',
							async:false,
							success:function(res) {
								console.log(777);
								clearTimeout(time3);
								$('#as').remove();
								$('.miao').html('活动已结束');
								location.reload();
							},
						})
					}

					$("#shi").html(hhs);
					$("#fen").html(mms);
					$("#miao").html(sss);


				},1000);
				
				
			}
	</script>
</html>