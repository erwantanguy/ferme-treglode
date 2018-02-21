<?php 
// On récupère les données postées : Voir les tutos dans la section "Débutez"
// On vérifie que les champs ne sont pas vides
if (!empty($name) && !empty($lemail) && !empty($comment)) {     
// Définit la variable de date
$date = time();
// Créé la requête
$query = "INSERT INTO $table(date,name,email,comment) VALUES('$date','$name','$lemail','$comment')";
// Exécute la requête d'insertion du message
$result = mysql_query($query) or die('Erreur SQL : '.mysql_error());
} else {
// On affiche un message d'erreur
echo '<script language="javascript">alert(\'Merci de remplir tout les champs.\');location.href='.$HTTP_REFERER.';</script>';
echo '<noscript>Merci de remplir tout les champs. <a href="'.$HTTP_REFERER.'">retour</a></noscript>';
}
?> 