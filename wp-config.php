<?php

/**
 * Local configuration information.
 *
 * If you are working in a local/desktop development environment and want to
 * keep your config separate, we recommend using a 'wp-config-local.php' file,
 * which you should also make sure you .gitignore.
 */
if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) :
	require_once(dirname(__FILE__) . '/wp-config-local.php');
	return;
endif;

define('WP_HOME', 'http://localhost:8888/wordpress_biennio2_2019-20/');
define('WP_SITEURL', 'http://localhost:8888/wordpress_biennio2_2019-20/');

/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ulteriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress_biennio2_2019-20' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', 'root' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%GxB-;iE_tGhs|KWo^fSSmo<$O2IVNDtsvOCg3j*39tZ)VcnN)}aUrQ:7ujgxV(5' );
define( 'SECURE_AUTH_KEY',  'm:/YHJI1`m/+$QkB.MWw/!NS7(NTm<:C#/3?:3&#Ggd#Oi+2O%d&wfM$bxb-1@%U' );
define( 'LOGGED_IN_KEY',    '!+x%}W&LvS:sSEJfOaX_rL _LmT+8R-%P`/eP-4Ve3txG)!)ddWCd~*&A.sDCOFg' );
define( 'NONCE_KEY',        'lt[7M@1!M)]EBm,pYSWscms KO+(eb#V[#g^wj8k3_C~/ }mgyobz+>1~-.#,1NN' );
define( 'AUTH_SALT',        'kv Rg%Mm#;I$m kNUFL1#~ +MA-2QdIhcV.2^Qx] WbQiHS S60ksTU?Be:2L4la' );
define( 'SECURE_AUTH_SALT', '<+7KN-?vSj2FJ49UZm.?v}!+6g1!q%lo#or)IV}Vm_Um?)[,f}UN.^6-s*}l=I7[' );
define( 'LOGGED_IN_SALT',   '@.*t)j*Dz):r 18tV|%2Mg=sp&O]VzdxdDw[D[r&]|!pY,)/p&IFX^_E&0:iWkO}' );
define( 'NONCE_SALT',       'W!wK7Lq9gEQOpxt]FXSQdQRf3(g]?6K1CLOG}%][Sfu73Ccby,m &)DbJ|:$B7K2' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
