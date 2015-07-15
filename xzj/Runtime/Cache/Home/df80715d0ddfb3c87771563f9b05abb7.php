<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/blog/Public/css/v3.css" rel="stylesheet">
<link href="/blog/Public/css/base.css" rel="stylesheet">
<link href="/blog/Public/css/index.css" rel="stylesheet">
<link href="/blog/Public/css/media.css" rel="stylesheet">
<script type='text/javascript' src='/blog/Public/js/jquery-1.8.3.min.js'></script>
<script type='text/javascript' > var __module__="/blog/index.php/Home";
var __public__="/blog/Public";</script>
<script type='text/javascript' src='/blog/Public/js/checkReg.js'></script>
<script type='text/javascript' src='/blog/Public/js/myAjax.js'></script>

<script type='text/javascript' src='/blog/Public/js/promessage.js'></script>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  
    <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/blog/index.php/Home/Index/index" title="到主页"></a></div>
    <nav id="topnav"><a href="/blog/index.php/Home/Index/index">主页</a><a href="/blog/index.php/Home/User/index">个人资料</a><a href="/blog/index.php/Home/Diary/index">个人日志</a><a href="/blog/index.php/Home/Photo/index">相册</a><a href="/blog/index.php/Home/Liuyan/index">留言板</a></nav>
  </header>

  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
	<form method="post" action="/blog/index.php/Home/Guest/insert" name="register_form" onsubmit="return checkSubmit()" enctype="multipart/form-data" id="register_form">
        <div class="form_box">
          
          
		  <div class="reg_tips_center">账号信息 带*号必填</div>
          <div id="div_email" class="form_li">
            <label><font color="red">*</font> 昵　　称：</label>
            <input name="name" id="name" onblur="ajaxInfo('name')" class="w1" maxlength="16" type="text">  <span id="tip_name"></span>
			<br><font color="#999999">长度3-16个字符，1个汉字=2个字符
			<br>格式由26个字母，数字，汉字，下横线，中横线组成。</font>
		  </div>
          <div class="form_li">
            <label><font color="red">*</font> 登录密码：</label>
            <input name="password" id="password" onblur="checkPassWord()" class="w1" type="password"> <font id="tip_password" color="#999999">长度6-16个字符</font>
          </div>
          <div class="form_li">
            <label><font color="red">*</font> 确认密码：</label>
            <input name="confirmpassword" id="confirmpassword" onblur="checkConfirmPassWord()" class="w1" type="password" />
            <font id="tip_confirpassword" color="#999999"> 输入以上密码</font>
          </div>
          <div class="form_li">
            <label><font color="red">*</font> 常用邮箱：</label>
            <input name="email" id="email" class="w1" onblur="ajaxInfo('email')" type="text"> <font color="red">*</font> <span id="tip_email"><font color="#999999"> 用于登陆，认证，找回密码和会员信件提醒</font></span>
          </div>
		    <div class="form_li">
                <label><font color="red">*</font> 验&nbsp;证&nbsp;码&nbsp;：</label>
                <input id="checkcodes" name="verify" class="w2" maxlength="8" type="text" /><img id="getCode" onclick="refeshCode()" src="/blog/index.php/Home/Guest/getCode" style="position:relative;top:12px;" />
                <!-- /blog/index.php/Home/Guest/getCode -->
                
                 <div style="margin-top:10px;">
                <a href="javascript:void(0);" onclick="refeshCode()" id="refeshCode" > 换一张</a>
                
                
                <!-- document.getElementById('code').src='/blog/index.php/Home/Guest/getCode' -->
                <span id="tip_checkcodes"><font color="#999999">请输入验证码</font></span>
                <!--<span id="tip_checkcode"><?php echo ($verifyInfo); ?></span>-->
            </div>
			</div>
			<script type="text/javascript">
			</script>
    
		  <div class="reg_tips_center">基本信息 带*号必填</div>
          <div class="bitian">
            <div id="div_gender" class="form_li">
              <label><font color="red">*</font>  您的性别：</label>
              <input name="gender" id="gender" value="0" checked="checked" type="radio">男， 
              <input name="gender" id="gender" value="1" type="radio">女 
              <span id="dgender" class="f_red"></span> 
              <font color="#999999">(一旦选择不能修改)</font>
            </div>
            <div id="div_birthday" class="form_li">
              <label><font color="red">*</font> 出生日期：</label>
              <select name="ageyear" id="ageyear">
                <option selected="selected" value="">请选择</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option><option value="2013">2013</option>
				<option value="2012">2012</option><option value="2011">2011</option>
				<option value="2010">2010</option><option value="2009">2009</option>
				<option value="2008">2008</option><option value="2007">2007</option>
				<option value="2006">2006</option><option value="2005">2005</option>
				<option value="2004">2004</option><option value="2003">2003</option>
				<option value="2002">2002</option><option value="2001">2001</option>
				<option value="2000">2000</option><option value="1999">1999</option>
				<option value="1998">1998</option><option value="1997">1997</option>
                <option value="1996">1996</option><option value="1995">1995</option>
                <option value="1994">1994</option><option value="1993">1993</option>
                <option value="1992">1992</option><option value="1991">1991</option>
                <option value="1990">1990</option><option value="1989">1989</option>
                <option value="1988">1988</option><option value="1987">1987</option>
                <option value="1986">1986</option><option value="1985">1985</option>
                <option value="1984">1984</option><option value="1983">1983</option>
                <option value="1982">1982</option><option value="1981">1981</option>
                <option value="1980">1980</option><option value="1979">1979</option>
                <option value="1978">1978</option><option value="1977">1977</option>
                <option value="1976">1976</option><option value="1975">1975</option>
                <option value="1974">1974</option><option value="1973">1973</option>
                <option value="1972">1972</option><option value="1971">1971</option>
                <option value="1970">1970</option><option value="1969">1969</option>
                <option value="1968">1968</option><option value="1967">1967</option>
                <option value="1966">1966</option><option value="1965">1965</option>
                <option value="1964">1964</option><option value="1963">1963</option>
                <option value="1962">1962</option><option value="1961">1961</option>
                <option value="1960">1960</option><option value="1959">1959</option>
                <option value="1958">1958</option><option value="1957">1957</option>
                <option value="1956">1956</option><option value="1955">1955</option>
                <option value="1954">1954</option>
              </select>年
			  <select name="agemonth" id="agemonth">
                <option selected="selected" value="">请选择</option>
                <option value="1">1</option><option value="2">2</option>
                <option value="3">3</option><option value="4">4</option>
                <option value="5">5</option><option value="6">6</option>
                <option value="7">7</option><option value="8">8</option>
                <option value="9">9</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>
              </select>月
                <!--135781012 31 2 28 30 4 6 9 11--> 
			  <select name="ageday" id="ageday">
                <option selected="selected" value="">请选择</option>
                <option value="1">1</option><option value="2">2</option>
                <option value="3">3</option><option value="4">4</option>
                <option value="5">5</option><option value="6">6</option>
                <option value="7">7</option><option value="8">8</option>
                <option value="9">9</option><option value="10">10</option>
                <option value="11">11</option><option value="12">12</option>
                <option value="13">13</option><option value="14">14</option>
                <option value="15">15</option><option value="16">16</option>
                <option value="17">17</option><option value="18">18</option>
                <option value="19">19</option><option value="20">20</option>
                <option value="21">21</option><option value="22">22</option>
                <option value="23">23</option><option value="24">24</option>
                <option value="25">25</option><option value="26">26</option>
                <option value="27">27</option><option value="28">28</option>
                <option value="29">29</option><option value="30">30</option>
                <option value="31">31</option>
              </select>日
			  <font color="#999999">(一旦选择不能修改)</font>
			</div>
           
            <div id="div_height" class="form_li">
              <label><font color="red">*</font>  身　　高：</label>
              <select name="height" id="height">
                  <option value="">=请选择=</option>
                  <option value="130">130</option>
                  <option value="131">131</option>
                  <option value="132">132</option>
                  <option value="133">133</option>
                  <option value="134">134</option>
                  <option value="135">135</option>
                  <option value="136">136</option>
                  <option value="137">137</option>
                  <option value="138">138</option>
                  <option value="139">139</option>
                  <option value="140">140</option>
                  <option value="141">141</option>
                  <option value="142">142</option>
                  <option value="143">143</option>
                  <option value="144">144</option>
                  <option value="145">145</option>
                  <option value="146">146</option>
                  <option value="147">147</option>
                  <option value="148">148</option>
                  <option value="149">149</option>
                  <option value="150">150</option>
                  <option value="151">151</option>
                  <option value="152">152</option>
                  <option value="153">153</option>
                  <option value="154">154</option>
                  <option value="155">155</option>
                  <option value="156">156</option>
                  <option value="157">157</option>
                  <option value="158">158</option>
                  <option value="159">159</option>
                  <option value="160" selected="selected">160</option>
                  <option value="161">161</option>
                  <option value="162">162</option>
                  <option value="163">163</option>
                  <option value="164">164</option>
                  <option value="165">165</option>
                  <option value="166">166</option><option value="167">167</option><option value="168">168</option><option value="169">169</option><option value="170">170</option><option value="171">171</option><option value="172">172</option><option value="173">173</option><option value="174">174</option><option value="175">175</option><option value="176">176</option><option value="177">177</option><option value="178">178</option><option value="179">179</option><option value="180">180</option><option value="181">181</option><option value="182">182</option><option value="183">183</option><option value="184">184</option><option value="185">185</option><option value="186">186</option><option value="187">187</option><option value="188">188</option><option value="189">189</option><option value="190">190</option><option value="191">191</option><option value="192">192</option><option value="193">193</option><option value="194">194</option><option value="195">195</option><option value="196">196</option><option value="197">197</option><option value="198">198</option><option value="199">199</option><option value="200">200</option>
              </select> CM <font color="#999999">(一旦选择不能修改)</font>
            </div>
            
            
									
		    			
			
			
          </div>
          <div class="div_smallnav_content_hover">
	  <div class="item_title item_margin"><p>上传相册</p><span class="shadow"></span></div>
	  
	  
	  <table class="user-table table-margin lh35" border="0" cellpadding="0" cellspacing="0" width="98%">
		<tbody><tr>
		  <td colspan="2"><div class="nav-tips">请上传您的单人真实照片，要求五官清晰。 </div></td>
		</tr>
		
		<!-- 选择照片 -->
		<tr>
		  <td class="lblock">选择照片 <span class="f_red">*</span></td>
		  <td class="rblock"><input name="pic" class="filePrew" id="sf_upfile" type="file">
			<span id="dsf_upfile" class="f_red"></span></td>
		</tr>
		
		
		
		
	  </tbody></table>
	 
	</div>
          <div class="form_li">
            <div class="serve_text">
              <input onclick="checkAgree()" name="agree" id="agree" value="true" type="checkbox">
              <label>
                    <a href="http://www.yyw1314.com/index.php?c=about&amp;a=detail&amp;id=8" target="_blank">注册条款</a> 和 
                    <a href="http://www.yyw1314.com/index.php?c=about&amp;a=detail&amp;id=7" target="_blank">隐私政策</a>               </label>
                
            </div>
            <div class="tijiao"> 
			  <a class="btn_a1" id="a_register_submit" style="pointer:hand;">
              <!-- <button class="button_register" style="pointer:hand;" type="button" onclick="return checkreg();">免费注册</button> -->

                <input type="submit" value="注册" style="width:113px;border:none;background:url(/blog/Public/images/001.jpg) no-repeat;" />
              </a> 
          </div>

          
          
          </div>
        </div>
      </form>
     </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于杨青</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：<?php echo ($user['wangming']); ?></p>
      <p>职业：<?php echo ($user['zhiye']); ?> </p>
      <p>籍贯：<?php echo ($user['jiguan']); ?></p>
      <p>电话：<?php echo ($user['phone']); ?></p>
      <p>邮箱：<?php echo ($user['email']); ?></p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
	  <?php if(is_array($newdiary)): $i = 0; $__LIST__ = $newdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home\Diary\single\id\".$newdiary['id']><?php echo ($newdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
      <h2>
	  
        <p class="tj_t2">推荐文章</p>
		
      </h2>
      <ul>
	  <?php if(is_array($hotdiary)): $i = 0; $__LIST__ = $hotdiary;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hotdiary): $mod = ($i % 2 );++$i;?><li><a href="/blog/index.php/Home\Diary\single\id\".$hotdiary['id']><?php echo ($hotdiary['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
 <script type="text/javascript">

            function ajaxInfo(item){
                
                if(item == "name"){
                    var notice = '昵称';
                    var verify = $("#"+item).val().match(/^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[a-zA-Z0-9]){3,16}$/);
					//var verify = $("#"+item).val().match(/^[\w-_]{3,16}$/);
                }else{
                    var notice = '邮箱';
                    var verify = $("#"+item).val().match(/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,3}$/);
                }
                
                if($("#"+item).val().length == 0){
                    $("#tip_"+item).css('color', 'red').html(notice+"不能为空!");
                    return false;
                }else if(verify == null){
                    $("#tip_"+item).css('color', 'red').html(notice+"格式不正确");
                    return false;            
                }
                var result;
                //调用自定义ajax函数
                var data = 'inputName='+item+'&inputValue='+$("#"+item).val();
                myAjax("/blog/index.php/Home/Guest/unique", 'get', 'text', data, function(data){
                    if(data != 'false'){
						
                        $("#tip_"+item).css('color', 'green').html("该"+notice+"可以使用");
                        result = true;
                    }else{
						
                        $("#tip_"+item).css('color', 'red').html("该"+notice+"已被注册");
                        result = true;
                    }
                }, false);
				
                return result;

            }
