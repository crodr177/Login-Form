<?php include 'db/db.php'; ?>
<?php include 'db/create_acc_query.php'; ?>
<?php include 'db/login_query.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/form.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <?php
      displayError();
    ?>
    <?php
      displayUsername();
    ?>
    <h2>You're in!</h2>
    <a href='index.php'><button class="logout button">Log out</button></a>
  </div>
</body>
</html>