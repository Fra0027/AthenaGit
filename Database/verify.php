<?php
include_once "collegamentoUtenti.php";

$result = mysqli_query($conn,"SELECT email, password FROM user");
$row = mysqli_num_rows($result);
if ($row<1) {
  echo "";
}
else {
  $array = array();
  while($row = mysqli_fetch_array($result))
  {
    $array[] = $row;
  }
}
mysqli_close($conn);
?>
