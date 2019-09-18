<?
header("Content-type:text/html;charset=UTF-8");
session_start();
require('../php/conn');
$admin = $_POST['userid'];
$password = $_POST['psw'];
// $admin = mysql_real_escape_string($_POST['usrn']);
// $password = mysql_real_escape_string($_POST['password']);
// $admin = mysql_real_escape_string($admin);
// $password = mysql_real_escape_string($password);

if (checkEmpty($admin, $password)) {
  if (checkUser($admin, $password)) {
    header("location:../index.html");
  }
}

function checkEmpty($username,$password){
  if($username==null||$password==null){
      echo '<html><head><Script Language="JavaScript">alert("用户名或密码为空");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
  }
  else{
    return true;
  }
}
function checkUser($username,$password){
  $conn=new Mysql();
  $sql="select * from user_info where name='{$username}' and password='{$password}';";
  $result=$conn->sql($sql);
  if($result){
      return true;
  }
  else{
      echo '<html><head><Script Language="JavaScript">alert("用户不存在");</Script></head></html>' . "<meta http-equiv=\"refresh\" content=\"0;url=login.html\">";
  }
  $conn->close();
}
?>