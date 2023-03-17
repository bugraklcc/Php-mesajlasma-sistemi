<style>
#form1{
 width: 70px;
        height: 70px;
        position: absolute; /* pozisyon ayarları için kullanılır */
        left: 420px;
        top: 258px;
		box-shadow:10px 10px 5px #666;
		opacity:0.8; // saydamlık özelliği verir
      filter:alpha(opacity=60);
       
}
td{
	color:black;
}
div{
	position: absolute; /* pozisyon ayarları için kullanılır */
        left: 370px;
        top: 158px;
		font-size=25px;
}
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    background-image:url("HTML/r3.jpg");
	
}
#resim{
  -webkit-filter: blur(2px); // resimi bulanıklaştırmak için kullanılır
  filter: blur(2px);
}

#resim:hover{
  -webkit-filter: blur(0);
  filter: blur(0);
}
#mesajgonder{
width:200px;
height: 70px;
position: absolute; /* pozisyon ayarları için kullanılır */
        left: 150px;
        top: 178px;
		font-size:25px;
}
a{
	color:white;
	width:115px;
	height:50px;
	position: absolute;
	left: -296px;
	top: 0px;
	font-size:25px;
	text-decoration:none;
	font-weight:bold;
}


</style>


<?php include("baglan.php"); ?>

<!DOCTYPE html PUBLİC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1/transitional.dtd">
<html xmins="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type content="text/html; charset=utf-8" />
    <title>Mesaj Gönderme Sayfası</title>
</head>


<body>
<img src="HTML/r3.jpg" id="resim">
<div id="yazi">
<span><a href="profile.php"><img src="HTML/ad.svg">Anasayfa</a></span>
</div>


<form id="form1" name="form1" method="post" action="">
    <table width="614" height="164" border="0">
        <tr>
            <td width="155" height="45px" bgcolor="gold"><h3>Mesaj başlığı</td>
            <td width="443" ><input type="text" name="baslik" id="baslik" /></td>
        </tr>
        <tr>
            <td height="45px" bgcolor="gold"><h3>Mesaj</h3></td>
            <td ><label for="mesaj"></label>
                <textarea name="mesaj" id="mesaj" cols="45" rows="5" ></textarea></td>
        </tr>
        <tr>
            <td ><input type="hidden" name="hide" id="hiddenField" value="<?php echo date('d.m.Y H:i:s'); ?>" /></td>
            <td ><input type="submit" name="mesaj gonder" id="mesajgonder" value="Mesaj gönder" /></td>
        </tr>
    </table>
</form>
<?php
if ($_POST) {
    $baslik=strip_tags(trim($_POST["baslik"]));
    $mesaj=strip_tags(trim($_POST["mesaj"]));
    $hide=$_POST["hide"];
    $id = $_GET["id"];
    session_start();
    $user = $_SESSION["uye"];
    $sorgu = mysqli_query($baglan, "select id from users where user='$user' ");
    $donen = mysqli_fetch_array($sorgu);


    $gonderen_id= $donen["id"];

    $query=mysqli_query($baglan,"select * from users where id='$id' ");
    $querydonen=mysqli_fetch_array($query);

    $alan_id=$querydonen["id"];
    $yazdir=mysqli_query($baglan,"INSERT INTO mesajlar (gonderen_id,alan_id,mesaj,tarih) VALUES ('$gonderen_id','$alan_id','$mesaj','$hide') ");
if($yazdir){

    echo "mesajınız başarıyla gönderildi";
	header('refresh:2;url=profile.php');

}else{
    echo "mesaj başarısız";
}

}else{
    $id = $_GET["id"];
    $query=mysqli_query($baglan,"select * from users where id='$id' ");
    $querydonen=mysqli_fetch_array($query);
	echo "<div>";
    echo "<strong><font color=red size=25px>".$querydonen["user"]."</font><font color=white size=6px >"."&nbsp; a mesaj gönderme sayfası</strong>";
	echo "</div>";
}



?>
</body>
</html>