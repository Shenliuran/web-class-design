<?
require('conn.php');
$id = intval($_GET['id']);
$sql = "select * from work_info where id = $id";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
?>
<h1 align="center">更新信息</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table border="1" width="95%" align="center" cellpadding="2">
    <tr>
      <td width="125">ID</td>
      <td width="275"><input type="text" name="id" value="<?=$row['id']?>"></td>
    </tr>
    <tr>
      <td width="125">工作名称：</td>
      <td width="275"><input type="text" name="work_name" value="<?=$row['work_name']?>"></td>
    </tr>
    <tr>
      <td width="125">分类：</td>
      <td width="275"><input type="text" name="classification" value="<?=$row['classification']?>"></td>
    </tr>
    <tr>
      <td width="125">公司名称：</td>
      <td width="275"><input type="text" name="company" value="<?=$row['company']?>"></td>
    </tr>
    <tr>
      <td width="125">工资：</td>
      <td width="275"><input type="text" name="wage" value="<?=$row['wage']?>"></td>
    </tr>
    <tr><td>&nbsp;</td><td><input type="submit" value="确定"></td></tr>
  </table>
</form>