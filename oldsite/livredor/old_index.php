<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Livre d'or</title>
</head>
<!-- Ici on met la fonction javascript qui nous servira à
Valider l'adresse e-mail -->
</head>
<body>
<?php
include('config.inc.php');
// Ici on ouvre une connexion au serveur MySQL
// Voir le tutorial sur ce sujet
// Si le formulaire à été soumis, $ajout vaudra true
if ($ajout) {
// Ici se trouve le script d'ajout du message
// En base de données, guestbook1.php
}
// Ici se trouve le script permettant d'afficher la liste de messages
// guestbook3.php
// Ici se trouve le formulaire d'ajout de message
// guestbook2.php
// Et ici on ferme la connexion à la base de données
@mysql_close();
?>
</body>
</html> 