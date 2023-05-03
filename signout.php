<?php
include "header.php";

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time() - 42000, '/');
}

session_destroy();

if (isset($_COOKIE['user'])) {
setcookie('user', '', time() - 42000, '/');
}

header("Location: login.php");
exit();
?>