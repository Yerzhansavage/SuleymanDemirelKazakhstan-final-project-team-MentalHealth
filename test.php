<?php
include "header.php";
?>
<?php
$score = array_sum(array(
        $_POST['question1'],
        $_POST['question2'],
        $_POST['question3'],
        $_POST['question4'],
        $_POST['question5'],
        $_POST['question6'],
        $_POST['question7'],
        $_POST['question8'],
        $_POST['question9'],
        $_POST['question10'])
);
$age = $_POST['age'];
$grade = $_POST['grade'];
$id = $_SESSION['id'];

$servername = "localhost";
$username = "root";
$db_password = "";
$db_name = "project";

$conn = new mysqli($servername, $username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "update users set score='$score', age='$age', grade='$grade' where id='$id'";
$isSuccess = $conn->query($sql);
if ($isSuccess){
    header('location:profile.php');
}
else
    header('location:question-answer.php');
