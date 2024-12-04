<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

/**
 * Composer autoload
 */
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
	require_once (__DIR__ . '/vendor/autoload.php');
}

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wp_liceu' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'docker' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'sRvfFnlY5C' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'database' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
/**#@-*/
define('AUTH_KEY',         'x@ sCzA .z*oWWtjnQwbV!EEp/o_V6z|!,<}-@Yw+%2j  qwO->,-%Z~_LFwk1!w');
define('SECURE_AUTH_KEY',  '{)/bn!e43-lil(uUvU]pttY?0~i+Erk$cKomG5Xs6bn0qn_3M&&iXerLJ-D-gf3y');
define('LOGGED_IN_KEY',    '|Q@V/5g~,B{&X+I+SqWouMHS2@}Qew6+ioGhQH+vK,vO~{{{BWNRoVAOF_/12Dof');
define('NONCE_KEY',        'w5av457r#Czg6{Z5P@Q7]V;m0+CC:tOV1#WVDS)jh(,r~W4>_A[K<wi+!7DJ.-&I');
define('AUTH_SALT',        'ncst~e9=}1@XTp?rr)e9ULEtaJhOpC]^vi Jspw+}N`pOV+.qvL>9~v$8SqIkR/)');
define('SECURE_AUTH_SALT', ',X(]g8tuQepvgn*pL+h:Eauk^=UGLvZ)lUfMXkDI1D~5kLqDD/&x-&BMMCD=X9D2');
define('LOGGED_IN_SALT',   '>78N2x<Ka#0Jrkeek^|mwC|)J-ZI~g3&?||#x%B1@1: /dPgR`sG3v(Rv)5C2$IN');
define('NONCE_SALT',       'aWlxP6r6v*-sB{}/j g6Q[VjqwDBe@h4uhTp-:h22QCntx3x[Byj&=: X9oAk -c');

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/var/log/wp-errors.log' );
define( 'WP_DEBUG_DISPLAY', true );


if($_SERVER['REQUEST_SCHEME'] === "https"){
	define('WP_HOME',       'https://localhost');
	define('WP_SITEURL',    'https://localhost');	
}else {
	define('WP_HOME',       'http://localhost');
	define('WP_SITEURL',    'http://localhost');
}

/**
 * Disable automatic updates and installations from production
 */
if (strpos(WP_HOME, 'localhost') === false) {
	define('automatic_updater_disabled', true );
	define('WP_AUTO_UPDATE_CORE', false );
	define('DISALLOW_FILE_MODS', true);
} else {
    define('FS_METHOD', 'direct');
	define( 'WP_ROCKET_EMAIL', 'marcelo@okn.com.br' );
	define( 'WP_ROCKET_KEY', '5c0bc1ab');
	define ('IMAGIFY_API_KEY', '8ca067290fb462ca54d42a58f7efaedcda85f579');
}


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
