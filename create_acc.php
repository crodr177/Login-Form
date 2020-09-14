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
    <div class="header">
      <h1>Create Account</h1>
    </div>
    <div class="form-container">
      <form action="home.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>
        <input class="submit" type="submit" name="submit" value="Submit">
      </form>
    </div>
    <a id="go-home" href='index.php'>Go home</a>
  </div>
</body>
</html>