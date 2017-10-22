<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/news_show.css" type="text/css" />
<link rel="stylesheet" href="css/news_2.css" type="text/css" />
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
<script src="js/login/entry.js"></script>
<script src="js/time.js"></script>
<title>修改新闻</title>
</head>
<body>
<div class="box">
	<div class="banner">
    <h1 style="font-size:35px;color:#000000";><span class="sn">Turbo&nbsp;Snail—后台管理系统</span></h1>
    </div>
    <div class="menu">
    <span><label id="myclock" ></label><input type="button" value="退出" name="back" onclick=if(confirm("确定要退出吗"))location.href="../index.html" class="btnn" style="margin: 10px 80px 0px 0px;" width="100px;"> </span>
    </div>
    <div class="main">
    	<div class="left">
	        <ul>
        		<li ><a href="entry.php" >新闻发布</a></li>
		        <li ><a href="news_show.php">管理新闻</a></li>
		        <li ><a href="album/album_publish.html">照片发布</a></li>
		        <li ><a href="album/album_anage.php">相册管理</a></li>
	        </ul>
         	<img src="images/15.jpg" alt="loading" width="210" height="200"/>
        <div class="tex"></div>
   	   	</div>
    	<div class="t">
        	<label>当前位置:首页>修改新闻</label>
				<div class="pp">
					<?php
						$id = $_GET['id'];
					    include('db/dbconnection/DBManager.class.php');
						$db=new DBManager();
						 $sql_data = "SELECT * FROM news WHERE id =$id";
				   		 $res_contest = $db->getResult($sql_data);
				 		 $row = mysqli_fetch_array($res_contest);
			             echo '<div id="cke">
						    <form action="modify_do.php?id='.$row['id'].'" name="myForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
								<span style="font-size: 14px;"><b>新闻标题：</b></span><input type="text"  placeholder="输入新闻标题"   name="Title" id="title" value='.$row['title'].' class="in"/>
					    	    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
					    		<b style="font-size: 14px; margin-left: 16px;">新闻图片：</b><span style="font-size: 12px;">类型jpg、 适合大小1000*700像素 </span><input type="file" name="pic" class="in"><br>
								<textarea  id="TextArea1"  cols="20" rows="2" name="editor1" class="ckeditor">
								'.$row['content'].'
								</textarea>
						    	<p><input type="submit" name="submit" value="提交" style=" margin-right:450px; margin-top: 5px; width: 190px; font-weight: bold;"  class="btnn"/></p>	
						    </form>
				   		</div>';
			   		?>
	   			</div>
        </div>
        <div class="tex"></div> 
    </div>
    <div class="footer">
    	<span><label>©2017 Turbo Snail.All rights reserved.</label></span>
    </div>
</body>
</html>