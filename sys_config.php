<?php
$dbHost = "localhost";
$dbName = "platform";
$dbUser = "root";
$dbPass = "";

$link = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($link -> connect_error) {
    die("Connection failed: " . $link -> connect_error);
}

//echo "Connected successfully";