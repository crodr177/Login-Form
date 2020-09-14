<?php
  function loginOrCreate(){
    if(isset($_POST['submit'])){
      displayUsername();
    } else {
      global $result;
      $row = mysqli_fetch_assoc($result);
      if($row == []) {
        displayError();
        die('');
      } 
      displayUsername();
    }
  }
?>
