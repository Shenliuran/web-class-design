<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$tel = $_POST['tel'];
$degree = $_POST['degree'];
mysql_query("update user_info set name = '$name' where id = $id") or die('执行失败！');
mysql_query("update user_info set password = '$password' where id = $id") or die('执行失败！');
mysql_query("update user_info set tel = '$tel' where id = $id") or die('执行失败！');
mysql_query("update user_info set degree = '$degree' where id = $id") or die('执行失败！');
echo "<script>alert('修改成功！'); window.open('adminuser.php');</script>";
?>