<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'badrumsfixaren');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3/,b%f]`-s`-236>b>.kK&x!5vNl%3uO4eX2`+3E2U:bp^[z~F`/mI )k(UoExF_');
define('SECURE_AUTH_KEY',  '|Z0]gFCypKiP%u9a%41)C/OrbMc5hMv-+WNg^vk;HZ<9Q`_5r|!-m~1I7|0J=Leb');
define('LOGGED_IN_KEY',    ')a0UokfV-]D^it}vr|sID|K*^Rgw;.qoGj%ype+;=OePq9OM1ztc<~9cM>m;>+8N');
define('NONCE_KEY',        'anXAT-Fokc|e<kU(&2+&9D*i4Ddm#SwTuU/Ac;-JQWG2&l*FD|ohpH([C(u+l7c+');
define('AUTH_SALT',        'SjnBB_(4?5;6`T!o|qyqwv8axL;5i)CG~TJ*~H+r(vZD:vtASNrX-|*+t2m]|SbU');
define('SECURE_AUTH_SALT', '`|Z|T3TQ|/%=mxqu6+n?1f3N>ZOiS]z)m(1|P$z^+eiK>8Ov<UxR(yCep-zFBn,+');
define('LOGGED_IN_SALT',   'M-,:Hx+ju:+=sy.W(?6V)&+p=POLx[-iB;6js2j`<Q bkkm^[z~4</K6{x7N-CSY');
define('NONCE_SALT',       'oJkVSyuu%S(nfyp2dD+WBclFOf,EBohpz@ZNOho=+#~Ii*jtQeO-!E_AIqB^ePLQ');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'badrum_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');