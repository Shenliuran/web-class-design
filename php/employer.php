<?
require_once './conn.php';
$result = mysql_query("select * from work_info", $conn);
?>
<a href="../php/addForm.php">添加记录</a>
<table border="1" width="95%">
  <tr bgcolor="#E0E0E0">
    <th>ID</th><th>工作名称</th><th>分类</th><th>公司名称</th><th>工资</th><th>删除</th><th>更新</th>
    <? while ($row = mysql_fetch_assoc($result)) { ?>
      <tr>
        <td><?=$row['ID']?></td>
        <td><?=$row['work_name']?></td>
        <td><?=$row['classification']?></td>
        <td><?=$row['company']?></td>
        <td><?=$row['wage']?></td>
        <td><a href="../php/delete.php?id=<?=$row['id'] ?>">删除</a></td>
        <td><a href="../php/editForm.php?id=<?=$row['id'] ?>">更新</a></td>
      </tr>
    <? } ?>
  </tr>
</table>