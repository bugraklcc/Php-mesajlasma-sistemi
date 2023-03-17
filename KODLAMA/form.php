<?PHP include("baglan.php"); 
error_reporting(0);
?>
<?php
session_start();
if(isset($_SESSION["uye"])){
	header("location:login.php");	
}
?>
<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Form sayfası</title>
</head>
<style>
#form1{
 width: 70px;
        height: 70px;
        position: absolute; /* pozisyon ayarları için kullanılır */
        left: 370px;
        top: 218px;
       
}
h3{
	color:	black;
	font-size: 35px;
	position: absolute; 
        left: 370px;
        top: 438px;
}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/re.jpg"); /* arka plana resim ekler */
	
}
#kayit{
	background-color:white;
	width:175px;
	height:50px;
		position: absolute; 
        left: 140px;
        top: 178px;
	font-size:25px;
}
td{
	color:#FFFFF0;
}
a{
	color:white;
	width:115px;
	height:50px;
	position: absolute;
	left: 26px;
	top: 100px;
	font-size:25px;
	text-decoration:none; /* linkteki altyazıyı kaldırır */
	font-weight:bold;
}
</style>
<h3 id="h1"></h3>
<div id="yazi">
<span><a href="profile.php"><img src="HTML/ad.svg">Anasayfa</a></span>
</div>
<form id="form1" name="form1" action="" method="post">
<table width="450" height="114" border="0">
<tr>
<td width="199">Kullanıcı adı:</td>
<td width="246"><label for="user"</label>
<input type="text" name="user" id="user" /></td>
</tr>
<tr>
<td height="30">Şifre:</td>
<td><label for="pass"></label>
<input type="text" name="pass" id="pass" /></td>
</tr>
<tr>
<td>Adres:</td>
<td><label for="textarea"></label> 
<textarea name="adres" cols="45" rows="5"/></textarea> <label for="email"></label></td>
</tr>
<tr>
<td>Email:</td>
<td ><input type="text" name="email" id="email" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="kayit" id="kayit" value="Üye kayıt ekle" /></td>
</tr>
</table>
</form>
<?php
error_reporting(0);
echo '<meta charset="utf-8">';
$user=trim($_POST["user"]);
$pass=trim($_POST["pass"]);
$adres=trim($_POST["adres"]);
$email=trim($_POST["email"]);
$baglan=mysqli_connect("localhost","root","","mesajlaşmalar") or die ("veritabana bağlantıda bir sorun oluştu");
mysqli_query("set names 'utf-8'" );
mysqli_query("SET CHARACTER SET utf-8");
$sorgu=mysqli_query($baglan,"SELECT count(*) FROM users WHERE user='$user'");
$liste=mysqli_fetch_array($sorgu);
$sayi=$liste[0];
if($_POST){
	if(empty($user) or empty($pass) or empty($adres) or empty($email)){
		echo "<h3>Lütfen boş alan bırakmayınız</h3>";
	}
	else{
if($sayi!=0){
	echo"<h3>Üzgünüz bu üyenin daha önce kayıdı var</h3>";
}
else
{
	
	$yazdir=mysqli_query($baglan,"INSERT INTO users (user,password,adres,email) VALUES ('$user','$pass','$adres','$email') ");
	if($yazdir) {
		echo "<h3>Üye kaydınız alındı şimdi giriş yapabilirsiniz</h3>";
		header('refresh:3;url=login.php');
	}
	else {
		echo"<h3>Üye kayıt sırasında bir hata oluştu daha sonra tekrar deneyiniz</h3>";
	}
}
	}
}else{
echo "<h3>Sisteme 5 dakikada kayıt olun</h3>";
}
?>
</body>
</html>




