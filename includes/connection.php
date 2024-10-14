<?php

$sitename = "Ticket Procurement System";
$conn = mysqli_connect("localhost", "root", "", "ticketprocurement_db");
if (!$conn) {
    die(mysqli_error($conn) . "Error connecting Database!");
}
?>