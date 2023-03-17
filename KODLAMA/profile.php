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
<script>
function eylem(){
	return confirm("Üyeliğiniz sistemden silinecektir yine de devam etmek isiyor musunuz?");
}
</script>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Profil Sayfası</title>
<style>
#menu{
    margin:auto;
    width:870px;
    height: 70px;
    background:#F8F8FF;
    border-radius: 0 0 10px 10px;
	position: absolute;
	left: 196px;
	top: 343px;
	 opacity:0.6; // saydamlık özelliği verir
      filter:alpha(opacity=60);
}
#menu #menuUl li {
    float: left;
    display: block;
    color: #fff;
    font-weight: bold;
    border-radius: 0 0 10px 10px;
    margin-right: 15px;
    text-decoration: none;
    padding: 17px 10px;
}

#menu #menuUl li:hover{
    float: left;
    display: block;
    color: #000;
    font-weight: bold;
    padding: 17px 10px;
    margin-right: 15px;
    text-decoration: none;
    background: #9fb6cd;
    border-radius: 0 0 10px 10px;
}
#apDiv1 {
	position: absolute;
	left: 16px;
	top: 159px;
	width: 227px;
	height: 210px;
	z-index: 1;
}
#apDiv2 {
	position: absolute;
	left: 16px;
	top: 123px;
	width: 299px;
	height: 256px;
	z-index: 1;
}
h3{
	color:white;
	font-size: 35px;
	font-weight: bold;
	position: absolute; 
        left: 30px;
        top: -10px;
}
img{
  -webkit-filter: blur(2px); // resimi bulanıklaştırmak için kullanılır
  filter: blur(2px);
}

img:hover{
  -webkit-filter: blur(0);
  filter: blur(0);
}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/r3.jpg");
	
}
a{
	text-decoration:none;
	font-size:18px;
	color:black;
	
}
</style>
</head>
<body>


<h3 id="h1"></h3>
<img src="HTML/r3.jpg" id="resim">


<?php
error_reporting(0);
session_start();
echo "<h3><strong>".$_SESSION["uye"]."</strong> nin Profili</h3></br>";


?>
<div id="menu">
    <ul id="menuUl">
        <li><a href="logout.php">Çıkış Yap</a></li>
        <li><a href="update.php">Bilgilerimi Düzenle</a></li>		
		<li><a href="delete.php" onclick="return eylem();">Üyeliğimi sil</a></li>
		<li><a href="mesaj.php">Mesajlar<?php
		$userforid=$_SESSION["uye"];
		$sorguid=mysqli_query($baglan,"select * from users where user='$userforid' ");
		$donenid=mysqli_fetch_array($sorguid);
		$userid=$donenid["id"];
		
		$mesajsorgu=mysqli_query($baglan,"select count(*) from mesajlar where okundu=0 and alan_id='$userid' ");
		$sayma=mysqli_fetch_array($mesajsorgu);
		echo "<font color=red>&nbsp;".$sayma[0] ;
		?></a></li>
		<li><a href="profilehome.php">Mesaj Gönder</a></li>
    </ul>
</div>
<?php
$uye=$_SESSION["uye"];
$sorguid=mysqli_query($baglan,"select * from users where user='$uye' ");
$sorgudonen=mysqli_fetch_array($sorguid);
$sorgudonen=mysqli_fetch_array($sorguid);
?>
<?php
if($_POST){
	
	session_start();
	$uye=$_SESSION["uye"];
	$pass=$_POST["pass"];
	$guncel=mysqli_query($baglan,"UPDATE users SET password='$pass' WHERE user='uye' ");
	
}
else{
}
	?>





</body>
</html>