<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Join the Mailing List</h1>

    <form class="" action="" method="post">
      <?php if(isset($status)): ?>
        <p class="notice">
          <?= $status; ?>
        </p>
      <?php endif; ?>
      <ul>
        <li>
          <label for="name">Name:</label>
          <input type="text" name="name" value="<?= old('name'); ?>">
        </li>
        <li>
          <label for="email">Email:</label>
          <input type="text" name="email" value="<?= old('email'); ?>">
        </li>
        <li>
          <input type="submit" value="sign up">
        </li>
      </ul>
    </form>
  </body>
</html>
