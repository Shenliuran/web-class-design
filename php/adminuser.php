<?
require('conn.php');
$result = $db->query('select * from user_info');
$result->setFetchMode(PDO::FETCH_ASSOC);
?>
<h3>后台用户管理</h3>
<table border="1" width="95%">
  <tr bgcolor="#E0E0E0"></tr>
  <th>ID</th><th>用户名</th><th>密码</th><th>删除</th><th>修改</th>
  <? while($row = $result->fetch()) { ?>
    <tr>
      <td><?=$row['id'] ?></td><td><?=$row['name'] ?></td><td><?=$row['password'] ?></td>
        <td><a href="act.php">删除</a></td>
        <td><a href="?mod=y&id=<?=$row['id'] ?>"></a>修改</td>
    </tr>
  <? } ?>
</table>
<p>共有<?=$result->rowCount() ?>行</p>
<?
if ($_GET['mod'] == 'y') {
  $id = intval($_GET['id']);
  $sql = "select * from user_info where id = '$id'";
  $result = $db->exec($sql);
  $result->setFetchMode(PDO::FETCH_ASSOC);
  $row = $result->fetch();
?>
<h2 align="center">修改密码</h2>
<form method="post" action="php/act.php?mod=y&id=<?=$row['name']?>">
  <table width="400" border="1" align="center" cellpadding="2">
    <tr>
      <td width="125">用户名：</td>
      <td width="275"><input type="text" name="user" value="<?=$row['user']?>">*</td>
    </tr>
    <tr>
      <td width="125">原密码：</td>
      <td width="275"><input type="text" name="oldpws">*</td>
    </tr>
    <tr>
      <td width="125">新密码：</td>
      <td width="275"><input type="text" name="password">*</td>
    </tr>
    <tr><td>&nbsp;</td><td><input type="submit" value="确定"></td></tr>
  </table>
</form>
<? } ?>