<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'fleurs-chats' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ')L3+fYH=nJ0$3f.>-w(e{,OO:%fmv4gS6)@u|$PG&uZ4GF>]}T?U+<%tLIXwBh@I' );
define( 'SECURE_AUTH_KEY',  'Q~_,eog5<(wfHd})UTsMCx[;/^>dTl_Q ;;8R=40G3QSx8uGIH:Um3g@IAwzz;+/' );
define( 'LOGGED_IN_KEY',    'BvQFLv] fF41Z?:zOi)}^m:GtNj<4sm.BsKlv%+f>+IZml<VvDZC[hjRPx,:M~!7' );
define( 'NONCE_KEY',        '`FcWE(|pu]QJQ542uJnh/4_GBz=f8WP>#L$KjGYi,-xFtdn>|nLzT1y}aVi#i{O*' );
define( 'AUTH_SALT',        'DvdaWKnwq6@3`j4@uDrhQE9CB]n;YS~{.r1[.BJQL-;3^<ip:|p}4b4mJ.n0v#~W' );
define( 'SECURE_AUTH_SALT', 'qF-=n5_fyPOrVPn]7^&(cJ;{@q(dUPF0iHq-1Kq]%a`y6)*4.Ie9UZ*4Jg]ki.,l' );
define( 'LOGGED_IN_SALT',   'Qc$;X45Y0MyNcKp&9md=Z_5iOJ!1KxME]e<Db0U.8l%1B}>xZk}I2<!ZNMcoOe2(' );
define( 'NONCE_SALT',       '?7aI|3V@p _nB1`CoKKP-TX5y9=l#On@!is+0ub#j$x+U4mh=[P#(?><N@ T Tzn' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
