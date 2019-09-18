<?
header("Content-type:text/html;charset=UTF-8");
session_start();
require('../php/conn');
$name = $_POST['userid'];
$password = $_POST['psw'];
$password_again = $_POST['psw_again'];

if ($name == "" || $password == "") {
  echo "用户名或者密码不能为空！";
}
else {
  if ($password != $password_again) {
    // echo "两次输入的密码不一致，请重新输入！";
    echo "<a href='../login_register.html'>请重新输入</a>";
  }
  else {
    $sql = "insert into user_info(name, password) values('$name', '$password')";
    $result = mysql_query($sql);
    if (!$result) {
      echo "注册不成功！";
      echo "<a href='../login_register.html'>返回</a>";
    }
    else {
      echo "注册成功！";
      echo "location:../index.html";
    }
  }
}
?>