function checkConfirmPassWord() {
    //验证确认密码
    var confirmPassWord = $("#confirmpassword").val();
    if( ( confirmPassWord.length >= 6 ) && ( confirmPassWord == $("#password").val() )){
        $("#tip_confirpassword").css('color', 'green').html('两次密码一致!');
        return true;
    }
    $("#tip_confirpassword").css('color', 'red').html('两次密码不一致!');
    return false;

}
function checkVerify() {
	var inputCode = $('#checkcodes');
	var noticeInfo = $('#tip_checkcodes');
	
	var ss;
	var data = "ver="+inputCode.val();
	myAjax(__module__+'/Guest/verify', 'post', 'text', data, function(data){
		if(data=='true'){
			noticeInfo.html("<img src='"+__public__+"/images/ok.gif' />");
			ss = true;
			
			
		}else{
			
			noticeInfo.html("<font color='red'>验证码不正确!</font>");
			ss = false;
		}
	}, false);
	
	
	return ss;
}
function refeshCode(){
    document.getElementById('getCode').src = getCode.src+'/rand/'+Math.random();
}
          function checkPassWord() {
    //验证密码
	
    if($("#password").val().length == 0){
        $("#tip_password").css('color', 'red').html('密码不能为空!');
        return false;
    }else if($("#password").val().match(/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,16}$/) == null){
        $("#tip_password").css('color', 'red').html('密码格式不正确!');
        return false;
    }
    $("#tip_password").css('color', 'green').html('密码合格!');
    return true;
}
function checkAgree() {
    //是否同意验证
    $("#agree").siblings('label').nextAll().remove();
    if( $("#agree").attr('checked') ){
        $("#agree").siblings('label').after("<br/><span style='color:green'>您已同意!</span>");
        return true;
    }
    $("#agree").siblings('label').after("<br/><span style='color:red'>如注册 请同意!</span>");
    return false;
}
function checkall(){	
$gender=$("#gender").val();
$ageyear=$("#ageyear").val();
$agemonth=$("#ageyear").val();
$agemonth=$("#ageday").val();
if($ageyear!=''){
	if($agemonth!=''){
		if($ageday!=''){
			if($gender!=''){
	return true;
			}
	};}
}
	alert("请填好完整信息");
return false;

}

			
		
function checkSubmit() {
	
	
    //注册提交验证
  return checkall()&&checkAgree()&&checkVerify()&&checkPassWord()&&checkConfirmPassWord();}


        </script>
</body>
</html>