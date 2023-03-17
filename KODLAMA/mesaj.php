<style>
div{
	margin:20px;
	padding:20px;
	width: 700px;
    height: 70px;
	position: relative;
	left:240px;
	background-color:#eee;
	box-shadow:10px 10px 5px #666;
	opacity:0.8; // saydamlık özelliği verir
      filter:alpha(opacity=60);
	
}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 15px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/r3.jpg");
	
}
span a{
	color:white;
	width:115px;
	height:50px;
	position: absolute;
	left: 26px;
	top: 100px;
	font-size:25px;
	text-decoration:none;
	font-weight:bold;
}




</style>
<?php
error_reporting(0);
session_start();
if(isset($_SESSION["uye"])){
    include("baglan.php");

}else
{

    header("location:login.php");

}

?>

<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Gelen Mesajlaşma Sayfası</title>
</head>


<body>
<span><a href="profile.php"><img src="HTML/ad.svg">Anasayfa</a></span>
<?php 
$user=$_SESSION["uye"];
$sorgu=mysqli_query($baglan,"select * from users where user='$user' ");
$sorgudonen=mysqli_fetch_array($sorgu);
$id=$sorgudonen["id"]; //oturum açan id

$sorgumesaj=mysqli_query($baglan,"select * from mesajlar where alan_id='$id' order by id desc");
while($liste=mysqli_fetch_array($sorgumesaj)){
	$gonderen_id=$liste["gonderen_id"];
	$sorguwhile=mysqli_query($baglan,"select user from users where id='$gonderen_id' ");
	$donenwhile=mysqli_fetch_array($sorguwhile);
	$kimden=$donenwhile["user"];
	
echo "<div>";
echo "Kimden  :". $kimden."</br>";
echo "Gönderilme tarihi  :".$liste["tarih"]."</br>";
echo "Mesajın içeriği  :".$liste["mesaj"];
echo "</div>";

mysqli_query($baglan,"UPDATE mesajlar SET okundu=1 WHERE alan_id='$id' ");

}




?>


</body>
</html>


