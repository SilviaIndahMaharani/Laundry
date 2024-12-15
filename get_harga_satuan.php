<?php
include('koneksi.php'); // Pastikan sudah terhubung dengan database

// Ambil id jenis layanan dari URL
$id_jenis_layanan = $_GET['id'];

// Query untuk mengambil harga satuan
$query = "SELECT harga_satuan FROM jenis_layanan WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id_jenis_layanan);
$stmt->execute();
$stmt->bind_result($harga_satuan);
$stmt->fetch();


// Mengirimkan hasil dalam bentuk JSON
if ($harga_satuan !== null) {
    echo json_encode(['success' => true, 'harga_satuan' => $harga_satuan]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>
