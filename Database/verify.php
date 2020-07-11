<?php
  session_start(); // open session
  include("conn-db.php"); // connection db
  $username = $_POST["username"];
  $password = $_POST["password"];
  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);
  if(mysqli_num_rows($result)==0){
    $_SESSION["logged"] = false;
    echo "non sei registrato";
    $conn->close();
  }
  else{
    $_SESSION["logged"] = true;
    header("location:../insertpost.php");
  }
?>
