<?php
  $connection = mysqli_connect('localhost', 'root', 'root', 'login_form');
  if(!$connection) {
    die('Database connection failed');
  }
?>