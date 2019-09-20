<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!");		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$resul = mysql_query("select * from work_info", $conn);
$n = mysql_num_rows($result);
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