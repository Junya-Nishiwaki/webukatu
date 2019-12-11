<?php
require('function.php');
require('auth.php');

if (!empty($_GET)) {
  try {
    $dbh = dbConnect();
    $sql = 'SELECT id, sale_user, buy_user,  FROM boards WHERE id = :id';
    $data = [':id' => $_GET['m_id']];
    $stmt = queryPost($dbh, $sql, $data);
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
      header('Location: index.php');
    }
  } catch (PDOException $e) {
    $e->getMessage();
    exit;
  }
}

$siteTitle = 'Message';
require('components/header.php');
?>
<main>
<div class="container">

</div>
</main>
<?php require('components/footer.php') ?>
