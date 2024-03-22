<?php
 session_start();
 session_destroy();
echo "<script language='javascript' type='text/javascript'>";
echo "alert('Logout successfully');";
echo "</script>";
  header("Location: ../index.php");

?>