<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
session_start();
$name = $_POST['userid'];
$password = $_POST['psw'];
$password_again = $_POST['psw_again'];

if ($name == "" || $password == "") {
  echo "用户名或者密码不能为空！";
}
else {
  if ($password != $password_again) {
    echo "两次输入的密码不一致，请重新输入！";
    echo "<a href='../login_register.html'>请重新输入</a>";
  }
  else {
    $sql = "insert into user_info(id, name,password) values('$id', '$name', '$password')";
    $result = mysql_query($sql) or die("失败");
    if (!$result) {
      echo "注册不成功！";
      echo "<a href='../login_register.html'>返回</a>";
    }
    else {
      echo "注册成功！";
      echo "<script language='javascript'>alert('登陆成功！点击跳转');window.open('../index.html');</script>";
    }
  }
}
?>