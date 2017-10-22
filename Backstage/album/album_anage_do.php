<?php
					$num_rec_per_page=15;   // 每页显示数量
					include('db/dbconnection/DBManager.class.php');
					$db=new DBManager();
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
					$start_from = ($page-1) * $num_rec_per_page; 
					$sql_data = "SELECT * FROM type_c ORDER BY photo_id DESC LIMIT $start_from, $num_rec_per_page "; 
					$res_contest = $db->getResult($sql_data); // 查询数据

                    while($row = mysqli_fetch_array($res_contest)){
                        $fullPath = '../../img'.$row['type_id'].'/'.$row['photo_path']; //拼接路径，得到相册的具体图片路径type_id区别第几个相册，photo_path图片文件名
                    	if(file_exists($fullPath)){ //判断图片是否存在
                    		$serialNumber = $serialNumber+1;   
				            echo '<li type="square">相册'.$row['type_id'].'<span><a href="#" title="'.$row['photo_title'].'.'.$row['photo_path'].'" class="nei"><span>'.$row['photo_title'].'&nbsp;&nbsp; '.$row['photo_path'].'</span></a></span>
				                         <input type="button" value="删除" name="ad" onclick=if(confirm("确定要删除吗"))location.href="delete.php?id='.$row['photo_id'].'&type='.$fullPath.'" class="btnn">&nbsp;
				                         <input type="button" value="查看" name="ad" onclick=location.href="preview.php?id='.$row['photo_id'].'&type='.$row['type_id'].'" class="btnn">&nbsp;
				                  </li><div class="tex"></div>';
				        }
           			}
           				$res_contest = $db->getResult("SELECT COUNT(*) FROM type_c"); // 查询数据
						list($num_rows) = mysqli_fetch_array($res_contest);
						$a= $num_rows;
						$total_records = $num_rows;
						$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
							echo "<div class='fen'><a href='album_anage.php?page=1'>".'首页'."</a> "; // 第一页
						for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='album_anage.php?page=".$i."'>".$i."</a> "; 
						}; 
							echo "<a href='album_anage.php?page=$total_pages'>".'尾页'."</a></div>"; // 最后一页*/
?>