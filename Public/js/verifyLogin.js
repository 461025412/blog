//登录验证 封装函数
/*
 * @表单框id，账号框id 密码框id
 * @return boolean 通过true 不通过false
 */

function verifyLogin(form, name, pass) {
    var loginForm = document.getElementById(form);
    var loginName = document.getElementById(name);
    var loginPassWord = document.getElementById(pass);

    loginName.placeholder='用户名/邮箱';
    
    loginName.onfocus = function(){
        if(loginName.value == '用户名/邮箱'){
            loginName.value = '';
        }
    }
    loginName.onblur = function(){
        if(loginName.value == ''){
            loginName.value = '用户名/邮箱';
        }
    }
    loginForm.onsubmit = function(){
        if(loginName.value.length == 0 || loginName.value == '用户名/邮箱') {
            alert('登陆账号不能为空');
            return false;
        }
        if(loginPassWord.value.length == 0){
            alert('登陆密码不能为空');
            return false;
        }
        
        return true;

    }

}
//弹出层窗口
function login(){
    
    var notlogined = document.getElementById('notlogined');//是否登录     

    var jd_shadow = document.getElementById('jd_shadow');//层铺垫
    var jd_dialog = document.getElementById('jd_dialog');//主体框
    var jd_dialog_m = document.getElementById('jd_dialog_m');//内容
    var jd_dialog_m_h = document.getElementById('jd_dialog_m_h');//横条
    var jd_dialog_top = parseFloat(jd_dialog.style.top);
    var closeButton = document.getElementById('jd_dialog_m_h_r');//关闭按钮
    
    if(notlogined){
        
        jd_dialog.style.marginLeft = -parseFloat(jd_dialog_m.style.width)/2 + 'px';
        jd_shadow.style.display = 'block';
        jd_shadow.style.width = document.body.clientWidth + 'px';
        jd_shadow.style.height = document.body.clientHeight + 'px';
        jd_dialog.style.display = 'block';
        jd_dialog_m.style.display = 'block';

        window.onscroll = function(){
            var top = document.documentElement.scrollTop;
            //获取浏览器信息并判断是否是谷歌
            var info = navigator.userAgent.toLowerCase();
            if(info.indexOf("chrome")>0){
                //表示为谷歌浏览器
                top = document.body.scrollTop;
            }
            currentTop = jd_dialog_top + top;
            startMove(jd_dialog, {top:jd_dialog_top + top});

        }
        
    }else{
        jd_shadow.style.display = 'none';
        jd_dialog.style.display = 'none';
        jd_dialog_m.style.display = 'none';
    }

    //用户到这些页面关掉弹框
   
    //心情日记 微博可以查看吗(可以就不继承CommonController类，然后注视下面的链接)，还有别人的主页。评论跟回复同样需要检测
    var addrs = [
        'Home/User/index',
		'Home/User/view',
        'Home/HighSearch/index',
        'Home/HighSearch/doSearch/type/localopsex',
        'Home/UserList/index',
        'Home/DiaryShow/index',
        'Home/Diary/show',
        'Home/WeiBo/index',
        'Home/Notice/detail',
        'Home/Notice/lists',
        'Home/Login/register',
        'Home/Login/index',
        'Home/Login/login',
        'Home/Login/',
    ];
    for(var i=0; i<addrs.length; i++){
        if(location.href.match(addrs[i].replace(/\//g, '\\/') ) ){
            jd_shadow.style.display = 'none';
            jd_dialog.style.display = 'none';
            jd_dialog_m.style.display = 'none';
        }
    }
    
    //点击关闭按钮关闭弹框
    jd_shadow.onclick = closeButton.onclick = function(){
        jd_shadow.style.display = 'none';
        jd_dialog.style.display = 'none';
        jd_dialog_m.style.display = 'none';
    }
}

//点到需要登录的页面触发此函数，需要登陆的页面参照上面函数里的数组 addrs = [];
function loadLogin() {
    setTimeout('login()', 7000);
}
