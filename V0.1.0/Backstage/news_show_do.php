<?php
					$num_rec_per_page=15;   // 每页显示数量
					include('db/dbconnection/DBManager.class.php');
					$db=new DBManager();
					if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
					$start_from = ($page-1) * $num_rec_per_page;
					$sql_data = "SELECT * FROM news ORDER BY id DESC LIMIT $start_from, $num_rec_per_page ";
					$res_contest = $db->getResult($sql_data); // 查询数据
                    while($row = mysqli_fetch_array($res_contest)){
                    	if(file_exists($row['p_path'])){
                    		$serialNumber = $serialNumber+1;
				            echo '<li type="square"><span><a href="#" title="'.$row['t_time'].'.'.$row['title'].'" class="nei"><span>'.$row['t_time'].'&nbsp;&nbsp; '.$row['title'].'</span></a></span>
				            <input type="button" value="删除" onclick=if(confirm("确定要删除吗"))location.href="news_delete.php?&id='.$row['id'].'&path='.$row['p_path'].'" class="btnn"> &nbsp;
				            <input type="button" value="修改" name="ad" onclick=if(confirm("确定要修改吗"))location.href="modify.php?id='.$row['id'].'" class="btnn">&nbsp;
				            <input type="button" value="查看" onclick=location.href="read.php?id='.$row['id'].'" class="btnn"> &nbsp;
				            </li><div class="tex"></div>';
				        }
           			}
            		    $res_contest = $db->getResult("SELECT COUNT(*) FROM news"); // 查询数据
						list($num_rows) = mysqli_fetch_array($res_contest);
						$a= $num_rows;
						$total_records = $num_rows;
						$total_pages = ceil($total_records / $num_rec_per_page);  // 计算总页数
							echo "<div class='fen'><a href='news_show.php?page=1'>".'首页'."</a> "; // 第一页
						for ($i=1; $i<=$total_pages; $i++) { 
							echo "<a href='news_show.php?page=".$i."'>".$i."</a> "; 
						}; 
							echo "<a href='news_show.php?page=$total_pages'>".'尾页'."</a></div>"; // 最后一页

            		?>
