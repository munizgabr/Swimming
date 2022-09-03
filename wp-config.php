<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'Swimmers' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'hH&%)S7r<n!qcgKiMbs|Xi<+mD2IhO#S*=<$@Ank0va5z}7& 8G%?3 4ND=PPLg.' );
define( 'SECURE_AUTH_KEY',  'Xk_yu4iEI3yJ$y,.fK]*g(>@|G[fOA;ws(k]+BQahwk#2Sx{;K#*Vn?A|Y|F0:i$' );
define( 'LOGGED_IN_KEY',    'Cht-@hO<a|~HX{=PFi,):q6M+-kOjr^(>U(w0k{9Z7*,NtDa7me`<X[2KY.laAL6' );
define( 'NONCE_KEY',        '/n%v{`qyy;*%_jA:o#$0xl{eix7 ,L,6uILJZnYSq-eDC+Ynt7#iAcceWUP,UA:}' );
define( 'AUTH_SALT',        '>`(:1ou&uA.2mcp 1>^<>&B:OEf_qH)3VkpT0(QGUt9r;XubRyCQQrm3.FagU!P^' );
define( 'SECURE_AUTH_SALT', ';hH7-Dy-J,lIUu=>vK?Shp^qW^(* sF3qYl=L;B]<R+i,&1pq?xF[D4&/aBG{<,%' );
define( 'LOGGED_IN_SALT',   '%>pWsFpD-sQ}I*nm-^ ,_Zg|lS9z(`05957wU3|+H#uLw5%N2CoH]uYyws%iS/iQ' );
define( 'NONCE_SALT',       '{=q.wradEu6e:;a._.BV33c/p?@rptYy~$+1TO@Ib  hxNF[:KouV6F/zQTM((fQ' );

/**#@-*/

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
