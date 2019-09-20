<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$id = $_GET['id'];
$sql = "delete from user_info where id = $id";
$result = mysql_query($sql);
if ($result != 0) {
  echo "<script>alert('删除成功！');window.open('adminuser.php');</script>";
}
else {
  echo "<script>alert('删除失败！');window.open('adminuser.php');</script>";
}
// echo "$id";
?>