<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Livre d'or</title>
</head>

<body>
Laisser moi un message:
<form method="post" action="index.php">
Pseudo:<input type="text" name="pseudo" /><br />
Message:<center><textarea name="message" rows="11"cols="75"></textarea></center>
<center><input type="submit"value="poster" /></center>
<center><input type="reset"value="tout effacer" /></center>
</form> 
<?php
$format = 'd-M-Y';
$time = date($format);
$contenu_fichier = file_get_contents('livredor.txt');
$contenu_fichier = nl2br("$contenu_fichier");
//$contenu_fichier = utf8_encode($contenu_fichier);
echo $contenu_fichier;
$fp = fopen('livredor.txt', "r+");
if (fpassthru($fp)) {
} else {
}
fclose($fp) ;
?>
<?php
$pseudo=$_POST['pseudo'];
$message=$_POST['message'];
$ouverture_du_fichier= fopen("livredor.txt", "r+" );
fwrite($ouverture_du_fichier,"<b>$pseudo</b> $time
<b><font color=red>Message:</font></b> $message


" );
fclose($ouverture_du_fichier);
?>
votre message a été enregistré le voici:</br>
<center><b><?php echo $_POST['pseudo'];?></b> <?php  echo $_POST['time'];?></br></center>
<center>Message:<?php echo $_POST['message'];?></center></br></br>
</body>
</html>
