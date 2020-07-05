<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/wangjiahui/Sites/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'DPFinance' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'mars' );

/** MySQL主机 */
define( 'DB_HOST', '127.0.0.1' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oKct&o-*@7?QST1=Gf2z_}|6[IUGIov@0O<>[XKB]I-WWQj`<AHY.Ln@$7^w?f[;' );
define( 'SECURE_AUTH_KEY',  'H(L>c}tVF&2Ka`q`/HdI;Y4US:@bkOE9`My-1q~UE]7<aP.ib<hfz6ryb.Eib@=$' );
define( 'LOGGED_IN_KEY',    'L}-a=i#OMtSZTUC;_tj)%|>Z@M%iCE&b^/[Wq^Z6r0sQX.rp,c[|T!gA]6eY78xp' );
define( 'NONCE_KEY',        'Y>p<hF5*=C]+3=n]J(ehr&i2G+cUcslPbW-TLo}7D(M%&1ox.%%fUgmRnF>3IRh,' );
define( 'AUTH_SALT',        'b<},LJ]ok/0  +a|O>q))PIalKZ,R;:l6RBQM8A6cfT%*PnwYRn+:RS7-]4U.)&p' );
define( 'SECURE_AUTH_SALT', '_fZ4zG7>]5<(g]5*Mu}jH`RDt*[~QZotz] v(]G[=6WW-Rg0{JO+GVL[PB^WcA~x' );
define( 'LOGGED_IN_SALT',   '<OOUVvDCimv;dD#Gvqve(n]O#2iqvye~VBTl{?BzukQqm_?6(ogRk4>hC9quwDBR' );
define( 'NONCE_SALT',       ']bR~{`?pi08mN]RHX%N8~pMQN[6b&=A=prAJ3!HrP}@{eWKF JL8EVnt[;#yzHq1' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'dp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );

define("FS_METHOD","direct");
 
define("FS_CHMOD_DIR",0777);
 
define("FS_CHMOD_FILE",0777);
