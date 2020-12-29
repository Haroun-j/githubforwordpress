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
define( 'DB_NAME', 'githubforfordpress_db' );

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
define( 'AUTH_KEY',         ';diEb)t{8,]xYuQG]72FgVa(MKakOdL{Q_.R#M:R7kdO#F^BTu/wi`Gh-<zPYe=f' );
define( 'SECURE_AUTH_KEY',  '~8g-5js_(<[]e+`84)/c=32&HY/[%XN! E%CM_2b%KxfIA(RF-s(2JTo_k}iuOcZ' );
define( 'LOGGED_IN_KEY',    '3;z,:mH;da@QS=|sMuiw5T[B~W)4fS|%TYpQ!R;>]Y|;izbT&VqC>$+qWja-BEb}' );
define( 'NONCE_KEY',        'FY1!k~2p^yVl:;XN8SBm*87_$bfX.<$^lB~!s|PGDesdrQ>1Z3=v=ZsVA8)U$Kj$' );
define( 'AUTH_SALT',        'fb.f[4K]znJ-T#(]5uLW+:/:e9q%V<#Z8<|-F8JPKX`#V(OhgwuPWB$4w%)n>$D*' );
define( 'SECURE_AUTH_SALT', 'SZZKKs+@!}xl7vw nwaT?NZ:U(B+s$ZwTc;y;3)*_3v3Gh@#(}0_n6Y3%ns]m Ed' );
define( 'LOGGED_IN_SALT',   '[$25^x@VS 3AWSu$(@Ohx9siBBEhib6TC75c}UG{8D2gjH6)[7^6Tng)8YL@!<l&' );
define( 'NONCE_SALT',       'p `uxJ0:|N<Xu}RF@9%4DG#V1yyYQ$)cR@.1aT(l|f-,M;a4:;iO5ZJz~h(/t`N!' );
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
