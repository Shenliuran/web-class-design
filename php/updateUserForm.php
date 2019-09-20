<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
// echo "$conn";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$id = $_GET['id'];
$sql = "select * from user_info where id = $id";
$result = mysql_query($sql);
$row = mysql_fetch_assoc($result);
?>
<h1 align="center">更新信息</h1>
<form method="post" action="updateUser.php">
  <table border="1" width="95%" align="center" cellpadding="2">
    <tr>
      <td width="125">ID：</td>
      <td width="275"><input type="text" name="id" value="<?php echo "{$row['id']}";?>"></td>
    </tr>
    <tr>
      <td width="125">名称：</td>
      <td width="275"><input type="text" name="name" value="<?php echo "{$row['name']}";?>"></td>
    </tr>
    <tr>
      <td width="125">密码：</td>
      <td width="275"><input type="text" name="password" value="<?php echo "{$row['password']}";?>"></td>
    <tr><td>&nbsp;</td><td><input type="submit" value="确定"></td></tr>
  </table>
</form>