<?php
include_once("connection.php");
session_start();
if (isset($_SESSION["user"])) {
    if (isset($_GET['balance'])) {
        $balance = $_GET['balance'];
        echo "<p>Your current balance:Rs. " . number_format($balance, 2) . "</p>";
    } else {
        echo "<p>Balance not available.</p>";

    }
}
?>