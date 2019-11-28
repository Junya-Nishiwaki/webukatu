<?php
require('function.php');
$signal = 0;

if ($_POST) {
  try {
    $dbh = dbConnect();
    $sql = 'SELECT email FROM users WHERE email = :email';
    $data = [':email' => $_POST['email']];
    $stmt = queryPost($dbh, $sql, $data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      $signal = 1;
    } else {
      $err_msg['common'] = 'There is no matched record with the one you wrote!';
    }
  } catch (PDOException $e) {
    $e->getMessage();
    exit;
  }
}
$siteTitle = 'Password reminder';
require('components/header.php');
?>
<main id='password-reminder'>
<div class="form-area">
  <form class='edit-form' method="post">
    <h1>Password reminder</h1>
    <p class='err'><?php if (!empty($err_msg['common'])) echo $err_msg['common'] ?></p>
    <?php
      switch ($signal) :
        case 0:
    ?>
      <label for="email">Your email</label>
      <input type="email" name="email" id='email' value="<?php if (!empty($_POST['email'])) echo $_POST['email'] ?>" required>
    <?php
        break;
        case 1:
    ?>
    <p></p>
    <?php
        break;
        case 2:
    ?>
    <p></p>
    <?php
        break;
      endswitch
    ?>
    <input type="submit" value="Send">
    <a href="login.php">Back to login page</a>
  </form>
</div>
</main>
<?php require('components/footer.php') ?>
