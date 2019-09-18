<?
require('php/conn.php');
$result = mysql_query("select * from work_info", $conn);
?>
<table border="1" width="95%">
  <tr bgcolor="#E0E0E0">
    <th>ID</th><th>工作名称</th><th>分类</th><th>公司名称</th><th>工资</th><th>选择</th>
    <? while ($row = mysql_fetch_assoc($result)) { ?>
      <tr>
        <td><?=$row['ID']?></td>
        <td><?=$row['work_name']?></td>
        <td><?=$row['classification']?></td>
        <td><?=$row['company']?></td>
        <td><?=$row['wage']?></td>
        <td><a href="../php/select.php?id=<?=$row['id'] ?>">选择</a></td>
      </tr>
    <? } ?>
  </tr>
</table>