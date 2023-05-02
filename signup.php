<?php
include "header.php";
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$servername = "localhost";
$username = "root";
$db_password = "";
$db_name = "project";

// Create connection
$conn = new mysqli($servername, $username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Проверяем, были ли переданы данные для авторизации
if ($firstname && $password && $lastname && $email) {
    $password = password_hash($password, PASSWORD_BCRYPT);
    if (!$password) {
        echo "Ошибка при регистрации";
        exit();
    }
    $sql = "select * from users where email='$email'";
    $exists = $conn->query($sql)->fetch_assoc();
    if ($exists) {
        echo "Такой пользователь уже существует!";
        exit();
    }
    $sql = "insert into users  (firstname, lastname, email, password) values ('$firstname','$lastname','$email','$password')";
    if ($conn->query($sql) === true) {
        $id = $conn->insert_id;
        session_start();
        $_SESSION['firstname'] = $firstname;
        $_SESSION['email'] = $email;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['id'] = $id;
        header('location:index.php');
        exit();
    } else {
        echo "Ошибка при регистрации";
    }


}
//
//    if ($password == 'mypassword') {
//        session_start();
//        $_SESSION['username'] = $username;
//        header('Location: /dashboard.php'); // перенаправляем на страницу dashboard
//    } else {
//        // Неверный пароль
//        header('Location: /login.php?error=invalid_password'); // перенаправляем на страницу login с ошибкой
//    }
//} else {
//    // Данные для авторизации не были переданы
//    header('Location: /login.php?error=missing_credentials'); // перенаправляем на страницу login с ошибкой
//}
