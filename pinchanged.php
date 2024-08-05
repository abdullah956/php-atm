<?php
            include_once("connection.php");
            session_start();

            if (isset($_SESSION["user"])) {
                if (isset($_POST["pinchange"])) {
                    $cnic = $_SESSION["user"];
                    $oldpin = trim($_POST['oldpin']);
                    $newpin = trim($_POST['newpin']);
                    $checkOldPinQuery = "SELECT pin FROM tbl_atm WHERE cnic = '$cnic' AND pin = '$oldpin'";
                    $checkOldPinResult = $conn->query($checkOldPinQuery);
                    if ($checkOldPinResult->num_rows > 0) {
                        $updatePinQuery = "UPDATE tbl_atm SET pin = '$newpin' WHERE cnic = '$cnic'";
                        $updatePinResult = $conn->query($updatePinQuery);
                        if ($updatePinResult === true) {
                            echo "<h1>PIN HAS BEEN CHANGED</h1>";
                        } else {
                            echo "<p>Error updating pin: " . $conn->error . "</p>";
                        }
                    } else {
                        echo "<p>Invalid old pin. Pin not changed.</p>";
                       
                    }
                }
            } else {
                echo "<p>User session not set.</p>";
            }
            ?>