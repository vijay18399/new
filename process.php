<?php
require 'db_access.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") //Checking request is POST or not
{
  // collect value of input field
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $age = $_POST['age'];
  $sex = $_POST['sex'];
  if (empty($fname) or empty($lname) or empty($age) or empty($sex) ) {  
    echo "Please Fill All Fields";
  } else {
      $full_name = $fname." ".$lname;
    $sql = "INSERT INTO information (id,name, age, sex) VALUES ('', '{$full_name}', '{$age}', '{$sex}')";
    if ($conn->query($sql) === TRUE) {
        header("Location: done.php  "); //success
    } else {
        header("Location: fail.php  "); //fail
    }
  }
}
?>
