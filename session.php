<?php
// Check if the user is logged in
if (isset($_SESSION["user_id"])) {
  // The user is logged in, do nothing
} else {
  // The user is not logged in, redirect to the login page
  header("Location: login.php");
  exit();
}
?>
