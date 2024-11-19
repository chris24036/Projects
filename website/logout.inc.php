<?php
//--Christopher M. Rodriguez, IT202-001, Phase1 Assignment, cmr82@njit.edu
if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
   session_destroy();
}
header("Location: index.php"); // Replace 'login.php' with the path to your login page
exit(); // Ensure no 
?>

