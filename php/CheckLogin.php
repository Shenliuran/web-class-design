<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库"); 			//选择数据库
session_start();
// include('conn.php');
$admin = $_POST['userid'];
$password = $_POST['psw'];
echo "$admin : $password";
// $admin = mysql_real_escape_string($_POST['usrn']);
// $password = mysql_real_escape_string($_POST['password']);
// $admin = mysql_real_escape_string($admin);
// $password = mysql_real_escape_string($password);

$sql = "select * from user_info where name = '$admin' and password = '$password'";
$result = mysql_query($sql);
$n = mysql_num_rows($result);
echo "$n";
if (mysql_num_rows($result) > 0) {
  // $row = mysql_fetch_assoc($result);
  echo "<script language='javascript'>alert('登陆成功！点击跳转');window.open('../index.html');</script>";
}
else {
  echo "<script language='javascript'>alert('密码或用户名错误！');window.open('../login_register.html');</script>";
}
?>