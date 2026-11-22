<?php
$conn = mysqli_connect("localhost", "root", "", "code_cohort");

if (!$conn) {
    die("Database connection failed.");
}
mysqli_set_charset($conn, "utf8mb4");