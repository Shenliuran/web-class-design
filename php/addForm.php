<h1 align="center">插入职位信息</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="95%" border="1">
    <tr><td width="125">职位名称：</td><td width="275"><input type="text" name="work_name"></td></tr>
    <tr><td width="125">分类：</td><td width="275"><input type="text" name="classification"></td></tr>
    <tr><td width="125">公司名称：</td><td width="275"><input type="text" name="company"></td></tr>
    <tr><td width="125">工资：</td><td width="275"><input type="text" name="wage"></td></tr>
    <tr><td width="125" height="25">&nbsp;</td><td><input type="submit" value="提交"></td></tr>
  </table>
</form>
<?
require('../php/conn.php');
$work_name = $_POST['work_name'];
$classification = $_POST['classification'];
$company = $_POST['company'];
$wage = $_POST['wage'];
$sql = "insert into work_info(work_name, classification, company, wage) values('$work_name', '$classification', '$company', '$wage')";
mysql_query($sql) or die('执行失败');
header("Location:../index.html");
?>