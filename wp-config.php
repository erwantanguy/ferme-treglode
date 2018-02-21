<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'fermeletnhbdd');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'fermeletnhbdd');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Rp33UGjehegg');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'fermeletnhbdd.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'MMW5FeTu5 cvW?w(zY3=2cLU`&3?z .2_Wq[9;iD?dC8hpGtTZWOe16(8Lt_VZe|');
define('SECURE_AUTH_KEY',  'Uk(8@.l~4,M!k~*tOp}OO#^LG]Ys|xU${{_F1=/gEGKg&o!]bT,5it<+}*KJ19<^');
define('LOGGED_IN_KEY',    '7g2pnSb_OOH9atfE_}ol4I5`Gj]=M-A7vDC0RX{*^E*1IqwOATu;p~BV3qlj/1+8');
define('NONCE_KEY',        'HzOd@nLxS^&x#X7Ie,gq&!X,7Ud~pz9>?=pZC8Jo8;]ToT#F4jvV33_4-2])uZu<');
define('AUTH_SALT',        'P#`xfb7DI>EboR#9@:=OSvkWqeP!CsdIwJOyMt#%/Y5F}M;o8NyvEj|R=$mA=+T`');
define('SECURE_AUTH_SALT', 'cgCJyfURDhSGHRn6&;k8v9iiR=iz*l7|+YUnr:_9P?U9|@A-hS/lpnXpyj8]7dg=');
define('LOGGED_IN_SALT',   'n];IvOZb9>H#8`]]Dg^Tl3JVDL_yj!1m64iy8pB8}%<+r-n6U`fKyp@Ps=Enqa.9');
define('NONCE_SALT',       '6t>=m3H0I5@I@)|Ovx<cr)aJ>R)l&CSS_{H+I&|IX,r)vbtW]#X,(0<I-_Hb{$`9');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');