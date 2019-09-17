<?
require('conn.php');
$id = $_GET['id'];
$sql = "delete from work_info id = $id";
if (mysql_query($sql) && mysql_affected_rows() == 1)
  echo "<script>alert('删除成功！');location.href='display.php'</script>";
else
  echo "<script>alert('删除失败！');locatino.href='display.php'</script>";
?>