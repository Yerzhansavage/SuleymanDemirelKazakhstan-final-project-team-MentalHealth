<?php
include "header.php";
if (empty($_SESSION)) {
    header("Location:index.php");
    exit();

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>

  <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
  />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="img/image%204.png" alt="avatar"
                 class="rounded-circle img-fluid" style="width: 150px;">
            <h5><?php echo $_SESSION['firstname']?></h5>
            <div class="d-flex justify-content-center mb-2">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                  <p class="text-muted mb-0"><?php echo $_SESSION['email']  ?></p>
                  <?php
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
                  $id=$_SESSION['id'];
                  $sql = "select * from users where id='$id'";
                  $user = $conn->query($sql)->fetch_assoc();
                  $score = $user['score'];
                  if($score > 5) echo 'У тебя депрессия'
                  ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>

</body>
</html>