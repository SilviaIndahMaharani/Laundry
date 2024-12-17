<?php
include('koneksi.php'); // Pastikan koneksi database berhasil

$data = json_decode(file_get_contents("php://input"), true);

// Log untuk memastikan data diterima
error_log(print_r($data, true));

if (!empty($data)) {
    $tanggal = $data['tanggal'] ?? null;
    $namaPelanggan = $data['namaPelanggan'] ?? null;
    $beratCucian = $data['beratCucian'] ?? null;
    $jenisLayanan = $data['jenisLayanan'] ?? null;
    $kategori = $data['kategori'] ?? null; // Null jika kategori tidak diisi
    $hargaSatuan = $data['hargaSatuan'] ?? null;
    $totalHarga = $data['totalHarga'] ?? null;

    // Validasi apakah semua field penting terisi
    if (!$tanggal || !$namaPelanggan || !$beratCucian || !$jenisLayanan || !$hargaSatuan || !$totalHarga) {
        echo json_encode(["success" => false, "message" => "Semua field harus diisi."]);
        exit;
    }

    // Query untuk menyimpan data
    $query = "INSERT INTO pemasukan (tanggal, nama_pelanggan, berat_cucian, jenis_layanan_id, kategori_id, harga_satuan, total_harga) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssiidii", $tanggal, $namaPelanggan, $beratCucian, $jenisLayanan, $kategori, $hargaSatuan, $totalHarga);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "message" => "Data tidak valid."]);
}

$conn->close();
?>
