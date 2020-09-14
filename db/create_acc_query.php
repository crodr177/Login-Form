<?php
  if(isset($_POST['submit'])){
    global $connection;
    // values for user input
    $username = $_POST['username'];
    $password = $_POST['password'];  

    // insert query
    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);
    if(!$result) {
      die('Query FAILED');
    }

    function displayUsername(){
      global $username;
      echo "<h1>$username</h1>";
    }
  }
?>
