<?php
include "header.php";
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$servername = "localhost";
$username = "root";
$db_password = "";
$db_name = "project";

$conn = new mysqli($servername, $username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($email && $password) {
    $sql = "select * from users where email='$email'";
    $user = $conn->query($sql)->fetch_assoc();
    if (!$user) {
        die('Данный пользователь отсутсвует');
    }
    if (password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['id'] = $user['id'];
        header('location:index.php');
        exit();
    } else {
        echo "Неверный пароль";
    }
} else  {
    echo "Введите логин и пароль";
}
