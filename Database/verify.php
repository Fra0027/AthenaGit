<?php
  include ("conn-db.php");
  $email = $_POST['email'];   /*mysqli_real_escape_string($conn, $_POST["email"]);*/
  $password = $_POST['password'];   /*mysqli_real_escape_string($conn, $_POST["password"]);*/

  if (empty($email) || empty($password)) {
    echo "email or password error";
    header('Location: login.php');
    exit();
  }
  else{
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    //controll how many result
    if ($result->num_rows > 0) {
      // control email and password
      while($row = $result->fetch_assoc()) {
        if ($email=$row["email"] || $password=$row["password"]) {
          echo "connessione riuscita";
          header('Location: insertpost.php');
          echo $email;
          echo $password;
        }
      }
    } else {
      echo "email or password error";
      $conn->close();
    }

  }

?>
