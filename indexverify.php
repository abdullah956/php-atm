<?php
include_once("connection.php");
session_start();
if (isset($_POST["btn"])) {
    $cnic = trim($_POST["cnic"]);
    $pin = trim($_POST["pin"]);
   
    $checkquery="Select * From tbl_atm Where cnic = '$cnic' AND pin ='$pin'";
    $check=$conn->query($checkquery);
     if  (!$check->num_rows > 0) {
            echo "<script> alert('Invalid CNIC OR PIN') </script>";
        }
     else {
      $_SESSION['user']=$cnic;
        header("Location:home.php");
     }
}
?>