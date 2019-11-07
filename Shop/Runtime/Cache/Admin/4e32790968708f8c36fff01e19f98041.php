<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="/abc/Public/Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/style.css"/>       
        <link href="/abc/Public/Admin/assets/css/codemirror.css" rel="stylesheet">
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace.min.css" />
        <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
        <!--[if lte IE 8]>
		  <link rel="stylesheet" href="/abc/Public/Admin/assets/css/ace-ie.min.css" />
		<![endif]-->
			<script src="/abc/Public/Admin/assets/js/jquery.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/abc/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/abc/Public/Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/abc/Public/Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/abc/Public/Admin/assets/js/bootstrap.min.js"></script>
		<script src="/abc/Public/Admin/assets/js/typeahead-bs2.min.js"></script>
		<!-- page specific plugin scripts -->
		<script src="/abc/Public/Admin/assets/js/jquery.dataTables.min.js"></script>
		<script src="/abc/Public/Admin/assets/js/jquery.dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="/abc/Public/Admin/js/H-ui.js"></script> 
        <script type="text/javascript" src="/abc/Public/Admin/js/H-ui.admin.js"></script> 
        <script src="/abc/Public/Admin/assets/layer/layer.js" type="text/javascript" ></script>
        <script src="/abc/Public/Admin/assets/laydate/laydate.js" type="text/javascript"></script>
        <script src="/abc/Public/Admin/js/jquery.min.js" type="text/javascript">
        </script>
        <style type="text/css">
    .num{
        padding:4px;
        font-size: 18px;
        border:1px solid #ccc;
        color:#000;
    }
    .current{
        padding:4px;
        font-size: 18px;
        border:1px solid #ccc;
        color:#000;      
    }
</style>

<title>用户列表</title>
</head>

<body>
<div class="page-content clearfix">
    <div id="Member_Ratings">
      <div class="d_Confirm_Order_style">
    <div class="search_style">
     
      <ul class="search_content clearfix">
       <li><label class="l_f">会员名称</label><input name="" type="text"  class="text_add" placeholder="输入会员名称、电话、邮箱"  style=" width:400px"/></li>
       <li><label class="l_f">添加时间</label><input class="inline laydate-icon" id="start" style=" margin-left:10px;"></li>
       <li style="width:90px;"><button type="button" class="btn_search"><i class="icon-search"></i>查询</button></li>
      </ul>
    </div>
     <!---->
     <div class="border clearfix">
       <span class="l_f">
        <!-- <a href="javascript:ovid()" id="member_add" class="btn btn-warning"><i class="icon-plus"></i>添加用户</a> -->
        <a href="javascript:ovid()" class="btn btn-danger"><i class="icon-trash"></i>批量删除</a>
       </span>
       <span class="r_f">共：<b>2345</b>条</span>
     </div>
     <!---->
     <div class="table_menu_list">
       <table class="table table-striped table-bordered table-hover" id="sample-table">
		<thead>
		 <tr>
				<th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="80">性别</th>
				<th width="120">手机</th>
				<th width="150">邮箱</th>
				<th width="">积分</th>
				<th width="180">加入时间</th>
                <th width="100">等级</th>
				<th width="70">状态</th>                
				<th width="250">操作</th>
			</tr>
		</thead>
	<tbody>
  <?php if(is_array($arr)): foreach($arr as $key=>$v): ?><tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td><?php echo ($v['id']); ?></td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','500','400')"><?php echo ($v['username']); ?></u></td>
          <td><?php echo ($v['sex']); ?></td>
          <td><?php echo ($v['phone']); ?></td>
          <td><?php echo ($v['email']); ?></td>
          <td class="text-l"><?php echo ($v['integral']); ?></td>
          <td><?php echo ($v['addtime']); ?></td>
          <td><?php echo ($v['grade']); ?></td>

          <?php if($v['status'] == '禁用'): ?><td class="td-status"><span class="label label-defaunt radius"><?php echo ($v['status']); ?></span></span></td>
            <td class="td-manage">
          <a onclick="member_start(this,'10001', <?php echo ($v['id']); ?>)" name="" title="启用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a>
          <?php else: ?>
          <td class="td-status"><span class="label label-success radius"><?php echo ($v['status']); ?></span></td>
          <td class="td-manage">
          <a onclick="member_stop(this,'10001', <?php echo ($v['id']); ?>)" name="" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a><?php endif; ?>


          <!-- <a title="编辑" href="<?php echo U('User/edit', ['id'=>$v['id']]);?>" name="" class="btn btn-xs btn-info" ><i class="icon-edit bigger-120"></i></a>  -->
          <!-- <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a> -->
          </td>
		</tr><?php endforeach; endif; ?>
  <div class="page" style="margin-top:270px;position:absolute;margin-left:20px;">

  <?php echo ($brr); ?></div>
        <!-- <tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td>2</td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张小泉','member-show.html','1031','500','400')">张小泉</u></td>
          <td>男</td>
          <td>13000000000</td>
          <td>admin@mail.com</td>
          <td class="text-l">北京市 海淀区</td>
          <td>2014-6-11 11:11:42</td>
          <td>普通用户</td>
          <td class="td-status"><span class="label label-success radius">已启用</span></td>
          <td class="td-manage">
          <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
          <a title="编辑" onclick="member_edit('310')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="icon-edit bigger-120"></i></a> 
        
          <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
          </td>
		</tr>
         <tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td>3</td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张小泉','member-show.html','10301','500','400')">张小泉</u></td>
          <td>男</td>
          <td>13000000000</td>
          <td>admin@mail.com</td>
          <td class="text-l">北京市 海淀区</td>
          <td>2014-6-11 11:11:42</td>
          <td>银牌用户</td>
          <td class="td-status"><span class="label label-success radius">已启用</span></td>
          <td class="td-manage">
          <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
          <a title="编辑" onclick="member_edit(,'410')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="icon-edit bigger-120"></i></a> 
         
          <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
          </td>
		</tr>
         <tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td>4</td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张小泉','member-show.html','10001','500','400')">张小泉</u></td>
          <td>男</td>
          <td>13000000000</td>
          <td>admin@mail.com</td>
          <td class="text-l">北京市 海淀区</td>
          <td>2014-6-11 11:11:42</td>
          <td>银牌用户</td>
          <td class="td-status"><span class="label label-success radius">已启用</span></td>
          <td class="td-manage">
          <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
          <a title="编辑" onclick="member_edit('560')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="icon-edit bigger-120"></i></a> 
        
          <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
          </td>
		</tr>
         <tr>
          <td><label><input type="checkbox" class="ace"><span class="lbl"></span></label></td>
          <td>5</td>
          <td><u style="cursor:pointer" class="text-primary" onclick="member_show('张小泉','member-show.html','10001','500','400')">张小泉</u></td>
          <td>男</td>
          <td>13000000000</td>
          <td>admin@mail.com</td>
          <td class="text-l">北京市 海淀区</td>
          <td>2014-6-11 11:11:42</td>
          <td>银牌用户</td>
          <td class="td-status"><span class="label label-success radius">已启用</span></td>
          <td class="td-manage">
          <a onClick="member_stop(this,'10001')"  href="javascript:;" title="停用"  class="btn btn-xs btn-success"><i class="icon-ok bigger-120"></i></a> 
          <a title="编辑" onclick="member_edit('510')" href="javascript:;"  class="btn btn-xs btn-info" ><i class="icon-edit bigger-120"></i></a> 
        
          <a title="删除" href="javascript:;"  onclick="member_del(this,'1')" class="btn btn-xs btn-warning" ><i class="icon-trash  bigger-120"></i></a>
          </td>
		</tr> -->
      </tbody>
	</table>
   </div>
  </div>
 </div>
