<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>查看新闻</title>
<style>
	.ter{ margin: auto; width: 480px; height: 380px;}
	.ter img { width: 480px; height: 400px;}
	.ter h2 {text-align:center;}
	.ter p {text-indent:2em; line-height: 30px;}
	.ter label { margin-left:355px;}
</style>
</head>
    <body> 
    	<div class="ter">
    				<?php
						$id = $_GET['id'];
					    include('db/dbconnection/DBManager.class.php');
						$db=new DBManager();
						 $sql_data = "SELECT * FROM news WHERE id =$id";
				   		 $res_contest = $db->getResult($sql_data);
				 		 $row = mysqli_fetch_array($res_contest);
	    				echo'<h2>'.$row['title'].'</h2>
	    				<img src="'.$row['p_path'].'" alt="图片加载失败"/>
	    				<p>'.$row['content'].'</p>
	    				<label>'.$row['t_time'].'</label>';
    				?>
    	</div>
    </body>
</html>