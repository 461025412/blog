window.onload=function(){
     var i=0;
    waterfall('main','pin');
   
   
    
    window.onscroll=function(){
        if(checkscrollside()){
            var oParent = document.getElementById('main');
            for(;i<dataInt.data.length;i++){
                var oPin=document.createElement('div'); 
                oPin.className='pin';                  
                oParent.appendChild(oPin);              
                var oBox=document.createElement('div');
                oBox.className='box';
				//var a=document.createElement('a');
                oPin.appendChild(oBox);
                var oImg=document.createElement('img');
                oImg.src=__public__+'/images/'+dataInt.data[i].src;
				
				var b=document.createElement('span');
				b.innerHTML='浏览量('+dataInt.data[i].view+')';
				var c=document.createElement('a');
				c.innerHTML='看大图';
				c.href=__module__+'/Photo/single/id/'+dataInt.data[i].id;

				//a.href=__module__+'/Photo/single/id/'.dataInt.data[i].id
				//a.title=dataInt.data[i].comment;
				//a.className='xuanzhuan';
				oBox.appendChild(oImg);
				
				oBox.appendChild(b);
				oBox.appendChild(c);
               // a.appendChild(oImg);
            }
            waterfall('main','pin');
        };
    }
}


function waterfall(parent,pin){
    var oParent=document.getElementById(parent);
    var aPin=getClassObj(oParent,pin);
    var iPinW=aPin[0].offsetWidth;
    var num=Math.floor(760/iPinW);
    oParent.style.cssText='width:'+iPinW*num+'px;ma rgin:0 auto;';

    var pinHArr=[];
    for(var i=0;i<aPin.length;i++){
        var pinH=aPin[i].offsetHeight;
        if(i<num){
            pinHArr[i]=pinH; 
        }else{
            var minH=Math.min.apply(null,pinHArr);
            var minHIndex=getminHIndex(pinHArr,minH);
            aPin[i].style.position='absolute';
            aPin[i].style.top=minH+'px';
            aPin[i].style.left=aPin[minHIndex].offsetLeft+'px';
           
            pinHArr[minHIndex]+=aPin[i].offsetHeight;
        }
    }
}


function getClassObj(parent,className){
    var obj=parent.getElementsByTagName('*');
    var pinS=[];
    for (var i=0;i<obj.length;i++) {
        if (obj[i].className==className){
            pinS.push(obj[i]);
        }
    };
    return pinS;
}

function getminHIndex(arr,minH){
    for(var i in arr){
        if(arr[i]==minH){
            return i;
        }
    }
}


function checkscrollside(){
    var oParent=document.getElementById('main');
    var aPin=getClassObj(oParent,'pin');
    var lastPinH=aPin[aPin.length-1].offsetTop+Math.floor(aPin[aPin.length-1].offsetHeight/2);
    var scrollTop=document.documentElement.scrollTop||document.body.scrollTop;
    var documentH=document.documentElement.clientHeight;
    return (lastPinH<scrollTop+documentH)?true:false;
}