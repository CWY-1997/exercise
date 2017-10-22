<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新相册图片</title>
<link rel="stylesheet" href="css/news_show.css" type="text/css" />
<script src="js/time.js"></script>
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
        <img src="images/15.jpg" alt="加载失败" width="210" height="200"/>
        <div class="tex"></div>
   	    </div>
    	<div class="right">
        	<label>当前位置：首页>最新图片</label>
            <form method="post" action=" ">
            <ul style="margin:10px 20px; 0px; 0px;">
					<?php 
						include('album_anage_do.php');
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