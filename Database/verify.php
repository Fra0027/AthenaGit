<?php
  session_start();
  include_once "conn-db.php";
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  if (empty($uid) || empty($pwd)) {
    header('Location: login.php');
    echo "email or password error";
    exit();
  }
  else{
    $sql = "SELECT * FROM user WHERE email=='$email' AND password=='$password' ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result)

  }

?>
