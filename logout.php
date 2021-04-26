<?php
//   echo "<script>alert('LOGGED OUT ');</script>";
   session_start();
   session_destroy();
   header("location:loginads.php");
?>
