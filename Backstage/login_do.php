<?php
	    include "db/dbconnection/DBManager.class.php";
		$db=new DBManager();
	 	$user = $_POST['userName'];
	 	$pass = $_POST['passWord'];
	    $db=new DBManager();
	    $query = "select * from news_user where name = '$user' and password = '$pass'";
	    $res_contest = $db->getResult($query);
	    if (mysqli_num_rows($res_contest) == 1){
            echo "<script type='text/javascript'>
					parent.window.location.href='news_show.php';</script>"; 
            }else{
            echo "<script type='text/javascript'> alert('用户名或密码有误！');
					parent.window.location.href='login.php';</script>"; 
            }
?>