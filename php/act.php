<?
require('conn.php');
$id = intval($_GET['id']);
if ($_GET['del'] == 'y') {
  $sql = "delete from user_info Where ID = $id";
  $affected = $db->exec($sql);
  if ($affected == 1) {
    echo "<script>alert('该用户已经被删除！');location.href='adminuser.php';</script>";
    exit();
  }
}
if ($_GET['mod'] == 'y') {
  $admin = mysql_real_escape_string(strip_tags(substr($_POST['user'], 0, 32)));
  $oldpws = mysql_real_escape_string(strip_tags(substr($_POST['oldpws'], 0, 32)));
  $oldcrptpw = crypt(md5($oldpws), md5($admin));
  $sql = "select * from user_info where name = $admin and password = '$oldcrptpw'";
  $result = $db->exec($sql);
  if ($result->rowCount() == 0) {
    echo "<script>alert('您输入的原密码不正确！');history.go(-1)</script>";
    exit();
  }
  $password = mysql_real_escape_string(strip_tags(substr($_POST['password'], 0, 32)));
  $crptpw = crypt(md5($password), md5($admin));
  $sql = "Update admin Set password = '$crptpw' where ID = '$id'";
  $affected = $db->exec($sql);
  if ($affected == 1) {
    echo "<script>alert('用户密码修改成功！');location.href='adminuser.php'</script>";
    exit();
  }
}
?>