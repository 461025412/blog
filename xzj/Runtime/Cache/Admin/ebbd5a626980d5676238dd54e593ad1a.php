<?php if (!defined('THINK_PATH')) exit();?><div class="pageContent">
	<form method="post" action="/blog1/index.php/Admin/User/update/navTabId/博主信息/callbackType/closeCurrent" enctype="multipart/form-data"  class="pageForm required-validate" 
		onsubmit="return iframeCallback(this, navTabAjaxDone);"><?php  ?>
		<input type="hidden" name="id" value="<?php echo ($user['id']); ?>"/>
		<div class="pageFormContent" layoutH="60">
			<dl style="height:50px;">
				<dt>职业：</dt>
				<dd><input type="text"  style="width:100%" name="zhiye" value="<?php echo ($user["zhiye"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>爱好：</dt>
				<dd><input type="text"  style="width:100%" name="aihao" value="<?php echo ($user["aihao"]); ?>"/></dd>
			</dl>			
			<dl>
				<dt>E-Mail：</dt>
				<dd><input type="text"  style="width:100%" name="email" value="<?php echo ($user["email"]); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>籍贯：</dt>
				<dd>
					<select name="provinceid" id="provinceid">

              </select>
				</dd>
			</dl>
			<dl>
				<dt>联系电话：</dt>
				<dd><input type="text"  style="width:100%" name="phone" value="<?php echo ($user["phone"]); ?>"/></dd>
			</dl>
			
			
			<dl>
				<dt>网名：</dt>
				<dd><input type="text"  style="width:100%" name="wangming" value="<?php echo ($user["wangming"]); ?>"/></dd>
			</dl>
			
			<dl>
				<dt>喜欢的歌手：</dt>
				<dd><input type="text"  style="width:100%" name="singer" value="<?php echo ($user["singer"]); ?>"/></dd>
			</dl>
			<dl>
				<dt>喜欢的音乐：</dt>
				<dd><input type="text"  style="width:100%" name="music" value="<?php echo ($user["music"]); ?>"/></dd>
			</dl>	
			<dl>
				<dt>照片：</dt>
				<dd>
					<input type="file"  style="width:100%" name="pic" />
				</dd>
				<dd>
					<img width="100px" height="100px" src="/blog1/Public/Uploads/pic/<?php echo ($user["pic"]); ?>">
				</dd>
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
<script type="text/javascript">
function myAjax(url, type, dataType, data, callback, async){
    var asy = async ? async : '';
    $.ajax({
        url:url,
        type:type,
        dataType:dataType,
        data:data,
        async:asy,
        success:function(data){
            callback(data);
        },
    });

}

                $(function(){
                    //加载注册城市街道信息
                    var upid = 0;
                    var area=<?php  echo $area?>;
                    myAjax('/blog1/index.php/Admin/User/addrAjax', 'get', 'json', upid, function(data){
                        var $options = "<option >=请选择=</option>";
                        $.each(data, function(i){
                        	if(data[i]['id']==area['0']){var flag="selected='selected'"}
                            $options += "<option "+flag+" value='"+data[i]['id']+"'>"+data[i]['name']+"</option>";    
                        })
                        $("#provinceid").append($options);        
                    });

                    $("#provinceid").change(function(){
                        var sel = $(this);
                        var id = sel.val();
                        sel.nextAll().remove();
                        if(id>0){
                            //调用自定义ajax函数
                            myAjax('/blog1/index.php/Admin/User/addrAjax', 'get', 'json', {upid:id}, function(data){
                                if(data == null) {
                                    return;
                                }
                                var $options = "<select name='cityid' id='cityid'>";
                                    $options += "<option>=请选择=</option>";
                                $.each(data, function(i){
                                	if(data[i]['id']==area['1']){var flag="selected='selected'"}
                                    $options += "<option "+flag+" value='"+data[i]['id']+"'>"+data[i]['name']+"</option>";    
                                })
                                $options += "</select>";
                                sel.after($options);
                            });
                        }   
                    })
                });
                $("#provinceid").change();
            </script>