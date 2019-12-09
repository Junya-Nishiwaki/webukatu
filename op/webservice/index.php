<?php
require('function.php');

try {
  $dbh = dbConnect();
  $sql = 'SELECT products.id, products.name AS productName, price, pic1, categories.name AS categoryName FROM products INNER JOIN categories ON products.category_id = categories.id';
  $stmt = queryPost($dbh, $sql);

  if ($stmt) {
    $results = $stmt->fetchAll();
  }

  $sql = 'SELECT id, name FROM categories';
  $data = [];
  $stmt = queryPost($dbh, $sql, $data);
  $categories = $stmt->fetchAll();

  $sql = 'SELECT count(*) FROM products';
  $stmt = queryPost($dbh, $sql);
  $count = $stmt->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  $e->getMessage();
  exit;
}

$siteTitle = 'HOME';
require('components/header.php');
?>
<div class="container main-display">

  <div class="side-bar">
    <form method='post'>
      <label for='categories'>カテゴリー</label>
      <select name="" id="categories">
        <option value="">選択して下さい</option>
        <?php foreach ($categories as $category) : ?>
          <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
        <?php endforeach ?>
      </select><br>
      <label for="sort">表示順</label><br>
      <select name="" id="categories">
        <option value="">選択して下さい</option>
        <option value="0">新しい順</option>
      </select><br>
      <input type="submit" value='検索'>
    </form>
  </div>

  <div class="main-wrapper">
    <div class="display-area">
      <p><strong><?= $count['count(*)'] ?></strong> 件の商品が見つかりました</p>
      <p>件</p>
    </div>
    <div class='products-area'>
      <?php foreach ($results as $result) : ?>
        <div class="product-area">
          <div class="category-tag"><?= $result['categoryName']  ?></div>
          <img src="<?= $result['pic1'] ?>" alt="">
          <h2><a href='productDetail.php?p_id=<?= $result['id'] ?>'><?= $result['productName'] ?></a></h2>
          <p>$ <?= number_format($result['price']) ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>

</div>
<?php require('components/footer.php') ?>
</body>
</html>
