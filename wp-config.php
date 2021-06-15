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
define( 'DB_NAME', 'concourschant' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.B7@cb(PwCv#~Cnjlh(6#6Mfh6ZGB4e_e^{g3Uw`cbRe.MYI?r9l9[Hp9*mxfZy6' );
define( 'SECURE_AUTH_KEY',  '~6gid%{S`7B#!Q+/~G&#]2BBAY9Y)IwsUqqA>R^*C.LEGPN,f~uQjjwU=y|APx<h' );
define( 'LOGGED_IN_KEY',    'qRs26SDL%k.=VkKku^OS$J.IA~e069c,w5(2=)=4[(!J(gw^_^(UO$!k$=9hSLYo' );
define( 'NONCE_KEY',        'ECGVng_9_XA-=Brmit@K%%=*C<PZTi~M&)g=9@MqhIKS}Jz cfdL:.Ap&%z?mu2B' );
define( 'AUTH_SALT',        'uERx*`T(F,9?nwh95B#/Ol+Oz+8y?y&c0Ff5Now~(1qq_V+,|nS0ltwqomY$22.%' );
define( 'SECURE_AUTH_SALT', '4hbmQro`4Y(c:3rWm1l7_9vU.Eyg`})3F-L#AcH]D2+kN{h;@5)Q<, ^2+DFZyJH' );
define( 'LOGGED_IN_SALT',   '}A16XL)Ev%d#D1_aB4j!nvGS/gl,JgK4IUL&pb$DdH>)X_PhQpJ2+RA2UJ9cC$7=' );
define( 'NONCE_SALT',       'Ke|$>t$;h[ZY>oEO(%nO-E{FDN$XyEa:BdeCbqxstCrHp,OAXVF0b9DISR=#w1jy' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cc_';

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
