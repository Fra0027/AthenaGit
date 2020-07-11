<?php

session_start();

if (isset($_POST["submit"])) {
  include_once "dbh-script.php";

  $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
  $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

  if (empty($uid) || empty($pwd)) {
    header("Location: ../pages/login.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE user_username = '$uid' OR user_email = '$uid'";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck<1) {
      header("Location: ../pages/login.php");
      exit();
    }
    else {
      if ($row = mysqli_fetch_assoc($result)) {
        $hashedPwdCheck = password_verify($pwd, $row["user_pwd"]);
        if ($hashedPwdCheck == false) {
          header("Location: ../pages/login.php");
          exit();
        }
        elseif ($hashedPwdCheck == true) {
          // login done
          $_SESSION["username"] = $row["user_username"];
          $_SESSION["email"] = $row["user_email"];
          $_SESSION["id"] = $row["user_id"];

          header("Location: ../user.php");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: ../pages/login.php");
  exit();
}
