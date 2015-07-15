<?php if (!defined('THINK_PATH')) exit();?>
<form id="pagerForm" action="/blog1/index.php/Admin/Photo/index" method="post">
	<input type="hidden" name="pageNum" value="<?php echo ((isset($currentPage) && ($currentPage !== ""))?($currentPage):'1'); ?>" />
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
	<input type="hidden" name="_sort" value="<?php echo ($_REQUEST['_sort']); ?>"/>
</form>
<div class="pageHeader">
	<form rel="pagerForm" onsubmit="return navTabSearch(this);" method="post">
	<input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>" /><!--每页显示多少条-->
	<div class="searchBar">
		<table class="searchContent">
			<tr>
				<td>
					<b>搜索</b> &nbsp; 昵称/用户名：<input type="text" name="username" value="<?php echo ($_POST['username']); ?>" /> 
				</td>
				<td>
					<div class="buttonActive"><div class="buttonContent"><button type="submit">检索</button></div></div>
				</td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="pageContent">
	<div class="panelBar">
		<ul class="toolBar">
			<li><a class="delete" href="/blog1/index.php/Admin/Photo/del/navTabId/图片列表" target="selectedTodo" postType="string" rel="id" title="确定要删除吗?"><span>删除</span></a></li>
			<li><a class="edit" href="/blog1/index.php/Admin/Photo/edit/id/<?php echo (C("TMPL_L_DELIM")); ?>item_id<?php echo (C("TMPL_R_DELIM")); ?>"  width="550" height="380" target="navTab"><span>修改</span></a></li>
			<li class="line">line</li>
			<li><a class="icon"  href="javascript:navTabPageBreak()"><span>刷新</span></a></li>
			<!--<li><a class="icon" href="demo/common/dwz-team.xls" target="dwzExport" targetType="navTab" title="实要导出这些记录吗?"><span>导出EXCEL</span></a></li>-->
		</ul>
	</div>
	
	<table class="table" width="100%" layoutH="112">
		<thead>
			<tr>
			<th width="5%"><input type="checkbox" group="id" class="checkboxCtrl"></th>
				<th width="5%">id</th>
				<th width="5%" orderField="username" <?php if($_REQUEST['_order']== 'username'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>图片名</th>
				<th width="5%">图片</th>
				<th width="5%">图片描述</th>
				<th width="5%" orderField="loginviews" <?php if($_REQUEST['_order']== 'loginviews'): ?>class="<?php echo ($_REQUEST['_sort']); ?>"<?php endif; ?>>浏览量</th>
				<th width="5%">发表时间</th>
				
				
				
			</tr>
		</thead>
		<tbody>
			<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr height="21px" target="item_id" rel="<?php echo ($vo["id"]); ?>">
				<td><input name="id" value="<?php echo ($vo["id"]); ?>" type="checkbox"></td>
					<td><?php echo ($vo['id']); ?></td>
					<td><?php echo ($vo['name']); ?></td>
					<td><img  src="/blog1/Public/Uploads/pic/<?php echo ($vo['url']); ?>"  width="40px" height="40px"></td>
					<td><?php echo ($vo['miaoshu']); ?></td>
					<td><?php echo ($vo['view']); ?></td>
					<td><?php echo (date("Y-m-d",$vo['time'])); ?></td>

				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table>
	<div class="panelBar">
        
		<div class="pages">
			<span>显示</span>
			<select class="combox" name="numPerPage" onchange="navTabPageBreak(<?php echo (C("TMPL_L_DELIM")); ?>numPerPage:this.value<?php echo (C("TMPL_R_DELIM")); ?>)">
				<option value="10" <?php if($numPerPage == 10): ?>selected<?php endif; ?>>10</option>
				<option value="15" <?php if($numPerPage == 15): ?>selected<?php endif; ?>>15</option>
				<option value="20" <?php if($numPerPage == 20): ?>selected<?php endif; ?>>20</option>
				<option value="25" <?php if($numPerPage == 25): ?>selected<?php endif; ?>>25</option>
				<option value="30" <?php if($numPerPage == 30): ?>selected<?php endif; ?>>30</option>
			</select>
			<span>共<?php echo ($totalCount); ?>条</span>
		</div>
        <div style="line-heigth:20px;">
            
        </div>
		<div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
	</div>
</div>