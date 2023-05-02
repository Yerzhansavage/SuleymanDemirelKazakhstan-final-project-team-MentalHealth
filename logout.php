<?php
session_start();

unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['id']);
header("Location:index.php");
exit();
