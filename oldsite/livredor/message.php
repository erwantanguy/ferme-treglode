<?php setcookie("ip",$_SERVER['REMOTE_ADDR'],time()+.3600*60*90); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vérification du message - Centre équestre - Ferme Le Tréglodé</title>
<link rel="shortcut icon" href="http://www.ferme-letreglode.fr/images/preview_16x16.ico" />
<link href="print.css" rel="stylesheet" type="text/css" media="print" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="menu.css" rel="stylesheet" type="text/css" />
<link href="nl.css" rel="stylesheet" type="text/css" />
<link href="form.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/menuG.js"></script>
<!--[if IE 7]>
<link href="ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>
	<div id="fond">
    <div id="page">
    	<dl id="menuG">
        	<dt><a href="http://www.ferme-letreglode.fr/index.html"><img src="images/logoferme.gif" alt="logo" border="0" title="logo" /></a></dt>
<dd><!-- menu réalisé par Thomas Dedericks, soumis à licence Creative Commons "by" et consultable ici http://css.alsacreations.com/Tutoriels-JavaScript/Creer-un-menu-accordeon-avec-jQuery  class="open_at_load"-->
            	<ul id="navigation">
        <li class="toggleSubMenu"><a href="http://www.ferme-letreglode.fr/index.html" title="accueil">accueil</a></li>
        <li class="toggleSubMenu"><a href="#" title="vie à la ferme">vie à la ferme</a>
            <ul class="subMenu">
                <li><a href="http://www.ferme-letreglode.fr/ferme.html" title="La ferme">La ferme</a></li>
                <li><a href="http://www.ferme-letreglode.fr/equipe.html" title="L'équipe">L'équipe</a></li>
              	<li><a href="http://www.ferme-letreglode.fr/cavalerie.html" title="la cavalerie">La cavalerie</a></li>
                <li><a href="http://www.ferme-letreglode.fr/equipement.html" title="L'équipement">L'équipement</a></li>
                <li><a href="http://www.ferme-letreglode.fr/animaux.html" title="Les animaux de la ferme">Les animaux de la ferme</a></li>
            </ul>
        </li>
        <li class="toggleSubMenu"><a href="#" title="cours">cours</a>
            <ul class="subMenu">
                <li><a href="http://www.ferme-letreglode.fr/babyponey.html" title="baby poney">Baby-Poney</a></li>
                <li><a href="http://www.ferme-letreglode.fr/adolescents.html" title="adolescent">Adolescents</a></li>
                <li><a href="http://www.ferme-letreglode.fr/adultes.html" title="adulte">Adultes</a></li>

            </ul>
        </li>
        <li class="toggleSubMenu"><a href="http://www.ferme-letreglode.fr/stages.html" title="stages">stages</a>
        </li>
        <li class="toggleSubMenu"><a href="http://www.ferme-letreglode.fr/randonnees.html" title="randonnées">randonnées</a>
        </li>
        <li class="toggleSubMenu"><a href="http://www.ferme-letreglode.fr/accueilgroupe.html" title="accueil de groupe">accueil de groupe</a>
        </li>
    </ul>  
           </dd>
        </dl>
       
        <div id="content">
			<img src="images/poneys_bandeau1.jpg" alt="poneys" class="bd" /><img src="images/poneys_bandeau2.jpg" alt="poneys montés" class="bd" /><img src="images/chevaux_bandeau3.jpg" alt="chevaux au bord de la mer" /><div id="faux">
			<div id="texte">
              <h1>vérification du message</h1>
                <!--<h2>le tréglodé</h2> -->
                <div class="formulaire"><?php
