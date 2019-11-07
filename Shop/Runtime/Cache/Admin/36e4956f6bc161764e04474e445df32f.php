<?php if (!defined('THINK_PATH')) exit();?><!-- 添加商品   注意 这个表单所有字段都用了字段映射技术 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加商品</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
 <link href="/abc/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/abc/Public/Admin/css/style.css"/>       
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome.min.css" />
        <link href="/abc/Public/Admin/Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->
	    <script src="/abc/Public/Admin/js/jquery-1.9.1.min.js"></script>
        <script src="/abc/Public/Admin/assets/js/bootstrap.min.js"></script>
        <script src="/abc/Public/Admin/assets/js/typeahead-bs2.min.js"></script>
         <script src="/abc/Public/Admin/assets/layer/layer.js" type="text/javascript"></script>
        <script type="text/javascript" href="/abc/Public/Admin/Widget/swfupload/swfupload.js"></script>
        <script type="text/javascript" href="/abc/Public/Admin/Widget/swfupload/swfupload.queue.js"></script>
        <script type="text/javascript" href="/abc/Public/Admin/Widget/swfupload/swfupload.speed.js"></script>
        <script type="text/javascript" href="/abc/Public/Admin/Widget/swfupload/handlers.js"></script>
</head>

<body>
<div class=" clearfix">
 <div id="add_brand" class="clearfix" >
 <div class="left_add" style="width: 1500px">
   <div class="title_name" style="width: inherit;">添加商品推广</div>

   <form id="files" action="<?php echo U('Tuiguang/addchuli');?>" method='post' enctype="multipart/form-data">
	
   <ul class="add_conent">
   <!-- name="pinpainame" 是因为用了字段映射 -->
    <li class=" clearfix"><label class="label_name"><i>*</i>商品名称：</label> 
		<select name="name" id="">
		<?php if(is_array($goodsList)): foreach($goodsList as $key=>$v): ?><option value="<?php echo ($v['name']); ?>,<?php echo ($v['id']); ?>"><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
		</select>
		
    </li>
    <li class=" clearfix"><label class="label_name">商品图片：</label>
		<input  id='tijiao' type="file"  name='logo' />
	
    </li>
    <li class=" clearfix"><label class="label_name">推广价格：</label>
		<input  id='tijiao' type="text"  name='money' />
    </li>

         <li class=" clearfix" style="margin-top: 50px;><label class="label_name">促销商品描述：</label> <textarea name="content" cols="" rows="" class="textarea" onkeyup="checkLength(this);"></textarea><span class="wordage">剩余字数：<span id="sy" style="color:Red;">500</span>字</span></li>
   </ul>

  <div class="button_brand" style='margin-left: -40px;'><button class="btn btn-warning" >提交</button><span class="btn btn-warning" /><a style='color: #000' href="<?php echo U('Tuiguang/index');?>">返回</a></span></div>
 
 </div>
   </form>
</div>
</body>
</html>
<script type="text/javascript">
     $(document).ready(function(){
 $(".left_add").height($(window).height()-60); 
   $(".right_add").height($(window).height()-60);
  $(".select").height($(window).height()-195); 
  $("#select_style").height($(window).height()-220); 
 //当文档窗口发生改变时 触发  
    $(window).resize(function(){
		 $(".left_add").height($(window).height()-60);
		 $(".right_add").height($(window).height()-60); 
		 $(".select").height($(window).height()-195); 
		$("#select_style").height($(window).height()-220); 
	});
	 })
	function checkLength(which) {
	var maxChars = 500;
	if(which.value.length > maxChars){
	   layer.open({
	   icon:2,
	   title:'提示框',
	   content:'您出入的字数超多限制!',	
    });
		// 超过限制的字数了就将 文本框中的内容按规定的字数 截取
		which.value = which.value.substring(0,maxChars);
		return false;
	}else{
		var curr = maxChars - which.value.length; // 减去 当前输入的
		document.getElementById("sy").innerHTML = curr.toString();
		return true;
	}
}
//下拉框交换JQuery
$(function(){


    //移到右边
    $('#add').click(function() {
    //获取选中的选项，删除并追加给对方
        $('#select1 option:selected').appendTo('#select2');
    });
    //移到左边
    $('#remove').click(function() {
        $('#select2 option:selected').appendTo('#select1');


    });
    // //全部移到右边
    // $('#add_all').click(function() {
    //     //获取全部的选项,删除并追加给对方
    //     $('#select1 option').appendTo('#select2');
    // });
    // //全部移到左边
    // $('#remove_all').click(function() {
    //     $('#select2 option').appendTo('#select1');
    // });
    //双击选项
    $('#select1').dblclick(function(){ //绑定双击事件
        //获取全部的选项,删除并追加给对方
        $("option:selected",this).appendTo('#select2'); //追加给对方
    });
    //双击选项
    $('#select2').dblclick(function(){
       $("option:selected",this).appendTo('#select1');
    });
});
		
  
</script>
<script type="text/javascript">
	
</script>