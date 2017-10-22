

function validateForm()
{
  var x=document.forms["myForm"]["userName"].value;
  var d=document.forms["myForm"]["passWord"].value;

  if (x==null || x=="")
  {
    alert("账号不能为空");
    return false;
  }else if(d==null || d==""){
  	    alert("密码不能为空");
    return false;
   }
  }
