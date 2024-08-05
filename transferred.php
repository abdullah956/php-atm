<?php
include_once("connection.php");
session_start();
if (isset($_SESSION["user"])) { 
if (isset($_POST["transfer"])) {
    $receiver_cnic = trim($_POST["rcnic"]);
    $amount = trim($_POST["amount"]);
    $check_balance_query = "SELECT balance FROM tbl_atm WHERE cnic = '{$_SESSION["user"]}'";
    $check_balance_result = $conn->query($check_balance_query);
    if ($check_balance_result->num_rows > 0) {
        $row = $check_balance_result->fetch_assoc();
        $sender_balance = $row["balance"];
        if ($sender_balance < $amount && $sender_balance < 0) {
            echo "<script> alert('Insufficient balance. Transfer failed.') </script>";
            exit();
        }
        $check_use= "SELECT cnic FROM tbl_atm WHERE cnic = '$receiver_cnic'";
        $check_user = $conn->query($check_use);
        if ($check_user->num_rows > 0) {
        $new_sender_balance = $sender_balance - $amount;
        $update_sender_query = "UPDATE tbl_atm SET balance = '$new_sender_balance' WHERE cnic = '{$_SESSION["user"]}'";
        $conn->query($update_sender_query);
        $update_receiver_query = "UPDATE tbl_atm SET balance = balance + '$amount' WHERE cnic = '$receiver_cnic'";
        $conn->query($update_receiver_query);
        header("Location:thanks.php?balance=$new_sender_balance");
        }
        else{
            echo "<script> alert('No such receiver.') </script>";
        }
    } else {
        echo "<script> alert('Error checking balance. Transfer failed.') </script>";
    }
} else {
    echo "Invalid request.";
}
}
?>