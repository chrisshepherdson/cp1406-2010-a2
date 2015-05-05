<?php
  session_start();
  unset($_SESSION['username']); // remove individual session var
  session_destroy();
  header('location:../index.php'); // redirct to certain page now
?>