</div>
<!--添加用户图层-->
<!-- <div class="add_menber" id="add_menber_style" style="display:none">
    <form action="<?php echo U('User/edit');?>" method="post">
    <ul class=" page-content">
     <li><label class="label_name">用&nbsp;&nbsp;户&nbsp;&nbsp;名：</label><span class="add_name"><input  name="username" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">真实姓名：</label><span class="add_name"><input name="tname" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</label><span class="add_name">
     <label><input name="sex" type="radio" checked="checked" class="ace" value="1"><span class="lbl">男</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="sex" type="radio" class="ace" value="2"><span class="lbl">女</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="sex" type="radio" class="ace"><span class="lbl">保密</span></label>
     </span>
     <div class="prompt r_f"></div>
     </li>
     <li><label class="label_name">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：</label><span class="add_name"><input name="password" type="password"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">确认密码：</label><span class="add_name"><input name="password1" type="password"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">移动电话：</label><span class="add_name"><input name="phone" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">电子邮箱：</label><span class="add_name"><input name="email" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li class="adderss"><label class="label_name">家庭住址：</label><span class="add_name"><input name="家庭住址" type="text"  class="text_add" style=" width:350px"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">状&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;态：</label><span class="add_name">
     <label><input name="status" value="1" type="radio" checked="checked" class="ace"><span class="lbl">开启</span></label>&nbsp;&nbsp;&nbsp;
     <label><input name="status" value="2" type="radio" class="ace"><span class="lbl">关闭</span></label></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄：</label><span class="add_name"><input  name="age" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
     <li><label class="label_name">积&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分：</label><span class="add_name"><input  name="integral" type="text"  class="text_add"/></span><div class="prompt r_f"></div></li>
    </ul>
    <button type="submit">提交</button>
    </form>
 </div> -->
