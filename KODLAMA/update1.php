
<?php include("baglan.php"); ?>

<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Güncelleme Sayfası</title>
</head>
<style>
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/r3.jpg");
	
}h3{
	color:	white;
	font-size: 35px;
	position: absolute; 
        left: 340px;
        top:258px;
}
img{
  -webkit-filter: blur(4px);
  filter: blur(4px);
}

img:hover{
  -webkit-filter: blur(0);
  filter: blur(0);
}

</style>
<body>
<img src="HTML/r3.jpg" id="resim">
<?php
session_start();
$user=$_SESSION["uye"];
$pass=$_POST["pass"];
$guncelle=mysqli_query($baglan,"update users set password='$pass' where user='$user' ");
if($guncelle){
	
	echo "<h3>Şifreniz başarıyla güncellendi</h3>"; //h3 yazıyı güçlendirmek için kullanılır  yada strongda kullanılabilir.
	header('refresh:3;url=login.php');
}
else
{
	echo "<h3>bir hata meydana geldi</h3>";
}
?>

</body>
</html>