<?
require("php/conn.php");
mysql_select_db("work_info", $db);
$resul = mysql_query("select * from work_info", $db);
?>

<form action="../index.html" method="post">
  <table border="1" width="95%">
    <tr bgcolor="#E0E0E0">
      <th>ID</th><th>工作名称</th><th>分类</th><th>公司名称</th><th>工资</th>
       <? while ($row = mysql_fetch_assoc($result)) { ?>
          <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['work_name']?></td>
            <td><?=$row['classification']?></td>
            <td><?=$row['company']?></td>
            <td><?=$row['wage']?></td>
          </tr>
        <? } ?>
    </tr>
  </table>
  
</form>