<?php
		header("Content-type: text/html; charset: utf-8");
		include "fileupload.class.php";		
		include "db/dbconnection/DBManager.class.php";	
    $up = new fileupload;
    $p = $_GET['id'];	//获取到entry传来的下拉框的value值，用于区别第几个相册
    $up -> set("path", "../../img$p/");	//根据传来的的值保存到文件中
    $up -> set("maxsize", 2000000);
    $up -> set("allowtype", array("jpg"));
    $up -> set("israndname", true);
    if($up -> upload("pic")) {
		 	echo "<script language='javascript'>
			parent.window.location.href='album_anage.php';</script>"; 
   } else {
		echo "相片发布失败"; 
  }
	//	$y = $_POST['i'];	//获取到每个<input>	0,1,2
	//	$p = $_GET['id'];	//获取到几个<input>		3
		$p = $_GET['id'];	//获取到entry传来的下拉框的value值，用于区别第几个相册
       	$random = $up->getFileName();	//随机生成的文件名
		$arr = array();	//创建一个数组
		$arr = $random;	//把得到的值存入数组中
		$arrlength =count($arr);	//获得到数组的长度
		for($i=0; $i<=$arrlength; $i++){
			$db=new DBManager();
			$r = $arr[$i];	//每一次遍历数组得到的值赋给$r
			$y = $_POST[$i];	//获取到每个<input>	name值 0,1,2
				if($r!="")//判断是否获取到随机生成的文件名	,判断获取到的文件名是否为空
				{	
				    $teachersql = "INSERT INTO type_c(photo_path,photo_title,type_id)
					values('$r','$y','$p')";
				    $db->insert($teachersql);
				}							
		}
		//echo "成功插入".($arrlength)."条数据成功";	
			$db->dbclose();	
?>
