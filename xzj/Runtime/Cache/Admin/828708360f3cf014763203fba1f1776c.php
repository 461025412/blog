<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>-.-</title>
<link rel="stylesheet" href="/blog/Public/css/adminbackstage.css">
</head>

<body>
<div class="details">
                   
                    </div>
                    <!--表格-->
                    <table class="table" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th width="10%">博主姓名</th>
                                <th width="10%">博主性别</th>
                                <th width="10%">博主爱好</th>
                                <th width="10%">博主电话</th>
                                <th width="10%">博主邮箱</th>
								<th width="10%">博主现居</th>
								<th width="40%">博主自我介绍</th>
                            </tr>
                        </thead>
                        <tbody>
                      
                            <tr>
                                <!--这里的id和for里面的c1 需要循环出来-->
                                <td><?php echo ($bozhu['name']); ?></td>
                                <td><?php echo ($bozhu['gender']); ?></td>
                                <td><?php echo ($bozhu['aihao']); ?></td>
								<td><?php echo ($bozhu['phone']); ?></td>
								<td><?php echo ($bozhu['email']); ?></td>
								<td><?php echo ($bozhu['xianju']); ?></td>
								<td><?php echo ($bozhu['introduce']); ?></td>
                                
                                
                            </tr>
                            
							
                        </tbody>
                    </table>
                </div>
</body>
<script type="text/javascript">
   {literal}
	function addUser(){ {/literal}
		window.location="<?php echo ($smarty["const"]["/blog/index.php/Admin/Admin"]); ?>/adduser";	
		 {literal}}
	function editUser(id){ {/literal}
			window.location="<?php echo ($smarty["const"]["/blog/index.php/Admin/Admin"]); ?>/edituser/id/"+id;
			 {literal}}
	function delUser(id){ 
			if(window.confirm("您确定要删除吗？删除之后不可以恢复哦！！！")){ {/literal}
				window.location="<?php echo ($smarty["const"]["/blog/index.php/Admin/Admin"]); ?>/deleteuser/id/"+id;
				 {literal}	}
	} {/literal}
</script>
</html>