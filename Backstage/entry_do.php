<?php
    include "fileupload.class.php";		 //包含一个文件上传类中的上传类
    include "db/dbconnection/DBManager.class.php";	//数据库类
    $up = new fileupload;
    //设置属性(上传的位置， 大小， 类型， 名是是否要随机生成)
    $up -> set("path", "./news/img1/");
    $up -> set("maxsize", 2000000);
    $up -> set("allowtype", array("jpg"));
    $up -> set("israndname", true);
    //使用对象中的upload方法， 就可以上传文件， 方法需要传一个上传表单的名子 pic, 如果成功返回true, 失败返回false
    if($up -> upload("pic")) {
        //获取上传后文件名子
       //var_dump($up->getFileName());
       //echo $up->getFileName();
 			echo "<script language='javascript'>
					parent.window.location.href='news_show.php';</script>"; 
    } else {
		  	echo "<script language='javascript'> alert('发布失败，请按要求发布！');
					parent.window.location.href='news_show.php';</script>";
    }
		$db=new DBManager();
		//$newsTime = $_POST['Time'];
		$newsTime = date("Y年m月d日");
		$newsTitle = $_POST['Title'];
		$catalog	=  "news/img1/";			//指定上传的文件目录
		$random  = $up->getFileName();		//生成新闻图片文件名		
		$fullPath  = $catalog.$random;		//拼接新闻图片上传的路径与生成新闻图片文件名	
		$newsContent = $_POST['editor1'];
	if($random!=""){	//判断是否获取到随机生成的文件名
	    $teachersql = "INSERT INTO news(t_time,title,p_path,content)
		values('$newsTime','$newsTitle','$fullPath','$newsContent')";
	    $db->insert($teachersql);
		
		 $db->dbclose();
}
?>