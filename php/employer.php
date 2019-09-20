<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$result = mysql_query("select * from work_info", $conn);
// echo "<table>";
// echo "<tr><td>ID</td><td>工作名称</td><td>分类</td><td>公司名称</td><td>工资</td><tr>";
// while ($row = mysql_fetch_assoc($result)) {
//   echo "<tr>
//           <td>$row[1]</td>
//           <td>$row[2]</td>
//           <td>$row[3]<td>
//           <td>$row[4]</td>
//           <td>$row[5]</td>
//         </tr>";
// }
// echo "</table>";
?>
<a href="../php/addForm.php">添加记录</a>
<a href="../index.html">返回</a>
<table border="1" width="95%">
  <tr bgcolor="#E0E0E0">
    <th>ID</th><th>工作名称</th><th>分类</th><th>公司名称</th><th>工资</th><th>删除</th><th>更新</th>
    <?php while ($row = mysql_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo "{$row['id']}";?></td>
        <td><?php echo "{$row['work_name']}";?></td>
        <td><?php echo "{$row['classification']}";?></td>
        <td><?php echo "{$row['company']}";?></td>
        <td><?php echo "{$row['wage']}";?></td>
        <td><a href="../php/delete.php?id=<?php echo "{$row['id']}" ?>">删除</a></td>
        <td><a href="../php/editForm.php?id=<?php echo "{$row['id']}" ?>">更新</a></td>
      </tr>
    <?php } ?>
  </tr>
</table>