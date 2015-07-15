
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





function checkall(){	
	
$ageyear=$("#ageyear").val();
$agemonth=$("#agemonth").val();
$ageday=$("#ageday").val();
$marrystatus=$("#marrystatus").val();

$height=$("#height").val();

if(($ageyear!='')&&($agemonth!='')&&($ageday!=''))&&($education!='')&&($height!='')){
	return true;
}
	alert("请填好完整信息");
return false;

}

//点击更换注册验证码
function refeshCode(){
    document.getElementById('getCode').src = getCode.src+'/rand/'+Math.random();
}


function checkOldPass() {
    var oldPass = $("#password");
	var old= $("#password").val();
    if(old.length == 0){
        $('#doldpassword').html('<img src="'+__public__+'/images/check_error.jpg" />旧密码不能为空');
        return false;
    }
	/*var data = 'oldpass=old';
	 myAjax('__URL__/checkoldpass','POST','text',data,function(data){
	 if(data=='true'){
		$('#doldpassword').html(''); 
		 return true;}else{
			 $('#doldpassword').html(''); 
			 $('#doldpassword').html('旧密码错误');
			 return false;}
	 },false);*/
   
}

function checkNewPass() {
    var newPass = $("#newpassword");
    if(newPass.val().length == 0){
        $('#dnewpassword').html('<img src="'+__public__+'/images/check_error.jpg" />请输入新密码');
        return false;
		
    }else if((newPass.val().length < 6)||(newPass.val().match(/^[\@A-Za-z0-9\!\#\$\%\^\&\*\.\~]{6,16}$/) == null)) {
        $('#dnewpassword').html('<img src="'+__public__+'/images/check_error.jpg" />新密码长度必须为6-16个字符');
        return false;
    }
    $('#dnewpassword').html('');
    return true;
}

function checkConfirmPass() {
    var newPass = $("#newpassword");
    var confirmPass = $("#confirmpassword");
   
    if((confirmPass.val().length >=6) && (confirmPass.val() == newPass.val())) {
        $('#dconfirmpassword').html('');
        return true;
    }else{
        $('#dconfirmpassword').html('<img src="'+__public__+'/images/check_error.jpg" />确认新密码不正确');
        return false;
    }
}

function checkPass(){

    return checkOldPass() && checkNewPass() && checkConfirmPass();
}





