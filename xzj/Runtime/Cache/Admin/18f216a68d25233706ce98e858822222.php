<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/blog/index.php/Admin/User/update/navTabId/listuser/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, dialogAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($user['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>姓名</dt>
				<dd><input type="text"  style="width:100%" name="name" value="<?php echo ($user["name"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>性别：</dt>
				<dd>
					<select name="gender">
						<option value="1"<?php if($user['gender'] == 1): ?>selected<?php endif; ?>>男</option>
						<option value="2"<?php if($user['gender'] == 2): ?>selected<?php endif; ?>>女</option>
					</select>
				</dd>
			</dl>
			<dl>
				<dt>爱好：</dt>
				<dd>
					<input type="text"  style="width:100%" name="aihao" value="<?php echo ($user["aihao"]); ?>"/>
				</dd>
			</dl>
			
			<dl>
				<dt>职业：</dt>
				<dd>
					<input type="text"  style="width:100%" name="zhiye" value="<?php echo ($user["zhiye"]); ?>"/>
				</dd>
			</dl>
			<dl>
				<dt>现居</dt>
				<dd><input type="text"  style="width:100%" name="xianju" value="<?php echo ($user["xianju"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>喜欢的歌手</dt>
				<dd><input type="text"  style="width:100%" name="singer" value="<?php echo ($user["singer"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>喜欢的音乐</dt>
				<dd><input type="text"  style="width:100%" name="music" value="<?php echo ($user["music"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>希望</dt>
				<dd><input type="text"  style="width:100%" name="hope" value="<?php echo ($user["hope"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>自我介绍</dt>
				<dd><input type="text"  style="width:100%" name="introduce" value="<?php echo ($user["introduce"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>网名</dt>
				<dd><input type="text"  style="width:100%" name="wangming" value="<?php echo ($user["wangming"]); ?>"/></dd>
			</dl><dl>
				<dt>邮箱</dt>
				<dd><input type="text"  style="width:100%" name="email" value="<?php echo ($user["email"]); ?>"/></dd>
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