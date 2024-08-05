<?php
include_once("connection.php");
session_start();
if (isset($_POST["exit"])) {
    session_unset();
    session_destroy();
    header("Location:index.php");

    
}
?>