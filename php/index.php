<?php
$str = 'html内にこの文字が表示されます！';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>ホームページのタイトル</title>
</head>
<body>
  <h1>PHPプログラムを作ってみよう！</h1>
  <p><?= $str ?></p>
</body>
</html>