// Pour contrer les spams, on va faire une petite regex
if(preg_match("!http|/|www|\.[A-Za-z]{2,4}!is",@$_POST['message']))
{
   echo "<blockquote><h3>Anti-Spams</h3>
      <p><em>Les URL et les slashs sont interdits.
                Pensez aussi à mettre un espace après un point.</em></p>
                </blockquote>\n</div>
              <div class=\"formulaire\"><a href=\"index.php\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> retour</a></div>
           </div>            <div id=\"menuD\">
            	<ul class=\"second\">
                	<li><a href=\"http://www.comboutique.com/fermeletreglode\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> boutique</a></li>
                  <li class=\"news\"><a href=\"http://www.ferme-letreglode.fr/newsletter.html\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> newsletter</a></li>
       		  </ul>
                	<div class=\"info\">
                    	<ul>
                        	<li class=\"titre\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> L'info en <img src=\"images/pucecroix.gif\" alt=\"puce croix\" /></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/horairestarifs.html\">Les horaires / Les tarifs</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/acces.html\">L'accès</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/contacts.html\">Les contacts</a></li>
                        <li><a href=\"http://livredor.ferme-letreglode.fr/\">Livre d'or</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/liens.html\">Quelques liens</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/mentionslegales.html\">Mentions légales</a></li>
                    </ul><img src=\"images/poneys_cours.jpg\" alt=\"cours poneys\" class=\"deco\" /></div>
    <ul id=\"contextuel\">
                       	  <li><a href=\"http://www.ferme-letreglode.fr/galerie.html\">galerie photos / vidéos</a></li>
                          <li><a href=\"http://www.ferme-letreglode.fr/faq.html\">F.A.Q.</a></li>
                    </ul>
                <div class=\"pied\"></div>
              </div>
            	<div class=\"pied\"></div>
			</div>
<div id=\"basdepage2\"></div></div>
<div class=\"pied\"></div>
            </div>
   
   
    </div>
<div class=\"pied\"></div>
</body>
</html>";
   exit();
}

// Si le cookie est �gale � l'ip du client alors on le stop
if(isset($_COOKIE['ip']) && $_COOKIE['ip']==$_SERVER['REMOTE_ADDR'])
{
       echo "<h3>Vous ne pouvez émettre qu'un seul avis<br />et vous l'avez déjà donné !</h3></div>
              <div class=\"formulaire\"><a href=\"index.php\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> retour</a></div>
           </div>            <div id=\"menuD\">
            	<ul class=\"second\">
                	<li><a href=\"http://www.comboutique.com/fermeletreglode\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> boutique</a></li>
                  <li class=\"news\"><a href=\"http://www.ferme-letreglode.fr/newsletter.html\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> newsletter</a></li>
       		  </ul>
                	<div class=\"info\">
                    	<ul>
                        	<li class=\"titre\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> L'info en <img src=\"images/pucecroix.gif\" alt=\"puce croix\" /></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/horairestarifs.html\">Les horaires / Les tarifs</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/acces.html\">L'accès</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/contacts.html\">Les contacts</a></li>
                        <li><a href=\"http://livredor.ferme-letreglode.fr/\">Livre d'or</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/liens.html\">Quelques liens</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/mentionslegales.html\">Mentions légales</a></li>
                    </ul><img src=\"images/poneys_cours.jpg\" alt=\"cours poneys\" class=\"deco\" /></div>
    <ul id=\"contextuel\">
                       	  <li><a href=\"http://www.ferme-letreglode.fr/galerie.html\">galerie photos / vidéos</a></li>
                          <li><a href=\"http://www.ferme-letreglode.fr/faq.html\">F.A.Q.</a></li>
                    </ul>
                <div class=\"pied\"></div>
              </div>
            	<div class=\"pied\"></div>
			</div>
<div id=\"basdepage2\"></div></div>
<div class=\"pied\"></div>
            </div>
   
   
    </div>
<div class=\"pied\"></div>
</body>
</html>
";

        // On stop le script
        exit;
}
// Fin de la partie facultative

// Mettons le (future) fichier dans une variable
$commentaires="livredor.txt";

// assignons nos 2 variables du formulaire et on en profite pour les prot�gers des balises HTML
$pseudo=htmlspecialchars($_POST['pseudo']);
$message=htmlspecialchars($_POST['message']);

// Pensons au retour � la ligne et au stripslashes pour la variable $message
$message=stripslashes(nl2br($message));

// On met en place quelques conditions pour les cellules (nom et message)
// On v�rifie avant tout si le fichier existe si ce n'est pas le cas on le cr�e
if(!is_file($commentaires))
{
        $verif=@fopen($commentaires,"w+");
}

