<?php
include_once("connection.php");
session_start();
if (isset($_SESSION["user"])) {
    $check_balance_query = "SELECT balance FROM tbl_atm WHERE cnic = '{$_SESSION["user"]}'";
    $check_balance_result = $conn->query($check_balance_query);
    if ($check_balance_result->num_rows > 0) {
        $row = $check_balance_result->fetch_assoc();
        $balance = $row["balance"];
        echo "<p>Your current balance: Rs. " . number_format($balance, 2) . "</p>";
    } else {
        echo "<p>Balance not available.</p>";
    }
    session_unset();
    session_destroy();
} else {
    echo "<p>User session not set.</p>";
}
?>