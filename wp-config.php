<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'SHOP');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c]!53];?rT/}U*W>USkF9H9yK+9^_lGQhc&qMYGUF+]Wx9)1p4pSqSTPv):& JX8');
define('SECURE_AUTH_KEY',  '5m[ypst?D8P[i7/V8{#+rC35uOY4TagJ8x)`OyQ=c0irToJk/2V(M7NB9PjzB>]a');
define('LOGGED_IN_KEY',    'gd{X5.4s8zLRL*0^ft`,_CW%o7Vb=1rn=(ld$=bLs1TJ^h|9+IDu~y>pPLbWWV3p');
define('NONCE_KEY',        'Dj=_smPh+wih?$$SAk5DIaRb95k60(1j]]*UaLvwHr#-6q`U uV/AX<ns?J@Yj,Z');
define('AUTH_SALT',        '>u56` RQ)u8-$aC?xWd5R(wfm,7YkDH!D;bI^y2J]7$.ppY0ds]Gt{v=+hxw))ND');
define('SECURE_AUTH_SALT', '?}Rfb$[{-lXEwFnSX mIT!A,2-h6$cX1}G#`@4Nc]xI~5wi`4J$TG%Vp^+Yh1`Nv');
define('LOGGED_IN_SALT',   'yQ5*E./XiD?ArjDcZY,h8C7m-&`miN>7MPWOr&!.acC18C`VsRxVNuv&*rIt<LVV');
define('NONCE_SALT',       'B}^7kZsm05fe6hD`p9~T|%#aFhmj%`wU3[f;|WQ4&S#,-kVeqw4p=m%|!5O|wbE!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');