</body>
</html>
<script>
// jQuery(function($) {
// 				var oTable1 = $('#sample-table').dataTable( {
// 				"aaSorting": [[ 1, "desc" ]],//默认第几个排序
// 		"bStateSave": true,//状态保存
// 		"aoColumnDefs": [
// 		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
// 		  {"orderable":false,"aTargets":[0,8,9]}// 制定列不参与排序
// 		] } );
				
				
// 				$('table th input:checkbox').on('click' , function(){
// 					var that = this;
// 					$(this).closest('table').find('tr > td:first-child input:checkbox')
// 					.each(function(){
// 						this.checked = that.checked;
// 						$(this).closest('tr').toggleClass('selected');
// 					});
						
// 				});
			
			
			// 	$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
			// 	function tooltip_placement(context, source) {
			// 		var $source = $(source);
			// 		var $parent = $source.closest('table')
			// 		var off1 = $parent.offset();
			// 		var w1 = $parent.width();
			
			// 		var off2 = $source.offset();
			// 		var w2 = $source.width();
			
			// 		if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			// 		return 'left';
			// 	}
			// })
/*用户-添加*/
//  $('#member_add').on('click', function(){
//     layer.open({
//         type: 1,
//         title: '添加用户',
// 		maxmin: true, 
// 		shadeClose: true, //点击遮罩关闭层
//         area : ['800px' , ''],
//         content:$('#add_menber_style'),
// 		btn:['提交','取消'],
// 		yes:function(index,layero){	
// 		 var num=0;
// 		 var str="";
//      $(".add_menber input[type$='text']").each(function(n){
//           if($(this).val()=="")
//           {
               
// 			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
//                 title: '提示框',				
// 				icon:0,								
//           }); 
// 		    num++;
//             return false;            
//           } 
// 		 });
// 		  if(num>0){  return false;}	 	
//           else{
// 			  layer.alert('添加成功！',{
//                title: '提示框',				
// 			icon:1,		
// 			  });
// 			   layer.close(index);	
// 		  }		  		     				
// 		}
//     });
// });
/*用户-查看*/
// function member_show(title,url,id,w,h){
// 	layer_show(title,url+'#?='+id,w,h);
// }
/*用户-停用*/
function member_stop(obj,id,a){
  // console.log(a);
	layer.confirm('确认要停用吗？',function(index){
    $.ajax({
      type:'get',
      url : "<?php echo U('User/save');?>",
      data : {id:+ a},
      success: function(res) {
        if (res != '-1') {
      		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs " onClick="member_start(this,id,'+res+')" href="javascript:;" title="启用"><i class="icon-ok bigger-120"></i></a>');
      		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">禁用</span>');
      		$(obj).remove();
          layer.msg('以禁用!',{icon: 5,time:1000});

        } else {
          layer.msg('修改失败!',{icon: 5,time:1000});
        }
      },
    });
	});
}

/*用户-启用*/
function member_start(obj,id,a){
	layer.confirm('确认要启用吗？',function(index){
      $.ajax({
      type:'get',
      url : "<?php echo U('User/save');?>",
      data : {id:+ a},
      success: function(res) {
        console.log(res);
        if (res != '-1') {
		      $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" class="btn btn-xs btn-success" onClick="member_stop(this,id,'+res+')" href="javascript:;" title="停用"><i class="icon-ok bigger-120"></i></a>');
		      $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">正常</span>');
		      $(obj).remove();
		      layer.msg('已启用!',{icon: 6,time:1000});
        } else {
           layer.msg('修改失败!',{icon: 5,time:1000});
        }
      },
    });
	});
}

/*用户-编辑*/
// function member_edit(id){
// 	  layer.open({
//         type: 1,
//         title: '修改用户信息',
// 		maxmin: true, 
// 		shadeClose:false, //点击遮罩关闭层
//         area : ['800px' , ''],
//         content:$('#add_menber_style'),
// 		// btn:['提交','取消'],
// 		yes:function(index,layero){	
// 		 var num=0;
// 		 var str="";
//      $(".add_menber input[type$='text']").each(function(n){
//           if($(this).val()=="")
//           {
               
// 			   layer.alert(str+=""+$(this).attr("name")+"不能为空！\r\n",{
//                 title: '提示框',				
// 				icon:0,								
//           }); 
// 		    num++;
//             return false;            
//           } 
// 		 });
// 		  if(num>0){  return false;}	 	
//           else{
// 			  layer.alert('添加成功！',{
//                title: '提示框',				
// 			icon:1,		
// 			  });
// 			   layer.close(index);	
// 		  }		  		     				
// 		}
//     });
// }
/*用户-删除*/
// function member_del(obj,id){
// 	layer.confirm('确认要删除吗？',function(index){
// 		$(obj).parents("tr").remove();
// 		layer.msg('已删除!',{icon:1,time:1000});
// 	});
// }
// laydate({
//     elem: '#start',
//     event: 'focus' 
// });

$(function(){
  $('.row').last().remove();
})
</script>