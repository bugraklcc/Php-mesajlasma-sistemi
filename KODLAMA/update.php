<?php
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
<title>Güncelleme Sayfası</title>
</head>
<style>
h3{
	color:white;
	font-size: 35px;
	position: absolute; 
        left: 440px;
        top:158px;
}
#sifre{
	background-color:#00CED1;
	width:115px;
	height:50px;
	font-size:25px;
		position: absolute; 
        left: 690px;
        top: 278px;
}
#pas{
		background-color:white;
	width:115px;
	height:50px;
		position: absolute; 
        left: 540px;
        top: 278px;
}

body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/r3.jpg");
	
}#resim{
  -webkit-filter: blur(4px);
  filter: blur(4px);
}

#resim:hover{
  -webkit-filter: blur(0);
  filter: blur(0);
}
a{
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
<body>
<img src="HTML/r3.jpg" id="resim">
<div id="yazi">
<span><a href="profile.php"><img src="HTML/ad.svg">Anasayfa</a></span>
</div>


<?php
$uye=$_SESSION["uye"];
$sorgu=mysqli_query($baglan,"select * from users where user='$uye' ");
$liste=mysqli_fetch_array($sorgu);
$sifre=$liste["password"];
echo "<h3><strong>".$uye."</strong> şifre güncellemesi</h3></br>";
?>
<form action="update1.php" method="post">
<input type="text" name="pass" id="pas" value="<?php echo $sifre; ?>" />
<input type="submit" name="şifre güncelle" id="sifre" />
</form>


</body>
</html>