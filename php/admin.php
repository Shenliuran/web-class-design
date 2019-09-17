<? session_start();
if ($_SESSION['admin'] == "") {
 echo "<script>alert('您尚未登录或Session超时');location.href'login.html'</script>";
 exit();
}
?>