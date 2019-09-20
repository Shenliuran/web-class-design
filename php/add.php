<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!");		 //连接数据库服务器
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$id = $_POST['id'];
$work_name = $_POST['work_name'];
$classification = $_POST['classification'];
$company = $_POST['company'];
$wage = $_POST['wage'];
$sql = "insert into work_info(id, work_name, classification, company, wage) values('$id', '$work_name', '$classification', '$company', '$wage')";
mysql_query($sql) or die('执行失败');
header("Location:employer.php");
?>