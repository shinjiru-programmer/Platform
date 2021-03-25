<?php

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == 'one' and $password == 'two') {
    header('Location: index2.php');
} else {
    header('Location: index.php');
}