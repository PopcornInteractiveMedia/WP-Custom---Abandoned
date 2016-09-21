<?php
/* Custom WordPress Configurations On "wp-config.php" File. */

/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'WordPress' );
define( 'DB_PASSWORD', 'D34PA7pfKyKczGE6' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8' );
define( 'DB_COLLATE',  'utf8_general_ci' );

/* MySQL database table prefix. */
$table_prefix = 'WordPress_X21SEPT2016D0A_';

/* Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'Vy RL~<]#Eb&j9?b:yxh+OnLg* )7+&OT;P_D/R}X8x%@j+`P:[-K+(T#K]L2(>J');
define('SECURE_AUTH_KEY',  '8H^NWCv_$Di>^:uyL._a]YVkwovUVd?lyS~x|d D/-zE1atT7h6teBc/$]=KN2wm');
define('LOGGED_IN_KEY',    'F%_:rpuw}q&cY:s!sQMo&s`5B&{Yfc4V^HI[(oK+iZcst1Kq%|VSO1^HNi6d[-,S');
define('NONCE_KEY',        'e)O5pQhiSsp_G~]YtF2@1=bqJ@Eo@<g]=~Ae/kEZ^}.)wVd(a^Tsk)RBl6[}BI{n');
define('AUTH_SALT',        'HJr>(D$im[[YZoMu9)f2j9heQc>LkG3>]OkOJ<oBf|wJd=p!}MD,+gc6B>NrSh&O');
define('SECURE_AUTH_SALT', 'FqqQ>l|6IZjr4^.sFa]&d5.u::/{_oz<naN+vHIB;!wVY?J}h0L{+~6oCb r8IVs');
define('LOGGED_IN_SALT',   'V7#Pm8+q3~RE0bRub4>$I5XZb#]5;o5h4a.8&lY-o)}kxZ9V+y><.n_$X+SGxW+h');
define('NONCE_SALT',       'zFNpDqKxK^gy|zcuE9I{<zx<!^z%:_:~h]0_B1c9!2byizW#Y%,j@NV1)SE*n-zw');

/* SSL */
/*
define( 'FORCE_SSL_ADMIN', true );
define( 'FORCE_SSL_LOGIN', true );
*/

/* Custom WordPress URL. */
/*
define( 'WP_SITEURL',     '' );
define( 'WP_HOME',        '' );
define( 'WP_PLUGIN_URL',  '' );
define( 'WP_CONTENT_URL', '' );
define( 'UPLOADS',        '' );
define( 'COOKIE_DOMAIN',  '' );
*/

/* AutoSave Interval. */
define( 'AUTOSAVE_INTERVAL', '200' );
/* Specify maximum number of Revisions. */
define( 'WP_POST_REVISIONS', '5' );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );

/* Multisite. */
define( 'WP_ALLOW_MULTISITE', false );

/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );

/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '200M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* WordPress Cache */
/*
define( 'WP_CACHE', true );
*/

/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );


/* CRON */
define( 'DISABLE_WP_CRON',      'true' );
define( 'ALTERNATE_WP_CRON',    'true' );
define( 'WP_CRON_LOCK_TIMEOUT', 60 );


/* Updates */
/*
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
*/

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');