<?php
  if(isset($_POST['submit-login'])){
    global $connection;
    // values for user input
    $username = $_POST['username-login'];
    $password = $_POST['password-login'];  

    // select query
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILED' . mysqli_error($connection));
    }

    $row = mysqli_fetch_assoc($result);
    if($row == []) {
      function displayError(){
      echo '<h2>Wrong username or password</h2>';
      echo "<a href='login.php'><button class='back button'>Go Back</button></a>";
      }
    } else {
      function displayUsername(){
        global $username;
        echo "<h1>$username</h1>";
      }
    }
  }
?>