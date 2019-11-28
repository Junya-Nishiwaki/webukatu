<?php
require('function.php');

$siteTitle = 'HOME';
require('components/header.php')
?>
<div class="container">

  <div class="side-bar">
    <form action="">
      <label for='categories'>カテゴリー</label>
      <select name="" id="categories">
        <option value="">選択して下さい</option>
      </select>
      <label for="sort">表示順</label>
      <select name="" id="categories">
        <option value="">選択して下さい</option>
      </select>
      <input type="submit" value='検索'>
    </form>
  </div>

  <div class="main-wrapper">
    <div class="display-area">
      <p><span></span>件の商品が見つかりました</p>
      <p>件</p>
    </div>
    <div></div>
  </div>

</div>
<?php require('components/footer.php') ?>
</body>
</html>
