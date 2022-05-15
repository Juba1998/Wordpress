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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/**
 * Type de collation de la base de données.
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
define('AUTH_KEY',         '^2%O44AyetwTA^lo-:}.lSzST%fue&~JU)5Eprn&]W=(a5NX(N~:eFlnjVw43+B+');
define('SECURE_AUTH_KEY',  '&|Oo)H>ni{Q[|$oY;L(h[lmmgwxT=GZJF[irjZYeaB5<RD=%8S2@|f;ZKY}1%.HU');
define('LOGGED_IN_KEY',    'gDgCRr:HAH.=&s]`[f!Bpw@Xj^HW&^Z6Os>-(k}{6kEcs*57mUj@=abure|BWjE+');
define('NONCE_KEY',        'wH`X[vBSgb@!Z7+9>`X`nB_Ue]>`}PmkDXZ*5BOTQTINGh0vGqZ{^T:|Y|KYwCVs');
define('AUTH_SALT',        'HjI4st;{wOIS+`v++4D+P(uTBeB_M^qVysjUa7N!i<lM# A<liqVm`/0`T56lh9A');
define('SECURE_AUTH_SALT', '4ck!p&UPuN!H{=[=tPB=nCOs{b:cn;}@gZbrQ(sB]x?H}vBmO>iYAjnkvfYmsl8%');
define('LOGGED_IN_SALT',   'u*YIloo?|/S@ha@yI2N=ix0_?kk:ws;qAKQXRsTzMNkJ&H6Lkr:;FOe:OA]yK>o>');
define('NONCE_SALT',       '4P<D;%f/`XKU8G7K[BN7XwN EbgVcQKxW DQ-OoS>5/cTMv.N$zZt=-CgnO|P1,I');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_table';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH'))
  define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
