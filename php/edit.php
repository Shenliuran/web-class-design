<?php
header("Content-type:text/html;charset=UTF-8");
$conn=mysql_connect("localhost","root","") or die("不能连接服务器!") ;		 //连接数据库服务器
echo "hello";
mysql_query("set names utf8");	 		//设置字符集
mysql_select_db("recruit_database",$conn) or die("不能连接数据库");
$id = $_POST['id'];
$work_name = $_POST['work_name'];
$classification = $_POST['classification'];
$company = $_POST['company'];
$wage = $_POST['wage'];
echo "$wage";
// $sql = ", classification = '$classification', company = '$company', wage = $wage where id = $id;"
mysql_query("update work_info set work_name = '$work_name' where id = $id") or die('执行失败！');
echo "spot";
mysql_query("update work_info set classification = '$classification' where id = $id") or die('执行失败！');
mysql_query("update work_info set wage = '$wage' where id = $id") or die('执行失败！');
echo "spot";
echo "<script>alert('修改成功！'); window.open('employer.php');</script>";
?>