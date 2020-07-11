<?php
  session_start(); // open session
  include("conn-db.php"); // connection db

  $username = mysqli_real_escape_string($conn, $_POST["username"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);

  if (empty($username) || empty($password)) {
    header("Location: ../login.php");
    exit();
  }
  else{
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result)==0){
      $_SESSION["logged"] = false;
      echo "non sei registrato";
      $conn->close();
    }
    else{
      $_SESSION["logged"] = true;
      header("location:../pageuser.php");
    }
  }

?>
