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
define('DB_NAME', 'wp_malura');

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
define('AUTH_KEY',         '3t54{%vt.4b+?qKeUm_ZbH&TN,Zo#~G+T6Vq>xka4q,]{A* bM0C}eD]WBlNKQl7');
define('SECURE_AUTH_KEY',  'EUf%|QA`8#0Ec]68e7FCWCBdfUopkp2kWS0NPWQWPHlLkNAh2!zZxBL0P*`q~_]N');
define('LOGGED_IN_KEY',    '7UgQ-!5id12J1rLe=u|3(7[eK:0oAu>6b-TCCIJ%{g:iXKu7BecxC@-2E. e%-s.');
define('NONCE_KEY',        'H&Yn6T],}7C:@b&<+f%b:V7`@ss,_<bB:eRA&ZR<0;x3wLvFuFP,SqmBK2*q2LgP');
define('AUTH_SALT',        'W~T<kJ;hJ;18>0?xZ`@W#cY`:u)(HnLOZAj$_0C%8*E@:Y6mypCiNv[!Q8D98[7^');
define('SECURE_AUTH_SALT', 'KJxjms/NNvU@ ?xDII;G{)(Qxb_$M06*KI,^.N_;w*4jcs_KNnY;PEur`D}dX9|W');
define('LOGGED_IN_SALT',   '.O*>#uX/csf;85X5w LHLMa~]stG6pOKNjq%2F>YYqoh5,P/PCe4>sj_kMV7<;1B');
define('NONCE_SALT',       'LmPC,Fz4w%e2Glw ?] 9,Efj`I(&K|4>Mx5]:r6p@qJ]N&T7CU@F97`jUWB=l9Bz');

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
