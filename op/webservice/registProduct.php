<?php
require('function.php');
require('auth.php');

try {
  $dbh = dbConnect();
  $sql = 'SELECT id, name FROM categories';
  $data = [];
  $stmt = queryPost($dbh, $sql, $data);
  $categories = $stmt->fetchAll();
} catch (PDOException $e) {
  $e->getMessage();
  exit;
}

if (!empty($_POST)) {
  try {
    $dbh = dbConnect();
    $sql = '';
    $data = [];
    var_dump($_FILES);
  } catch (PDOException $e) {
    $e->getMessage();
    exit;
  }
}

require('components/header.php');
?>
<main id = '<?php ?>'>
<div class="container mypage">
  <form class="edit-form" method="post" enctype='multipart/form-data'>
    <h1>Regist product</h1>
    <p class='err'><?php if (!empty($err_msg['common'])) echo $err_msg['common'] ?></p>

    <!-- Name -->
    <label for="name">Name</label>
    <input id='name' type="text" name="name" value="<?php ?>">

    <!-- Category -->
    <label for="category">Category</label>
    <select id='category' name="category">
      <option selected>選択して下さい</option>
      <?php foreach ($categories as $category) : ?>
        <option value="<?= $category['id'] ?>"><?= h($category['name']) ?></option>
      <?php endforeach ?>
    </select>

    <!-- Body -->
    <label for="body">Detail</label>
    <textarea id='body' name="body" value='<?php ?>'></textarea>

    <!-- Price -->
    <label for="price">Price</label>
    <input id='price' type="text" name="price" value="">

    <!-- Pictures -->
    <div class="pictures">
      <div class="picture">
        <label for="pic1">Picture 1</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php h(MAX_FILE_SIZE) ?>">
        <input id='pic1' type="file" name="pic1">
      </div>
      <div class="picture">
        <label for="pic2">Picture 2</label>
        <input id='pic2' type="file" name="pic2">
      </div>
      <div class="picture">
        <label for="pic3">Picture 3</label>
        <input id='pic3' type="file" name="pic3">
      </div>
    </div>

    <input type="submit" value="Regist">
  </form>
  <?php require('components/side-bar.php') ?>
</div>
</main>
<?php require('components/footer.php') ?>
