<?php
session_start();

if(isset($_SESSION['username'])) {
  echo "You are logged in as {$_SESSION['username']}";
  echo '<br><a href="logout.php">Logout</a>';
} else {
  echo 'You are not logged in';
  echo '<a href="/php_program/13_sessions.php">Home</a>';
}
?>