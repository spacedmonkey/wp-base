<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Add in local settings **/
$local_config = __DIR__ . '/local-config.php';
if ( file_exists( $local_config ) ) {
	require_once $local_config;
}

/** Added in composer autoloader **/
require_once __DIR__ . '/vendor/autoload.php';

/** Batcache config **/
require_once __DIR__ . '/batcache-config.php';

/** Location of the DB config file for HyperDB **/
define( 'DB_CONFIG_FILE', __DIR__ . '/db-config.php' );



/**
 * Disable updates
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false );
/**
 * Crons
 */
define('DISABLE_WP_CRON', true);
define('ALTERNATE_WP_CRON', true );
/**
 * Disable file editor
 */ 
define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true );

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);



$http_host = $_SERVER['HTTP_HOST'];

define('COOKIE_DOMAIN', $http_host);

if ( isset($_SERVER['HTTPS']) ) {
        if ( 'on' == strtolower($_SERVER['HTTPS']) || '1' == $_SERVER['HTTPS'] ) {
                $http_host = "https://{$http_host}";
        } else {
                $http_host = "http://{$http_host}";
        }
} else if ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
        $http_host = "https://{$http_host}";
} else {
        $http_host = "http://{$http_host}";
}
define('WP_PLUGIN_DIR',   ABSPATH . 'wp-content/plugins' );
define('WP_PLUGIN_URL',   "{$http_host}/wp-content/plugins" );
define('WPMU_PLUGIN_DIR', ABSPATH . 'wp-content/mu-plugins' );
define('WPMU_PLUGIN_URL', "{$http_host}/wp-content/mu-plugins" );
define('WP_CONTENT_DIR',  ABSPATH . 'wp-content' );
define('WP_CONTENT_URL',  "{$http_host}/wp-content" );
define('WP_HOME', $http_host);
define('WP_SITEURL', $http_host);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
