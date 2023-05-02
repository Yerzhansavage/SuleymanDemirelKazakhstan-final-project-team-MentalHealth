<?php
include "header.php";

// unset session variables
$_SESSION = array();

// delete session cookie
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(), '', time() - 42000, '/');
}

// destroy session
session_destroy();

// unset user cookie
if (isset($_COOKIE['user'])) {
setcookie('user', '', time() - 42000, '/');
}

// redirect to login page
header("Location: login.php");
exit();
?>