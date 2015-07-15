<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/blog/Public/css/adminbackstage.css">
</head>

<body>
<div class="details">
                    <div class="details_operation clearfix">
                        <div class="bui_select">
                            <input type="button" value="添&nbsp;&nbsp;加" class="add"  onclick="addUser()">
                        </div>
                            
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
							    <th width="5%">id</th>
                                <th width="10%">回复者名字</th>
                                <th width="10%">被回复者名字</th>
                                <th width="10%">回复内容</th>
                                <th width="20%">回复时间</th>
								
								
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($liuyan)): $i = 0; $__LIST__ = $liuyan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$liuyan): $mod = ($i % 2 );++$i;?><tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><input type="checkbox" id="c1" class="check"><label for="c1" class="label"><?php echo ($liuyan['id']); ?></label></td>
                                <td><?php echo ($liuyan['huifuming']); ?></td>
                               
							   <td><?php echo ($liuyan['username']); ?></td>
							   <td><?php echo ($liuyan['huifu']); ?></td>
                               <td><?php echo (date("Y-m-d H:i:s",$liuyan['time'] )); ?></td>
                                <td align="center"><input type="button" value="删除" class="btn"  onclick="delUser(<?php echo ($photo['id']); ?>)"></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
							<tr><td colspan='5'><?php echo ($show); ?></td></tr>
                        </tbody>
                    </table>
                </div>
</body>
<script type="text/javascript">

	function addUser(){ 
		window.location="/blog/index.php/Admin/Liuyan/add";	
	}
	function editUser(id){ 
			window.location="/blog/index.php/Admin/Liuyan/edit/id/"+id;
	} 
	function delUser(id){ 
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){ 
				window.location="/blog/index.php/Admin/Liuyan/del/id/"+id;
				 	}
	} 
</script>
</html>