<?php if (!defined('THINK_PATH')) exit();?><!-- 添加分类 -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
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
        <script src="/abc/Public/Admin/js2/jquery-2.1.4/jquery.min.js"></script>
<title>添加产品分类</title>
</head>
<body>
<div class=" page-content clearfix">
 <div id="products_style">
     <div class="border clearfix">
       <span class="l_f">
       <!-- 点击a标签触发函数实行toggle -->
        <a onclick="fenlei(this)" href="javascript:void(0)" title="添加顶级分类" class="btn btn-warning Order_form"><i class="icon-plus"></i>添加顶级分类</a>
        <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
       </span>
       <!-- 添加顶级分类form表单 -->
       <form style='display: none;' id='form' action="<?php echo U('Type/typeadd');?>" method="post" enctype='multipart/form-data'>
        顶级分类名称：
          <input name='name' type="text">
        描述:
          <input name='content' type="text">
          <button  class='btn btn-info'>提交</button>
          <!-- form表单结束 -->
       </form>
     </div>
       <form style='margin-bottom: 20px;' action="#">
       搜索
          <input type="text" name=''>
          <button>提交</button>
       </form>
     
 <div class="table_menu_list" id="testIframe">
   <table class="table table-striped table-bordered table-hover" id="sample-table">
    <thead>
     <tr>
        <th width="25px"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
        <th width="20px;">分类ID</th>
        <th width="100px;">分类名字</th>
        <th width="80px;">所属分类</th>
        <th width="100px">添加时间</th>
        <th width="100px">上次修改时间</th>
        <th width="50px">path</th>
        <th width="250px">操作</th>                
      </tr>
    </thead>
  <tbody>

  <?php  if (!$arr) { echo "<tr><td colspan='8'><h1>暂无分类，请点击左上角开始创建分类</h1></td></tr>"; } foreach ($arr as $v) : $num = substr_count($v['path'], ','); $str = str_repeat(' 　 ', $num-1); ?>
     <tr class='tr'>
          <td width="25px"><label><input type="checkbox" class="ace" ><span class="lbl"></span></label></td>
          <td width="20px;"><?=$v['id']?></td>               
          <td width="100px;"><?=$str.$v['name']?></td>               
          <td width="80px;">ID为　<span style='color: red;'><?=$v['pid']?></span>　的分类<u style="cursor:pointer" class="text-primary" onclick=""></u></td>
          <td width="100px"><?=$v['atime']?></td>               
          <td width="100px"><?=$v['xtime']?></td>               
          <td width="50px"><?=$v['path']?></td>
         <td class="td-manage">
            <a class="btn btn-xs btn-info" href="<?php echo U('Type/typeadd2', ['id'=>$v['id'], 'path'=>$v['path'].$v['id'].',']);?>"><i class="icon-arrow-right"></i>添加子分类</a>
            <a class="btn btn-xs btn-info" href="<?php echo U('Type/typeedit', 'id='.$v['id']);?>"><i class="icon-edit bigger-120"></i>编辑分类</a>
             <a class="btn btn-xs btn-warning" href="<?php echo U('Type/delType', ['id' => $v['id']]);?>"><i class="icon-trash  bigger-120"></i>删除分类</a>
         </td>
      </tr>
    <?php endforeach;?>
    </tbody>
    </table>
    </div>     
  </div>
  <!-- 分页 -->
  <div>
    <?php echo ($show); ?>
  </div>
 </div>
</div>
<script type="text/javascript" src="/abc/Public/Admin/Widget/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="/abc/Public/Admin/Widget/Validform/5.3.2/Validform.min.js"></script>
<script type="text/javascript" src="/abc/Public/Admin/assets/layer/layer.js"></script>
<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/abc/Public/Admin/js/H-ui.admin.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-user-add").Validform({
		tiptype:2,
		callback:function(form){
			form[0].submit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
	});
});

// form表单的事件
fenlei = function fenlei(a) {
  $('#form').toggle('slow');
}



</script>
</body>
</html>