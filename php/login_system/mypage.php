<?php
error_reporting(E_ALL); //E_STRICTレベル以外のエラーを報告する
ini_set('display_errors', 'On'); //画面にエラーを表示させるか
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ホームページのタイトル</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php if (!empty($_SESSION['login'])) : ?>
    <h1>マイページ</h1>
    <section>
      <p>あなたのemailは info@webukatu.comです。<br>あなたのpassは passwordです。</p>
      <a href="index.php">ユーザー登録画面へ</a>
    </section>
  <?php : else : ?>
    <p>ログインしてないと見れません。</p>
  <?php endif ?>
</body>
</html>
