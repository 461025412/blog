<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/blog1/index.php/Admin/Photo/add/navTabId/图片列表/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($vo['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl >
				<dt>图片：</dt>
				<dd><input type="file"  style="width:100%" name="pic" width="100px" height="100px"/></dd>
				
				
			</dl>
			<dl style="height:50px;">
				<dt>图片名：</dt>
				<dd><input type="text"  style="width:100%" name="name" value="<?php echo ($vo["name"]); ?>"/></dd>
			</dl>
		
			<dl style="margin-left:200px;">
				<dt>描述：</dt>
				<dt><textarea class="editor" name="miaoshu" ><?php echo ($vo["miaoshu"]); ?></textarea></dt>
			</dl>	
			<dl style="margin-left:200px;">
				
				<dt><a href="/blog1/index.php/Admin/Photo/download/file/5f5d51b4689668ce7f006f47bbf5cdad.mp3" >下载文件</a></dt>
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