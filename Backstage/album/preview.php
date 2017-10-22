<?php
/**
 * @creDate :2017/10/17
 * @function:相册管理页面点击查看，加载本页面（预览图片）
 * @author  :陈文艺
 * @version :V0.1.0
 * @team    :TuboSnail
 *
 * @editor  :陈文艺
 * @modDate :2017/10/22
 * @version :V0.1.1
 */?>
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
    $type_id= $_GET['type'];
    $id = $_GET['id'];

    include('db/dbconnection/DBManager.class.php');
    $db=new DBManager();
    $sql_data = "SELECT * FROM type_c WHERE photo_id =$id";
    $res_contest = $db->getResult($sql_data);
    $row = mysqli_fetch_array($res_contest);
    $fullPath = '../../img'."$type_id".'/'.$row['photo_path'];
    echo'<h2>'.$row['photo_title'].'</h2>
	    				<img src="'.$fullPath.'" alt="图片加载失败"/>
	    				<!--<p>'.$row['content'].'</p>
	    				<label>'.$row['t_time'].'</label>-->';
    ?>
</div>
</body>
</html>

