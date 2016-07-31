<?php
header("Content-Type:text/html;Charset=utf-8");
include "conn.php";
include "newclass.php";
$title=magic($_POST["title"]);
$username=magic($_POST["username"]);
$content=magic($_POST["content"]); 

//echo $title.$username.$content;
//增
$insert_sql=mysqli_query($conn,"INSERT INTO 
   guestlist(title,username,content,addate) 
   VALUES('$title','$username','$content','".date("Y-m-d")."')");
if ($insert_sql){
    echo"数据添加成功";
}else {
    echo"数据添加失败";
} 