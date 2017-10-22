<?php
	include "fileupload.class.php";
	include "db/dbconnection/DBManager.class.php";
	$db=new DBManager();	//数据库对象
    $up = new fileupload;
    $up -> set("path", "./news/img1/");
    $up -> set("maxsize", 2000000);
    $up -> set("allowtype", array("jpg"));
    $up -> set("israndname", true);
    if($up -> upload("pic")) {
        echo "<script type='text/javascript'>
					parent.window.location.href='news_show.php';</script>";
    } else {
        echo "<script language='javascript'> alert('发布失败，请按要求发布！');
					parent.window.location.href='news_show.php';</script>";
    }

      //获取新闻ID
    	$newsId = $_GET['id'];

      //时间的获取
		//$newsTime= $_POST['Time'];
	  	$newsTime = date("Y年m月d日");
	  //获取标题
		$newsTitle = $_POST['Title'];
	//获取图片随机生成文件名与拼接路径
		$catalog	=  "news/img1/";			//指定上传的文件目录
       	$random = $up->getFileName();	//随机生成的文件名
		$fullPath  = $catalog.$random;
    //获取内容
		$newsContent = $_POST['editor1'];
		if($random!=""){	//判断是否获取到随机生成的文件名
		    $teachersql = "update news set t_time='$newsTime',title='$newsTitle',p_path='$fullPath',content='$newsContent' where id='$newsId'";
		    $db->update($teachersql);
			$db->dbclose();

		}
	?>
