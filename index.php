<html>

 <head><link rel="stylesheet" href="style.css"></head>
 <body background="android_stock-1366x768.jpg">
<?php 

if(isset($_POST["ad"])&& (isset($_POST["sifre"]))){
	if($_POST["ad"]=="davut" && $_POST["sifre"]=="004"){
		include("kitap.php");
		header('refresh:0;'.' url=kitap.php');
		}
		else
		echo "<hr>Kullanici adi veya sifre yanlis<hr>";
		}

?>
<center>

<form method="post">
<input type="text" name="ad" id="aad" placeholder="Kullanici Adi"></input><br/>

<input type="password" name="sifre" id="pass" placeholder="Sifreniz"></input><br/>
<button type="submit" id="yolla" name="gonder" value="Giris">Giris</button>

</form>

</center>
</body>
</html>