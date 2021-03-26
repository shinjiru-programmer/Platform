<?php
$dbHost = "localhost";
$dbName = "platform";
$dbUser = "root";
$dbPass = "0sampai9!";

$link = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($link -> connect_error) {
    die("Connection failed: " . $link -> connect_error);
}

//echo "Connected successfully";