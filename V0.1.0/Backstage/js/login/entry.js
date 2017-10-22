
function validateForm()
{
  
  var d=document.forms["myForm"]["title"].value;
  var c=document.forms["myForm"]["pic"].value;

	if(d==null || d==""){
  	    alert("请输入新闻标题");
  	    document.forms["myForm"]["title"].focus();
    return false;
  }else if(c==null || c==""){
  	  	    alert("请上传新闻图片");
    return false;
  }else if (CKEDITOR.instances.TextArea1.getData() == '') {
        alert('请输入新闻内容！');
        CKEDITOR.instances.TextArea1.focus();
        return false;
   }
  }
  