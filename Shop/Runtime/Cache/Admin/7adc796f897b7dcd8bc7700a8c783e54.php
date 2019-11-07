<?php if (!defined('THINK_PATH')) exit();?><!-- 权限分配页面 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Cache-Control" content="no-siteapp" />
      <link href="/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="/Public/Admin/css/style.css"/>       
        <link href="/Public/Admin/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/Public/Admin/assets/css/ace.min.css" />
        <link rel="stylesheet"href="/Public/Admin/font/css/font-awesome.min.css" />
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="/Public/Admin/js/jquery-1.9.1.min.js"></script>
        <script src="/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/Public/Admin/assets/js/typeahead-bs2.min.js"></script>           	
		<script src="/Public/Admin/assets/js/jquery.dataTables.min.js"></script>
		<script src="/Public/Admin/assets/js/jquery.dataTables.bootstrap.js"></script>
        <script src="/Public/Admin/assets/layer/layer.js" type="text/javascript" ></script>          
        <script src="/Public/Admin/assets/laydate/laydate.js" type="text/javascript"></script>
        <script src="/Public/Admin/js/dragDivResize.js" type="text/javascript"></script>
<title>权限管理</title>
</head>
<body>
   <!--权限分配-->
   <div class="Assign_style" >
      <div class="title_name"><h3><a href="<?php echo U('Adminuser/authority_list');?>">☚ 权限管理＞</a><?php echo ($rol["rolename"]); ?>✎权限编辑</h3></div>
		<hr />
	  <form action="<?php echo U('Adminuser/authority_distribution');?>" method="post">
	  	<input type="hidden" value="<?php echo ($rol["id"]); ?>" name='rid'/>				
      <div class="Select_Competence">
	  <!-- 外框 -->
	  <?php if(is_array($arr)): foreach($arr as $key=>$v1): if($v1['tid']==1){ ?>
      	<dl class="permission-list">
		<!-- 一级分类 -->
			<dt><label class="middle"><input  class="ace" type="checkbox" id="id-disable-check" ><span class="lbl"><?=$v1['nodetitle'] ?></span></label></dt>	
		<!-- 一级分类 -->
		<!-- 下框 -->
		<?php if(is_array($arr)): foreach($arr as $key=>$v2): if($v2['tid']==$v1['id']){?>
			<dd>
			<dl class="cl permission-list2">
			<!--二级分类  -->
				<dt>
					<label class="middle"><input type="checkbox"  class="ace"  id="id-disable-check"><span class="lbl"><?=$v2['nodetitle']?></span></label>
				</dt>
			<!-- 二级分类 -->

			<!-- 三级分类 -->
        		<dd>
				<?php if(is_array($arr)): foreach($arr as $key=>$v3): if($v3['tid']==$v2['id']){ ?>
		   			<label class="middle"><input type="checkbox" value="<?=$v3['id']?>" class="ace" name="<?=$v3['nodetitle']?>" id="user-Character-0-0-0"
						<?php if(in_array($v3['id'],$node)){echo 'checked';} ?>
		   			><span class="lbl"><?=$v3['nodetitle'] ?></span></label>
				<?php } endforeach; endif; ?>	
				</dd>
			<!-- 三级分类 -->
			</dl>
			</dd>
		<?php } endforeach; endif; ?>
		<!-- 下框 -->
	    </dl> 
      <?php } ?>
      </div>
    	<!-- 外框 --><?php endforeach; endif; ?>　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　
	  　　　　　<button class="btn btn-primary radius" >　　确定　　</button>
     　　</form>
  </div>
</body>
</html>
<script type="text/javascript">
//初始化宽度、高度  
/*字数限制*/
function checkLength(which) {
	var maxChars = 200; //
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
		var curr = maxChars - which.value.length; //250 减去 当前输入的
		document.getElementById("sy").innerHTML = curr.toString();
		return true;
	}
};
/*按钮选择*/
$(function(){
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
		
	});
});
//面包屑返回值
var index = parent.layer.getFrameIndex(window.name);
parent.layer.iframeAuto(index);
$('.Order_form ,#Competence_add').on('click', function(){
	var cname = $(this).attr("title");
	var cnames = parent.$('.Current_page').html();
	var herf = parent.$("#iframe").attr("src");
    parent.$('#parentIframe span').html(cname);
	parent.$('#parentIframe').css("display","inline-block");
    parent.$('.Current_page').attr("name",herf).css({"color":"#4c8fbd","cursor":"pointer"});
	//parent.$('.Current_page').html("<a href='javascript:void(0)' name="+herf+">" + cnames + "</a>");
    parent.layer.close(index);
	
});
</script>