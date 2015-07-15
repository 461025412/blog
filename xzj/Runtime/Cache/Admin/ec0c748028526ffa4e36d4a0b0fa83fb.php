<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/blog1/index.php/Admin/Diary/update/navTabId/日志列表/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($find['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl style="height:50px;">
				<dt>标题：</dt>
				<dd><input type="text"  style="width:100%" name="title" value="<?php echo ($find["title"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>类型：</dt>
				<dd><select name='type'>
				<option <?php if($find['type'] == 0): ?>selected<?php endif; ?> value="0">请选择</option>
				<option value="1" <?php if($find['type'] == 1): ?>selected<?php endif; ?> >个人日志</option><option value="2" <?php if($find['type'] == 2): ?>selected<?php endif; ?> >经典语录</option>
				<option value="3" <?php if($find['type'] == 3): ?>selected<?php endif; ?> >程序人生</option><option value="4" <?php if($find['type'] == 4): ?>selected<?php endif; ?> >人生感悟</option>
				</select></dd>
			</dl>			
			<dl>
				<dt>作者：</dt>
				<dd><input type="text"  style="width:100%" name="auth" value="<?php echo ($find["auth"]); ?>"/></dd>
			</dl>
			
			
			<dl>
				<dt>头像：</dt>
				<dd><input type="file"  style="width:100%" name="pic" width="100px" height="100px"/></dd>
				<dd><img src="/blog1/Public/Uploads/pic/<?php echo ($find["photo"]); ?>"</dd>
			</dl>
			<dl>
				<dt><label>内容：</label></dt>
				<dt>
				<textarea  class="editor" rows="1" tabindex="1" name="content" id="content" style="width:300px; height:300px;"><?php echo ((isset($find["content"]) && ($find["content"] !== ""))?($find["content"]):'请在这里写日记...'); ?></textarea>

				</dt>
	
				
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