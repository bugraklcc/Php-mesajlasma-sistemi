<?PHP include("baglan.php"); 
error_reporting(0);
?>
<?php
session_start();
if(isset($_SESSION["uye"])){
	header("location:profile.php");	
}
?>
<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type content="text/html; charset=utf-8" />
<title>Giriş Sayfası</title>
</head>
<style>
#login{
	background-color:white;
	width:115px;
	height:50px;
		position: absolute; 
        left: 140px;
        top: 78px;
		font-size:25px;
	
}
#form1{
 width: 70px;
        height: 70px;
        position: absolute; 
        left: 430px;
        top: 418px;
		
       
}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/re.jpg");
	
	
}

h3{
	color:	#FFFFF0;
	font-size: 35px;
	font-weight: bold;
	position: absolute; 
        left: 430px;
        top: 318px;
		
}

a{
	position: absolute; 
        left: 300px;
        top: 158px;
		width:100px;
		font-size:20px;
		color:white;
		text-decoration:none;
		
}

    </style>
<body>

<h3 id="h1"></h3>
<form id="form1" name="form1" method="post" action="">
<table width="501" height="70" border="0">

<tr>
<td bgcolor="		#FFD700">Kullanıcı adı :</td>
<td><label for="user"></label>
<input type="text" name="user" id="user" /></td>
</tr>
<tr>
<td bgcolor="		#FFD700">Şifre :</td>
<td><input type="password" name="pass" id="pass" /></td>
</tr>
<tr>
<td ></td>
<td><label for="pass"></label>
<input type="submit" name="login" id="login" value="Giriş" />

</label></td>
</tr>

<div>
<span><a href="form.php">Kaydol</a></span>
</div>
</table>
</form>


<?php
error_reporting(0);
$user=$_POST["user"];
$pass=$_POST["pass"];
if($_POST){
$sorgu=mysqli_query($baglan," SELECT count(*) FROM users WHERE user='$user' AND password='$pass' ");

$liste=mysqli_fetch_array($sorgu); /* fonksiyonu döngüye sokar */

$durum=$liste[0];

if($durum==1){
	
	session_start(); /* başlatmak için kullanılan komut */
	$_SESSION["uye"]=$user;
	echo "Hoşgeldiniz "."<strong>".$user."</strong> giriş başarılı oldu";
	
	header("location:profile.php");
	
	

	
	
	
	
}else {
	
	echo "<h3>Kullanıcı adı yada şifre hatalı</h3>"; 
	
}

}

else{ echo "<h3>Lütfen giriş yapınız </h3>";
}


?>

</body>
</html>