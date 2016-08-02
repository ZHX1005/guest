<?php
include "conn.php";
include "newclass.php";
$mag = new newClass();
$username =$mag->magic($_POST["username"]);
$password=$mag->magic($_POST["password"]);
//echo $username.$password;

$sql="select count(*) from `user` where username='$username' and  password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
$isok=$row[0];
//echo $isok;
if ($isok==1){
   session_start();
   $_SESSION["isok"]="ok";
   echo "<script>alert('登陆成功！');location.href='index.php';</script>";
}else {
    echo "登录失败";
}