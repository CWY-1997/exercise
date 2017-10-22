<?php
/**
 * @creDate :2017/10/22 上午
 * @function:删除由albumUpload.php页面传来的ID号
 * @author  :陈文艺
 * @version :V0.1.0
 * @team    :TuboSnail
 *
 * @editor  :修改人
 * @modDate :修改日期
 * @version :版本号
 */

        include('db/dbconnection/DBManager.class.php');
        $db=new DBManager();
        $id = $_GET['id'];
        $file =$_GET['type'];
        $sql_del = "DELETE FROM type_c WHERE photo_id='$id'";
        $res_del = $db->delete($sql_del);
        unlink($file);	//删除news_show_do.php传来的图片路径
        echo "<script type='text/javascript'>
                parent.window.location.href='album_anage.php';</script>";
?>
