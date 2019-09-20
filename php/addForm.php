<?php header("Content-type:text/html;charset=UTF-8");?>
<h1 align="center">插入职位信息</h1>
<form method="post" action="add.php">
  <table width="95%" border="1">
    <tr><td width="125">ID：</td><td width="275"><input type="text" name="id"></td></tr>
    <tr><td width="125">职位名称：</td><td width="275"><input type="text" name="work_name"></td></tr>
    <tr><td width="125">分类：</td><td width="275"><input type="text" name="classification"></td></tr>
    <tr><td width="125">公司名称：</td><td width="275"><input type="text" name="company"></td></tr>
    <tr><td width="125">工资：</td><td width="275"><input type="text" name="wage"></td></tr>
    <tr><td width="125" height="25">&nbsp;</td><td><input type="submit" value="提交"></td></tr>
  </table>
</form>
