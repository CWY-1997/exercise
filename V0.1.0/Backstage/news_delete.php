<?php
				include('db/dbconnection/DBManager.class.php');
				$db=new DBManager();
				$id = $_GET['id'];
				$file =$_GET['path'];
				$sql_del = "DELETE FROM news WHERE id='$id'";
	    		$res_del = $db->delete($sql_del);
				unlink($file);
				echo "<script type='text/javascript'>
    				parent.window.location.href='news_show.php';</script>";

?>
