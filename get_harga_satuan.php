<?php
include('koneksi.php'); // Menghubungkan ke database

$id = $_GET['id']; // Mendapatkan id jenis layanan dari URL

$query = "SELECT harga_satuan FROM jenis_layanan WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($hargaSatuan);
$stmt->fetch();

if ($hargaSatuan) {
    echo json_encode(["success" => true, "harga_satuan" => $hargaSatuan]);
} else {
    echo json_encode(["success" => false]);
}

$stmt->close();
$conn->close();
?>
