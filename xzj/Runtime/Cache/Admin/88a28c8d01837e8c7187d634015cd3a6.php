<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/blog1/index.php/Admin/Guest/update/navTabId/用户列表/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($user['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl style="height:50px;">
				<dt>用户名：</dt>
				<dd><input type="text"  style="width:100%" name="zhiye" value="<?php echo ($user["name"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>性别：</dt>
				<dd><select name='gender'>
				<option <?php if($user["gender"] == 0): ?>selected<?php endif; ?> value="0">请选择</option>
				<option value="1" <?php if($user["gender"] == 1): ?>selected<?php endif; ?> >男</option><option value="1" <?php if($user["gender"] == 2): ?>selected<?php endif; ?> >女</option>
				</select></dd>
			</dl>			
			<dl>
				<dt>E-Mail：</dt>
				<dd><input type="text"  style="width:100%" name="email" value="<?php echo ($user["email"]); ?>"/></dd>
			</dl>
			
			
			<dl>
				<dt>头像：</dt>
				<dd><input type="file"  style="width:100%" name="pic" width="100px" height="100px"/></dd>
				<dd><img src="/blog1/Public/Uploads/pic/<?php echo ($user["bigpic"]); ?>"</dd>
			</dl>
			<dl>
				<dt><label>生日：</label></dt>
				<dd>
<input class="date  readonly " type="text" readonly="true" name="date1" value="<?php echo ($user["shengri"]); ?>">
<a class="inputDateButton" href="javascript:;">选择</a></dd>
				
	
				
			</dl>
			
		
			
			
			
			<!--<th width="">ID</th>
				<th width="">昵称/用户名</th>
				<th width="">E-Mail</th>
				<th width="">积分</th>
				<th width="">头像</th>
				<th width="">状态</th>
                <th width="">征友状态</th>
				<th width="">登陆次数</th>
				<th width="">登陆时间</th>
				<th width="">注册时间</th>
				<th width="">操作</th>
				-->
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
	
</div>
<script type="text/javascript" src="/blog1/Public/js/jquery.date_input.pack.js"></script>
<script>
$(function(){
	//日历调用函数
	$('.date_picker').date_input();
})
</script>