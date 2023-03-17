<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Çıkış Sayfası</title>
</head>
<body>
<?php
session_start();
$_SESSION=array();
 session_destroy();  //işlevi geçerli oturumla ilişkilendirilmiş tüm veriyi yok eder

header("location:login.php");
?>
</body>
</html>