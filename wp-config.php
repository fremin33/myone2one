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
define('DB_NAME', 'myone2one');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Jm.=*G:^BQ[|A,SWvv;f5E8JSn6gLqD~p!9{Z#@Fq9CIji[d@hJC,=KGC^O.3ML2');
define('SECURE_AUTH_KEY',  'Lsa/-wz.j)!mr(VOL`KSj2W Vi_A9H3COuWyl~]$_W/-b9l-vXC,xQ^Sopv?/1=L');
define('LOGGED_IN_KEY',    'z@v2NT}xhN`rG~J2cb:}I|M@)NH$tVk/ A>4(yft:P,3(kQ15a$Qw2v/r,6shU+2');
define('NONCE_KEY',        'I7.:pe;SpT8}16j ]avaHjKm/8!<};dCzc[?Q@l}>YPfEx6hAFs6J0!ZH&9+aBs0');
define('AUTH_SALT',        'X>%D_zPIENryzbV_>`z88jq%O*F9O7E)=yA6 :pC>2fe4Dn0lxK2Lb%?-;Vs_dK[');
define('SECURE_AUTH_SALT', '!PM,AXmKHBMMWrLAx[-Cq>Efz/M!JyY+7v]Yw7ANmr(QIn`%I4WVS/MAFhdk/:ET');
define('LOGGED_IN_SALT',   'u$Z(zgu8)^~q^1!X;9WCuF:_|VJCN:3p[2cU8_OM=/vsT[i{L$;_|8:Shj%:n  A');
define('NONCE_SALT',       'gW7*`{km{4$qx80s=ac:R[5<^D2y`RT(3Q<.<37<]0h}s|bAq|d?_Dq~oL#tk}ei');
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