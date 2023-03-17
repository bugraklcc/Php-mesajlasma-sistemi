<?php
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
<title>Mesajlaşma Sayfası</title>
</head>
<style>
div2 a{
	color:black;
	width:115px;
	height:420px;
	position: relative;
	left: 650px;
	top: 0px;
	font-size:25px;
	text-decoration:none;
	box-shadow:10px 10px 5px #666;
	background-color:white;



}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 15px;
    font-weight: bold;
    text-align: justify;
	background-color:#00CED1;
	
}
font{
	width:115px;
	height:220px;
	position: relative;
	left: 350px;
	top: 40px;
	color=black;
	font-size:40px;
	
	

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
#resim{
	position: absolute;
	left: 426px;
	top: 570px;
	height:220px;
}

</style>

<body>
<span><a href="profile.php"><img src="HTML/ad.svg">Anasayfa</a></span>
<p>&nbsp;</p>
<p>
<img src="HTML/r2.webp" id="resim">

<?php

$sorgu=mysqli_query($baglan,"select * from users ");
while($liste=mysqli_fetch_array($sorgu)) {
	$user=$liste["user"];
	$id=$liste["id"];
    echo "<div>";
	echo "<div1>";
	echo '<font color="white">'.$user.'</font></br>';
	echo "<div1>";
	echo "<div2>";
	echo '  '.'<a href=mesajsend.php?id='.$id.'>Mesaj gönder</a></br>' ;
	echo "</div2>";
    echo "</div>";
}
?>
<p>&nbsp;<p>
<p>&nbsp;<p>
</body>
</html>