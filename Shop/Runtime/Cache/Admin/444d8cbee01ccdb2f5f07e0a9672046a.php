<?php if (!defined('THINK_PATH')) exit();?><!-- 添加子分类页面 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/abc/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/abc/Public/Admin/css/style.css"/>       
        <link href="/abc/Public/Admin/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/abc/Public/Admin/Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome.min.css" />
        <script type="text/javascript" src="/abc/Public/Admin/Widget/icheck/jquery.icheck.min.js"></script> 
		<script type="text/javascript" src="/abc/Public/Admin/Widget/Validform/5.3.2/Validform.min.js"></script>
		<script type="text/javascript" src="/abc/Public/Admin/assets/layer/layer.js"></script>
		<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.js"></script> 
		<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.admin.js"></script>
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->
			<script href="/abc/Public/Admin/assets/js/jquery.min.js"></script>
		<!-- <![endif]-->
		<!--[if IE]>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->
		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
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
		<!-- <![endif]-->
		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
        <script href="/abc/Public/Admin/assets/js/ace-elements.min.js"></script>
		<script href="/abc/Public/Admin/assets/js/ace.min.js"></script>
        <script href="/abc/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script href="/abc/Public/Admin/assets/js/typeahead-bs2.min.js"></script>
        <script type="text/javascript" src="/abc/Public/Admin/Widget/zTree/js/jquery.ztree.all-3.5.min.js"></script> 
        <script src="/abc/Public/Admin/js/lrtk.js" type="text/javascript" ></script>
<title>分类管理</title>
</head>

<body>
<div class=" clearfix">
 <div id="category">
<div class="type_style" >
 <div class="type_title">产品类型asd信息</div>
  <div class="type_content">
  <div class="Operate_btn">
  <a href="javascript:ovid()" class="btn  btn-warning"><i class="icon-edit align-top bigger-125"></i>新增子类型</a>
  </div>
  <form action="#" method="post" enctype="multipart/form-data" class="form form-horizontal" id="form-user-add">

  <input type="hidden" name='pid' value="<?php echo ($_GET['id']); ?>">
  <input type="hidden" name='path' value="<?php echo ($_GET['path']); ?>">
    <div class="Operate_cont clearfix">
      <label class="form-label"><span class="c-red">*</span>分类名称：</label>
      <div class="formControls ">
        <input type="text" class="input-text" value="" placeholder="" id="user-name" name="name">
      </div>
    </div>
    <div class="Operate_cont clearfix">
    <label class="form-label">备注：</label>
    <div class="formControls">
    <textarea name="content" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,100)"></textarea>
     <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
    </div>
    </div>
   
    <!-- <input type="file" name='logo' /> -->
    <div class="">
     <div class="" style=" text-align:center">
      <input class="btn btn-primary radius" type="submit" value="提交">
      <span class="btn btn-warning" /><a style='color: #000' href="<?php echo U('Type/shopnews');?>">返回</a></span>
      </div>
    </div>
  </form>
  </div>
</div> 
</div>
<script type="text/javascript" src="/abc/Public/Admin/Widget/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/abc/Public/Admin/Widget/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/abc/Public/Admin/assets/layer/layer.js"></script>
<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
// $(function(){
// 	$('.skin-minimal input').iCheck({
// 		checkboxClass: 'icheckbox-blue',
// 		radioClass: 'iradio-blue',
// 		increaseArea: '20%'
// 	});
	
// 	$("#form-user-add").Validform({
// 		tiptype:2,
// 		callback:function(form){
// 			form[0].submit();
// 			var index = parent.layer.getFrameIndex(window.name);
// 			parent.$('.btn-refresh').click();
// 			parent.layer.close(index);
// 		}
// 	});
// });
</script>
 </div>
</div>
</body>
</html>