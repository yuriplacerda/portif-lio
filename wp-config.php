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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '/ps^zm5:&-joI-o[fr4~3gSDgU[O#cB$p!;|SYqrY|WM;&sA~D#rb(9o4(*qbWNi' );
define( 'SECURE_AUTH_KEY',  'iUtX0aE-3GTCLV).bQq)K->mtU3uViZPx}dcx/A/=X(++Md7P7xgo4j?!~CC+y,3' );
define( 'LOGGED_IN_KEY',    ',@o4R2?Fik>kWK(yRmi9v-}Z5~B}t/H8{]Jnc@DR WFT[]1!I%HXA2`!dT#)sF#z' );
define( 'NONCE_KEY',        '6*jM6N#T}B<sqCFy?9BsMu0[gI@HJCVD^qvLLaVehBioO554l#Mb!+nX1Xy;,Hp~' );
define( 'AUTH_SALT',        '^AT}AFd/3C2SFXX+znjVZojL-Hy38R$<1I7?2i{CBOYn,oFq{UH NtMrsT!Y2%a&' );
define( 'SECURE_AUTH_SALT', 'eGBHo>j_<k=/q&-f?fq^>i`4:<%nL6GYS]Ei[*<&GD?cMsuL&EZ8jb%A~~0UWK!E' );
define( 'LOGGED_IN_SALT',   '4E!D{V%Kzxlc>aUdn>PPUJ)-OWzB1qI-=ql/6@I%z44G43&{,&BVa&!DY=zPp si' );
define( 'NONCE_SALT',       '5J8NzE1)Z>}IUV>fM><dL{G/^Gha^H-6WBaPvIbJCs7S&rcLa<r1~iO[~w{<4+k?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
