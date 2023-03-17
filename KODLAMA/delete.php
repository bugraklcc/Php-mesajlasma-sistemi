<?php include("baglan.php");

session_start();
if(isset($_SESSION["uye"])){
	include("baglan.php");
}else{
	header("location:login.php");
}
?>

<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
</head>


<body>
<?php
$uye=$_SESSION["uye"];
mysqli_query($baglan,"delete from users where user='$uye' ");

$sorgu=mysqli_query($baglan,"select * from users where user='$uye' ");
$sorgudonen=mysqli_fetch_array($sorgu);
header("location:login.php");
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
