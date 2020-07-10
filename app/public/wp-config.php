<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 's(QZGDb!6_Ev{%jE=MTyz&LgO5%/<ZU,8MW`{jnz4R,t7d)S/=/bB;k$Y7G=gg.q' );
define( 'SECURE_AUTH_KEY', '<E{WBu};h9HC<Zt`Y/-q(ye/)J>RAI%3?v72aoaMH5Gd4=@M?QhjfG<w33*r[Qca' );
define( 'LOGGED_IN_KEY', 'r|Hatx(4XC 0Wj=Myva),zJ%o$jJ/].B_OH=Q>aQ1SK*}ofO$iEdB4H~0viskNi)' );
define( 'NONCE_KEY', '8pfezxk}<}S/dA3`$Z8-,y(`Pl=tf6nnA[Svoe/XCGk5*^LqQG0tcukz)gn)/ISH' );
define( 'AUTH_SALT', '=d# BbW~j#B5s[,>&Wxs^Xgo.]bQDt`bMN#g~@H&d5BO_17[DX9N^#<G)q;+)It+' );
define( 'SECURE_AUTH_SALT', '(o?;x%v/kfP_NgbY4)/{aa*mIDCqN5C9E9vEZ3u|9B_?#BExvN&dw)AOh5^#^]%d' );
define( 'LOGGED_IN_SALT', 'tl.qIENB#+A}pMarRoPb=X=0{sUF[k1.,;VAogG{}XS/xAHw)svI7>1|^}opR8#;' );
define( 'NONCE_SALT', '0c`*}h).}XVbl8}b.A-z {Xo.NN%_>d&zs!sculr$2g[PI>_mX$MFQ;mUks?^f0@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5e25d942e6960_';

define( 'DISALLOW_FILE_EDIT', true );




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
