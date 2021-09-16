<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */

if (file_exists(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-config-local.php')) {
	require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'wp-config-local.php';
} else {
	define('DB_NAME', '');
	define('DB_USER', '');
	define('DB_PASSWORD', '');
	define('DB_HOST', '');
	define('WP_DEBUG', false);
}
define('WP_CACHE', true);
define( 'WPCACHEHOME', dirname(__FILE__) . '/wp-content/plugins/wp-super-cache/' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTOMATIC_UPDATER_DISABLED', true);
define('ALLWAYS_GERNERATE_LESS', true);
define('WP_MEMORY_LIMIT', '64M');			// Wenn Suchen und Ersetzen nicht ausführbar ist -- In SRV: ./etc/php/php.ini (Kein apache restart wenn Mittwald SRV) upload_max_filesize = 64M -- post_max_size = 64M   ebenfalls schalten
define( 'ALLOW_UNFILTERED_UPLOADS', true );
define('DISALLOW_FILE_EDIT', true);		// BSI Hinweis

/* @package WordPress
*/
define('WP_POST_REVISIONS', 3);
// ** MySQL settings - You can get this info from your web host ** //

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '850O({;0~dOzp#(opm.|4=0{GIX@+H|f1+9hS Lk[LLJOq% j)7BYcmw3_!/M [+');
define('SECURE_AUTH_KEY',  'PLw]D+}fds*Gcg|!9!s^<|/{^/16*SZUj{%yV?%:._PSHbg93F%m2B^X+wg1pB6P');
define('LOGGED_IN_KEY',    'X-W6dh7b7hq  M%Cw:;&Q=D7A[U$%5`%*Sv}Jcp2}b?/-NsKky|v=~DEs~pE3+Q+');
define('NONCE_KEY',        'Y- a9=gA-^,}3,+voOP%a,hN}t}%xh$v?1DK+{{6zVm}SZ IJI(6zueIkx+H-m-y');
define('AUTH_SALT',        'a(@p>lzXD5K/~c5zQK+m%hMr^-C/-Z.2l:jTU~OSaw=Er:E2g-9Ill,_ ckj5_]$');
define('SECURE_AUTH_SALT', '(yq0K2E,-+M3.-C={>}Z>B*%kQxX`XV<9M%JZ.j2V?z7w2}F2q7a>w u}!CD?/Fv');
define('LOGGED_IN_SALT',   's{ :CQ%NzJ}LZo1qfY8O.v{pW,?]SWPuj*C-_-l|+?G^e./*n6 l]:T<@IVO.<+S');
define('NONCE_SALT',       'W=Y&MaOI1=Eo__7 /|-<id.xnG>P2*/}PyKYR0+}t:Bs97aSa[-.+b$`Ke3By,R7');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
