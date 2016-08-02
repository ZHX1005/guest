<?php 
error_reporting(0);
include"conn.php";
//每页显示条数
$pagesize=10;
$sql="SELECT count(*)from guestlist";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
$infoCount =$row[0];
//echo $infoCount;
//页数
$pageCount=ceil($infoCount/$pagesize);
//echo $pageCount;
//当前页
$currpage=empty($_GET["page"])?1:$_GET["page"];
//echo $currpage;
//判断当前页是否超过页数
if($currpage>$pageCount)
{
    $currpage=5;
}
session_start();
//echo $_SESSION["isok"];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言本</title>
<link type="text/css" rel="stylesheet" href="images/index.css"/>
<script type="text/javascript" src="images/index.js"></script>
</head>

<body>
<div id="main">
    <div id="header">
        <div id="logo"><img src="images/logo.jpg" alt="留言本实例"></div>
         <div id="search">
         <?php 
           if ($_SESSION["isok"]="ok"&& isset($_SESSION["isok"])){
               echo "登陆成功，欢迎回来"."$username";
           } else{          
         ?>
             <form action="login.php" method="post" name="login"  onsubmit="return islogin();">
                                              用户名：<input type="text" size="12" name="username"/>
                                                密码：<input type="password" size="12" name="password" />
                   <input type="hidden" value="login"  name="action"/>
                    <input name="do" value="登陆" class="button" type="submit"/>   
             </form>
           <?php                
           }
           ?>
         </div>
    </div>
    <div id="left">
        <h3>总共<?php echo $infoCount?>条留言</h3>
        <?php 
            $sql="SELECT * FROM `guestlist` ORDER BY id desc LIMIT ".($currpage-1)*$pagesize.",$pagesize";
            $result=mysqli_query($conn,$sql);
            
            while ($row=mysqli_fetch_array($result))//从结果集中取得一行作为数字数组或关联数组：
            {
                echo '<!--循环体开始-->
                    <p class="style0">'."<strong>用户名：</strong>".$row["username"].'&nbsp;|&nbsp;'."<strong>留言时间：</strong>".$row["addate"].'</p>
                    <div class="title">'."<strong>标题：</strong>".$row["title"].'</div>
                    <div class="content">'."<strong>内容：</strong>".$row["content"].'</div>';
            }
            for ($i=1;$i<=$pageCount;$i++){
                //当前页不能点击
                if ($i==$currpage){
                    echo "<b>$i</b>&nbsp;";
                }else{
                    echo "<a href='?page=$i'>$i</a>&nbsp;";
                }
            }
            
        ?>
       <fieldset>
		<legend>发表留言</legend>
		<form action="result.php" method="post" name="frm" onsubmit="return test();">
		<table border="0" cellpadding="5" cellspacing="0" width="0">
			<tbody><tr>
				<td width="20%">留言标题</td><td><input name="title" size="30" type="text" /></td>
			</tr>
			<tr>
				<td>用户网名</td><td><input name="username"  value="" size="30" type="text" /></td>
			</tr>
			<tr>
				<td>内容</td><td><textarea name="content" cols="42" rows="5"></textarea></td>
			</tr>
			<tr>
			    <td colspan="2" align="center">
					<input name="action" value="insert" type="hidden">
					<input value=" 提 交 " class="button" type="submit">
				</td>
			</tr>
		</tbody></table>
		</form>
		</fieldset>
    </div>
    <div id="footer">&#169;&nbsp;2011&nbsp;www.houdunwang.com</div>
</div>
</body>
</html>
