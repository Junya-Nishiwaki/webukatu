<?php
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告する
ini_set('display_errors', 'On'); //画面にエラーを表示させるか

// 1.post送信されていた場合
if(!empty($_POST)) {

  // 本来は最初にバリデーションを行うが割愛

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  // DBへの接続準備
  $dsn = 'mysql:dbname=php_sample01;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $options = [
    // SQL実行失敗時に例外をスロー
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // デフォルトフェッチモードを連想配列型式に設定
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // バッファードクエリを使う（一度に結果セットを全て取得し、サーバ負荷を軽減）
    // SELECTで得た結果に対してもrowCountメソッドを使えるようにする
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
  ];

  // PDOオブジェクト生成（DBへ接続）
  $dbh = new PDO($dsn, $user, $password, $options);

  // SQL文（クエリー作成）
  $stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email AND pass = :pass');

  // プレースホルダに値をセットし、SQL文を実行
  $stmt->execute([':email' => $email, ':pass' => $pass]);

  $result = 0;

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  // 結果が0出ない場合
  if (!empty($result)) {

    // SESSION（セッション）を使うにはsession_start()を呼び出す
    session_start();

    // SESSION['login']に値を代入
    $_SESSION['login'] = true;

    // マイページへ遷移
    header("Location:mypage.php"); //headerメソッドは、このメソッドを実行する前にechoなど画面出力処理を行なっているとエラーになる。
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ホームページのタイトル</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>ユーザー登録</h1>
  <form action="" method="post">
    <input type="text" name="email" value="emil" value='<?php if (!empty($_POST['email'])) echo $_POST['email'] ?>'>
    <input type="password" name="pass" placeholder="パスワード" value="<?php if (!empty($_POST['pass'])) echo $_POST['pass'] ?>">
    <input type="submit" value="送信">
  </form>
  <a href="mypage.php">マイページへ</a>
</body>
</html>
