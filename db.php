<?php
$conn = new mysqli("localhost", "root", "", "omnicore");
if ($conn->connect_error) {
    die("Database connection failed");
}
session_start();
?>