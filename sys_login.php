<?php
require 'sys_config.php';

$username = $mysqli -> real_escape_string($_REQUEST['username']);
$password = $mysqli -> real_escape_string($_REQUEST['password']);

// if ($username == 'one' and $password == 'two') {
//     header('Location: index2.php');
// } else {
//     header('Location: index.php');
// }