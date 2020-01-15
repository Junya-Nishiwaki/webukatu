<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p_?5S9b#$87!sg%LlaTdq@!lusePjG:v%C]Db/K|,Q]Xxc}i zd_vak67Sk9OXpI' );
define( 'SECURE_AUTH_KEY',  'K/BZt.YuR x|=tWDQH8`A]b(%n+<$LNX,|H1=6d ej&#]3t7fST~?R![jtn$Z<GW' );
define( 'LOGGED_IN_KEY',    '{0}m1&dK2&!_+ ]&NQrWotX-?nI{W{bUzOh^*i8gK_78x2,1kc1(KZw}gIgK9imj' );
define( 'NONCE_KEY',        '2o_A7T90<Gr4mPD0iA98M8p{H.-cl*7C0jP0ZI{*>Mm@r/i/`Ydw0j_uQ&}$}8(J' );
define( 'AUTH_SALT',        ')HJ5|3{`{(2dS$8MiN+C{R_O_A:*<8.xI(*(Wf;hQ,#-VH!z<DZG}!kq~XGI,pv#' );
define( 'SECURE_AUTH_SALT', 't?*Ye*$fScC;3-NF-Q2t.a*xt-c&+}T4vH8/@SOq99o<lqe#/(F[qpi%PQo<s]i6' );
define( 'LOGGED_IN_SALT',   ';[):[bJd(nU/hm4@1>R1;8I}4bd}&b&+B^:wEfc(rN+uYazc&Sqbae|foe=Uy~U1' );
define( 'NONCE_SALT',       '4RW^OolH9a/z(hWQ1VJqvq0SG|V`QIm}ix6BZzJ=)B/PKu)AnnSv!vk$?E<U-4s?' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
