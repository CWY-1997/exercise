<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>相片发布</title>
<link rel="stylesheet" href="../css/news_show.css" type="text/css" />
<script src="../js/time.js"></script>
<style>
	.biao{ width: 200px; height: 40px; margin-bottom: 10px;}
	.wen{ font-size: 14px; font-weight: bold;}
	.butw{ width: 180px; height: 35px; 	background-color: #E8F5FE; margin-left: 330px;
			font-weight: bold; font-size: 16px;}
	}
</style>
</head>
<body>
<div class="box">
	<div class="banner">
    <h1 style="font-size:35px;color:#000000";><span class="sn">Turbo&nbsp;Snail—后台管理系统</span></h1>
    </div>
    <div class="menu">
    <span><label id="myclock" ></label><input type="button" value="退出" name="back" onclick=if(confirm("确定要删除吗"))location.href="../../index.html" class="btnn" style="margin: 10px 80px 0px 0px;" width="100px;"> </span>
    </div>
    <div class="main">
    	<div class="left">
        <ul>
        		<li ><a href="../entry.php" >新闻发布</a></li>
		        <li ><a href="../news_show.php">管理新闻</a></li>
		        <li ><a href="album_publish.html">照片发布</a></li>
		        <li ><a href="album_anage.php">相册管理</a></li>
        </ul>
         <img src="../images/15.jpg" alt="加载失败" width="210" height="200"/>
         <div class="tex"></div>
   	    </div>
    	<div class="right">
        	<label>当前位置：首页>相片发布</label>
            <ul style="margin:10px 20px; 0px; 0px;">
				<?php
					$y = $_GET['id'];	//获取到用户需要上传照片的张数	3
					$u = $_GET['id1'];
					//echo $u;
					for($i=0; $i<$y; $i++){		//遍历输出<input>个数	
						echo '<form action="albumUpload_do.php?id='.$u.'" name="myForm" method="post" enctype="multipart/form-data">
							<span style="font-size: 12px;"><span class="wen">图片上传 ：</span>类型jpg、 适合大小1000*700像素</span><input type="file" name="pic[]" class="in"><span class="wen">图片标题 ：</span><input type="text" placeholder="请输入此张图片的标题"  name="'.$i.'" class="biao"><br>';
						}	
						echo '<input type="submit" name="submit" value="提交" class="butw" /></form>';
				?>
			<div class="tex"></div>
            </ul>
            </form>
        </div>
        <div class="tex"></div> 
    </div>
    <div class="tex"></div> 
    <div class="footer">
    	<span>©2017 Turbo Snail.All rights reserved.</span>
    </div>
</body>
</html>