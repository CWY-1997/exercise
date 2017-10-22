window.onload=show;
function show(){
	
	var array=new Array("1234567890","abcdefghijklmnopqrstuvwsyz","ABCDEFGHIJKLMNOPQRSTUVWSYZ");
	
	var coding="";
	
	for(var i=0;i<4;i++){	//循环产生四个数的验证
		var index=Math.floor(Math.random()*3);	//产生一个0~3的数,并且floor（）把小数点后的数凑去掉了
		coding += array[index].charAt(Math.floor(Math.random() * array[index].length));	
														//array[index]得到数组下标去取对应的值、charATt()得到位置
		var code =document.getElementById("code");
		code.value=coding;
		}
        document.getElementById("code").style.letterSpacing="4px";
	}

function validateForm()
{
  var x=document.forms["myForm"]["userName"].value;
  var d=document.forms["myForm"]["passWord"].value;
  var Captcha=document.getElementById("Captcha").value;
  var coding=document.getElementById("code").value; 
  if (x==null || x=="")
  {
    alert("账号不能为空");
    return false;
    show();
  }
  else 
  if(d==null || d==""){
  	    alert("密码不能为空");
  	    show();
    return false;
  }
  if(Captcha.length==0){
       alert("请输入验证码");
       var Captcha=document.getElementById("Captcha").focus();
	   show();
	   return false;
     }
	
   if(Captcha.toLowerCase()!=coding.toLowerCase()){
		alert("验证码有误，请重新输入");
		show();
		return false;
		
	}else {
		return true;
	}
}