<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<title></title>
</head>								<!--点击新闻弹出的窗口-->
<body topmargin="0" leftmargin="0">
	<div class="modal-content">
    	<section>
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php	
										$id = $_GET['id'];	//首页传来的ID	
						                include('db/dbconnection/DBManager.class.php');
	                                	$db=new DBManager();
                                        $sql_data = "SELECT id,t_time,title,p_path,content FROM news WHERE id='$id'";
                                        $res_contest = $db->getResult($sql_data);
                                        while($row = mysqli_fetch_array($res_contest)){
                                          if(file_exists($row['p_path'])){
		                                          	$r = "Backstage/";//新闻图片的存储根目录
														$e=$r.$row['p_path'];//新闻图片的路径
													echo '<h5>'.$row['title'].'</h5>
		                						 			<a href="'.$e.'"   target="_Blank" ><img src="'.$e.'"/></a>				 
		                									<p class="work_p">'.$row['content'].'</p>';
              								}
               							}
               		?>
            </div>
		 </section>
	</div>
</body>
</html>