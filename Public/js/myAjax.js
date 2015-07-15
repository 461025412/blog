/*
 * @params url 地址 指向类里面的方法，得到不同的数据
 * @params type 数据类型
 * @params dataType 以什么数据接收返回值
 * @params data 传输的数据 var data =     name1=value1&name2=value2...
 * @return callback返回值 data 使用回调函数 function(data){ 输出 }
 * @params async 是否异步，true为异步 false为同步 默认都为true 不给则使用默认值
 */

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

