<?
require('conn.php');
$admin = mysql_real_escape_string(strip_tags(substr($_POST['userid'], 0, 32)));
$password = mysql_real_escape_string(strip_tags(substr($_POST['psw'], 0, 32)));
$crptpw = crypt(md5($password), md5($admin));
$sql = "select * from user_info where name = '$admin'";
$result = $db->query($sql);
if ($result->rowCount() > 0) {
  echo "<script>alert('该用户名已经注册，请更换！');history.go(-1)</script>";
  exit();
}
$sql = "insert into user_info(name, password) values('$admin', '$crptpw')";
$affected = $db->exec($sql);
if ($affected == 1) {
  echo "<script>alert('用户注册成功！');history.go(-1)</script>";
  exit();
}
?>