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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpilegra');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ')E&5>X^p&bu~0dj~-/ylA)FM sY+T@;F7ITZ907kV3?$0$k.$3#W,]r+/-](K$Yd');
define('SECURE_AUTH_KEY',  'h0cDvA#0ap.M{>MO/p)B<|d]ayh374gZd(X52PjYYI8B})vt2l{ls.0MJMn(jf|/');
define('LOGGED_IN_KEY',    '#/1=5F+Wc2&Qx%&;N<*I7;|g[07D#pQTnC]14tu?>NKsi4SB$q$eFm_ {C)>SyYK');
define('NONCE_KEY',        'n3.;9q=nZgs+}?.:[P[R^U-m8dNII{*E+jnw_8IXRyOOE/-XDN45!Z<fNTNFkg%%');
define('AUTH_SALT',        '**Y{Q;KM|1kcP=.u+El~lF*iIr~wS1[*lAMD%eDWKJ}}@5>dK%qUY<3&)CW30Zju');
define('SECURE_AUTH_SALT', '9nVTTwD:+,#LT>1<P|fqtZ9iH2CU;Sm=4$O<W]qE*&(X5c*R!@Ql~t+_k|TJ&*H=');
define('LOGGED_IN_SALT',   'l+.`48i*]szRzg]0`c#T%@9Hnz[Fx!vJy0h:f[{;DAe3Y4opG Vv},nEXv6232Zh');
define('NONCE_SALT',       'TMJJr+sAO[=E7{HsYxkBIF=Z6;iMv4Vi&5_Qa@R{SQHO(Z~2Ku)=Rs^E{HHWL!}o');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
