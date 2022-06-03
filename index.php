<?php
      
      session_start();
      if(!$_SESSION['Auth']){
          header('location:login.php');
      }
      
?>

<h1>you are authorized user</h1>

<a href='logout.php'>Logout....!</a>