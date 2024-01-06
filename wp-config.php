<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'simple-vintage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4xYAj/]uwYMhPgJj;/4fx(D#:tzCX{k)lZlM9,[m=lU*e}qfAW.2+o~T{h>`1r*+' );
define( 'SECURE_AUTH_KEY',  'y>8q.$tB1S),B%T5rN!k:U9qvx#[< MimE:x<^7a^i.}[u4)PfEW3[ j/ZK-n`;H' );
define( 'LOGGED_IN_KEY',    'A/r/(!]a2P}F}OvIl#8&}>~/a88wj9!agM](1zv_WfB32lveA]Og>9L !U;;|#iu' );
define( 'NONCE_KEY',        'qFAOFrQo~sM!A2A38Tv1|9fF-2cS?4$H<%Id9VMK+G2:xQx=fePKAS:UA4UeB4JL' );
define( 'AUTH_SALT',        'h7E0xx/WBECSqo#jz& Q}-@5/K1fg1h8y_`h|w3$H8.,%BDbtpy8+tkY|fM[CJpe' );
define( 'SECURE_AUTH_SALT', '7N]Th<.L_gY0 v?X0zD5ElqNMHzMc)DN3 )PP(KVH+eaRf)#1<i]JVVL$3/_qIp4' );
define( 'LOGGED_IN_SALT',   '3L}i]Gq0>,UjL1W>RQad0%P*f3OEsC_AjW!bC>rEK@$>W~!eS|aRgNGK_2}75V{6' );
define( 'NONCE_SALT',       '!jC)ss+n/jzq4OkrrQ$oE:5R!{#D}}Sy>_@7YF^]Vo)9-&<u-+^HcM-mU:A/ts7s' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
