<?php
// Koneksi ke database
$servername = "localhost";  // Ganti dengan nama server Anda
$username = "root";         // Ganti dengan username Anda
$password = "";             // Ganti dengan password Anda
$dbname = "laundry";        // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
