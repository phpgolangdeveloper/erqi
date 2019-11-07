<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>付款成功页面</title>
  <link rel="stylesheet"  type="text/css" href="/abc/Public/Home/AmazeUI-2.4.2/assets/css/amazeui.css"/>
  <link href="/abc/Public/Home/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
  <link href="/abc/Public/Home/basic/css/demo.css" rel="stylesheet" type="text/css" />
  <link href="/abc/Public/Home/css/sustyle.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" href="/abc/Public/Home/basic/js/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="/abc/Public/Home/js/jquery-1.7.2.min.js"></script>
  <script src="/abc/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
  <script src="/abc/Public/Home/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
  <script src="/abc/Public/Home/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>
</head>

<body>
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
            <div class="menu-hd"><a id="mc-menu-hd" href="<?php echo U('Shopcart/index');?>" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
          </div>
          <div class="topMessage favorite">
            <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
        </ul>
  </div>

  <!--悬浮搜索框-->

  <div class="nav white">
  <div class="logo"><img href="/abc/Public/Home/images/logo.png" /></div>
    <div class="logoBig">
      <li><img href="/abc/Public/Home/images/logobig.png" /></li>
    </div>
    
    <div class="search-bar pr">
      <a name="index_none_header_sysc" href="#"></a>       
      <form>
        <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
        <input id="ai-topsearch" class="submit" value="搜索" index="1" type="submit">
      </form>
    </div>     
  </div>

  <div class="clear"></div>



<!--   <div class="take-delivery" >
    <div class="status">
      <h2>您已成功付款</h2>
      <div class="successInfo">
        <ul>
          <li>付款金额<em><?php echo ($data['productmoney']); ?>元</em></li>
          <div class="user-info">
           <p>收货人：<?php echo ($data['username']); ?></p>
           <p>联系电话：<?php echo ($data['userphone']); ?></p>
           <p>收货地址：<?php echo ($data['uaddress']); ?></p>
          </div>
               请认真核对您的收货信息，如有错误请联系客服
        </ul>
        <div class="option">
          <span class="info">您可以</span>
          <a href="../person/order.html" class="J_MakePoint">查看<span>已买到的宝贝</span></a>
          <a href="../person/orderinfo.html" class="J_MakePoint">查看<span>交易详情</span></a>
        </div>
      </div>
    </div>
  </div> -->

  <div class="take-delivery" >
    <div class="status">
      <h2>您已成功提交订单</h2>
      <div class="successInfo">
        <ul>
          <li>需付款金额<em><?php echo ($data['productmoney']); ?>元</em></li>
          <div class="user-info">
           <p>收货人：  <?php echo ($data['username']); ?></p>
           <p>联系电话：<?php echo ($data['userphone']); ?></p>
           <p>收货地址：<?php echo ($data['uaddress']); ?></p>
          </div>
              <?php  $year = date('Y', $data['atime']); $month = date('m', $data['atime']); $day = date('d', $data['atime']); $hour = date('H', $data['atime']); $minute = date('i', $data['atime']); $second = date('s', $data['atime']); $week = date('l', $data['atime']); ?>
               <p><?php echo ($year); ?>-<?php echo ($month); ?>-<?php echo ($day); ?> / <?php echo ($week); ?>　<?php echo ($hour); ?>:<?php echo ($minute); ?>:<?php echo ($second); ?>　　您提交了订单，请等待系统确认</p>
        </ul>
        <div class="option">
          <span class="info">您可以</span>
          <a href="#" class="J_MakePoint">查看<span>订单详情</span></a>
          <p>订单号:<?php echo ($data['id']); ?></p>
          <p id="timer"></p>
        </div>
      </div>
    </div>
  </div>
        <center><a href="<?php echo U('Orders/paySuccessful', ['id' => $data['id']]);?>" class="pay"><button class="am-btn am-btn-danger">付款</button></a></center>
  <div class="footer" >
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

<script>
  $(function() {
    $('.pay').click(function() {

    })
  })
</script>
</body>
</html>