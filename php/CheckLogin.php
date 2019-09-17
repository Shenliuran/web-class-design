<?
session_start();
echo "CheckLogin";
exit();
require('../php/conn.php');
// include('conn.php');
$admin = strip_tags(substr($_POST['userid'], 0, 32));
$password = strip_tags(substr($_POST['psw'], 0, 32));
// $admin = mysql_real_escape_string($_POST['usrn']);
// $password = mysql_real_escape_string($_POST['password']);
// $admin = mysql_real_escape_string($admin);
// $password = mysql_real_escape_string($password);

$crptpw = crypt(md5($password), md5($admin));
$sql = "select * from user_info where name='$admin' and password='$crptpw'";
echo "spot here";
$result = $db->query($sql);
if ($result->rowCount() == 0) {
  unset($_SESSION['usrn']);
  echo "<script>alert'(请输入正确的用户名或密码不正确！)';history.go(-1)</script>";
  exit();
}
else {
  $row = $resutl->fetch(1);
  $_SESSION['usrn'] = $row['name'];
  echo "<script>location.href='index.php'</script>";
}
?>