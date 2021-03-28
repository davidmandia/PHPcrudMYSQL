

<?php
$db = new mysqli("127.0.0.1","root","cavia2014","crud", 3307);

// Check connection
if ($db -> connect_errno) {
  echo "Failed to connect to MySQL: " . $db -> connect_error;
  exit();
}
?>