<?php
header("Content-Type:text/html;Charset=utf-8");
//面向对象
$servername="localhost";
$username="root";
$password="";
$database='guest';

$conn=new mysqli($servername,$username,$password,$database);
mysqli_query($conn,"set name utf-8");
//检查连接是否成功
if ($conn->connect_error){
    die("连接MYSQL失败:".$conn->connect_error);
}
echo "连接成功！";
/* //创建数据库
$sql="create database '$database'";
if ($conn->query($sql)===true){
    echo "数据库创建成功";
}else {
    echo "数据库创建失败：".$conn->error;
}
// 创建数据表
mysqli_select_db("$database", $conn);
$sql ="create table guestList(
    id int(6) unsigned auto_increment primary key,
    username varchar(30) not null,
    title varchar(255) not null,
    content text not null,
    recontent text not null,
    replay int(1) not null,
    addate date not null,
    )";
 if ($conn->query($sql)===true){
     echo "数据表创建成功";
 }else {
     echo "创建数据表失败：".$conn->error;
 } */
//$conn->close();



