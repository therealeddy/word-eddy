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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
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
define( 'AUTH_KEY',         '?iiLgWgIcQ<7AZw-L7k!$ H}&[R-K]KNLyV ,QRLE!gb};5!FgPQL]G@*oSBul}C' );
define( 'SECURE_AUTH_KEY',  '0;N}YitF=65*F.t@R!14-<Jkehfm8=~*CLJq5V2IRo8qH#U@<I}/p}f2SyA}(8|!' );
define( 'LOGGED_IN_KEY',    ':CZd(TeW?>!@1`O-P4=Cl@eU?$M_WQz]g[ 0M(34!9GPUTM??!CBBakC$z8l]AQ:' );
define( 'NONCE_KEY',        'eO;xg$5xhLB+AD!ScM_2vxqCV>r%1yVnn x@_`uCpDlp;3CXg4?6&F1<Hm6f)H,h' );
define( 'AUTH_SALT',        '%.oV~yKA{M&jW$`72tM28N%fu1<Z%A6@>bu,<>2<Ij:?k$B`VXIF`rVXDF{Yg o+' );
define( 'SECURE_AUTH_SALT', ',UiS6!t8>}J<$TcT$QM.#.o`VAYSo(Z7Ku{6g@-gNe@F60y[L3HsY`rs~OM m?QZ' );
define( 'LOGGED_IN_SALT',   '_c)*1&r+&ef5t_=RN?[@@CJg3&MUZD[g4-mb^4%)J$-DxsPLGaKrGS$BQ-]d%&*B' );
define( 'NONCE_SALT',       'LF|LE|d?1w<ZsQd=g4Q)P`g4n0%p}Bw=]!Py.4 Jb1JB^gT$[>dfD#},Lzp&6Z;5' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
