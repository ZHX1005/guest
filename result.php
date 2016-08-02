<?php
header("Content-Type:text/html;Charset=utf-8");
include "conn.php";
include "newclass.php";
$mag= new newClass();
$title=$mag->magic($_POST["title"]);
$username=$mag->magic($_POST["username"]);
$content=$mag->magic($_POST["content"]); 
//获取中国时区
date_default_timezone_set('PRC');
//echo $title.$username.$content;
//增
$insert_sql=mysqli_query($conn,"INSERT INTO 
   guestlist(title,username,content,addate) 
   VALUES('$title','$username','$content','".date("Y-m-d H:i:s",time())."')");
if ($insert_sql){
    echo"数据添加成功";
}else {
    echo"数据添加失败";
} 
