<?php
ini_set('display_errors', "On");

session_save_path("/var/tmp/");
//ガーベージコレクションが削除するセッションの有効期限を設定（30日以上経っているものに対してだけ１００分の１の確率で削除）
ini_set('session.gc_maxlifetime', 60*60*24*30);
//ブラウザを閉じても削除されないようにクッキー自体の有効期限を延ばす
ini_set('session.cookie_lifetime ', 60*60*24*30);
//セッションを使う
session_start();
//現在のセッションIDを新しく生成したものと置き換える（なりすましのセキュリティ対策）
session_regenerate_id();// DB接続

// 定数管理
define("MSG1", '入力内容が正しくありません');
define("MSG2", 'パスワードが正しく入力されていません');
define("MSG3", '既に登録済みのメールアドレスです');
define("MSG4", '正常に処理が完了しました');

$err_msg = [];

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
function dbConnect() {
  $dsn = 'mysql:dbname=output1;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $options = [
    // SQL実行失敗時にはエラーコードのみ設定
    PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
    // デフォルトフェッチモードを連想配列形式に設定
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // バッファードクエリを使う(一度に結果セットをすべて取得し、サーバー負荷を軽減)
    // SELECTで得た結果に対してもrowCountメソッドを使えるようにする
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
  ];
  // PDOオブジェクト生成（DBへ接続）
  $dbh = new PDO($dsn, $user, $password, $options);
  return $dbh;
}

function queryPost($dbh, $sql, $data) {
  $stmt = $dbh->prepare($sql);
  $stmt->execute($data);

  return $stmt;
}
