<?php
require 'sys_config.php';

$username = $link -> real_escape_string($_REQUEST['username']);
$password = $link -> real_escape_string($_REQUEST['password']);

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // output user details into session
  $row = $result->fetch_assoc();
  session_start();
  $_SESSION['userid'];
  $_SESSION['username'];
} else {
    echo "0 results";
}

// if ($username == 'one' and $password == 'two') {
//     header('Location: index2.php');
// } else {
//     header('Location: index.php');
// }