// On v�rifie que le login ou le message ne soient pas vide
elseif (trim($message)=="" || trim($pseudo)=="")
{
        echo "Vous devez remplir tous les champs ! <a href=\"index.php\">Retour sur le livre d'or</a></div>
              <div class=\"formulaire\"><a href=\"index.php\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> retour</a></div>
           </div>            <div id=\"menuD\">
            	<ul class=\"second\">
                	<li><a href=\"http://www.comboutique.com/fermeletreglode\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> boutique</a></li>
                  <li class=\"news\"><a href=\"http://www.ferme-letreglode.fr/newsletter.html\"><img src=\"images/pucecarre_vertf.gif\" alt=\"puce verte\" /> newsletter</a></li>
       		  </ul>
                	<div class=\"info\">
                    	<ul>
                        	<li class=\"titre\"><img src=\"images/pucecarre_vertc.gif\" alt=\"puce verte info\" /> L'info en <img src=\"images/pucecroix.gif\" alt=\"puce croix\" /></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/horairestarifs.html\">Les horaires / Les tarifs</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/acces.html\">L'accès</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/contacts.html\">Les contacts</a></li>
                        <li><a href=\"http://livredor.ferme-letreglode.fr/\">Livre d'or</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/liens.html\">Quelques liens</a></li>
                        <li><a href=\"http://www.ferme-letreglode.fr/mentionslegales.html\">Mentions légales</a></li>
                    </ul><img src=\"images/poneys_cours.jpg\" alt=\"cours poneys\" class=\"deco\" /></div>
    <ul id=\"contextuel\">
                       	  <li><a href=\"http://www.ferme-letreglode.fr/galerie.html\">galerie photos / vidéos</a></li>
                          <li><a href=\"http://www.ferme-letreglode.fr/faq.html\">F.A.Q.</a></li>
                    </ul>
                <div class=\"pied\"></div>
              </div>
            	<div class=\"pied\"></div>
			</div>
<div id=\"basdepage2\"></div></div>
<div class=\"pied\"></div>
            </div>
   
   
    </div>
<div class=\"pied\"></div>
</body>
</html>";
       
        // On sort du script !
        exit;
}

// Apr�s ces quelques v�rification d'usage on passe  � l'ex�cution de ce formulaire

       
        // Si ok on ouvre en �cirture-enregistrement du fichier message.txt
        $verif=@fopen($commentaires,"r+");
               
        // On analyse les anciennes donn�es et on les stocks
        $stock=@fread($verif,filesize($commentaires));
       
        // On met la date dans une varialbe
        $date=date ("d/m/Y à H:i");
       
        // On param�re le tout dans la variable $opinion
        $opinion="<div class=\"name\"><b>".$pseudo."</b> - a écrit le : ".$date."<br /></div>\n<span class=\"txt\">".$message."<br /></span>\n";
       
        // On remet le curseur du fichier en d�but de ligne
        rewind($verif);
       
        // On ins�re le nouveau commentaire
        fputs($verif,$opinion." \n".$stock);
       
        // On clore le fichier
        fclose($verif);
       
        // On affiche le tout
        readfile($commentaires);


?>
</div>
              <div class="formulaire"><a href="index.php"><img src="images/pucecarre_vertc.gif" alt="puce verte info" /> retour</a></div>           </div>            
			<div id="menuD">
            	<ul class="second">
                	<li><a href="http://www.comboutique.com/fermeletreglode"><img src="images/pucecarre_vertf.gif" alt="puce verte" /> boutique</a></li>
                  <li class="news"><a href="http://www.ferme-letreglode.fr/newsletter.html"><img src="images/pucecarre_vertf.gif" alt="puce verte" /> newsletter</a></li>
       		  </ul>
                	<div class="info">
                    	<ul>
                        	<li class="titre"><img src="images/pucecarre_vertc.gif" alt="puce verte info" /> L'info en <img src="images/pucecroix.gif" alt="puce croix" /></li>
                        <li><a href="http://www.ferme-letreglode.fr/horairestarifs.html">Les horaires / Les tarifs</a></li>
                        <li><a href="http://www.ferme-letreglode.fr/contact_acces.html">Les contacts / L'accès</a></li>
                        <li><a href="http://www.ferme-letreglode.fr/agenda.html">L'agenda</a></li>
                        <li><a href="http://livredor.ferme-letreglode.fr/" class="open">Livre d'or</a></li>
                        <li><a href="http://www.ferme-letreglode.fr/liens.html">Quelques liens</a></li>
                        <li><a href="http://www.ferme-letreglode.fr/mentionslegales.html">Mentions légales</a></li>
                    </ul><img src="images/poneys_cours.jpg" alt="cours poneys" class="deco" /></div>
    <ul id="contextuel">
                       	  <li><a href="http://www.ferme-letreglode.fr/galerie.html">galerie photos / vidéos</a></li>
                    </ul>
                <div class="pied"></div>
              </div>
            	<div class="pied"></div>
			</div>
<div id="basdepage2"></div></div>
<div class="pied"></div>
            </div>
   
   
    </div>
<div class="pied"></div>
        <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6516685-2");
pageTracker._trackPageview();
} catch(err) {}</script>
      </body>
</html>
