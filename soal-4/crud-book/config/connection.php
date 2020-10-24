<?php
    $servername = "localhost";
    $database = "dumbways.id";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password, $database);
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }