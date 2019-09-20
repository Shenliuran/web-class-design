<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$result = mysql_query("select * from user_info", $conn);
$row = mysql_num_rows($result);
?>
<a href="../index.html">返回</a>
<table border="1" width="95%">
  <tr bgcolor="#E0E0E0">
    <th>ID</th><th>名称</th><th>密码</th><td>删除</td><td>更新</td>
    <?php while ($row = mysql_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo "{$row['id']}";?></td>
        <td><?php echo "{$row['name']}";?></td>
        <td><?php echo "{$row['password']}";?></td>
        <td><a href="../php/deleteUser.php?id=<?php echo "{$row['id']}" ?>">删除</a></td>
        <td><a href="../php/updateUserForm.php?id=<?php echo "{$row['id']}" ?>">更新</a></td>
      </tr>
    <?php } ?>
  </tr>
</table>