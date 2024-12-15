<?php
// Menghubungkan dengan database
include('koneksi.php'); // Pastikan sudah terhubung dengan database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $tanggal = $_POST['tanggal'];
    $namaPelanggan = $_POST['namaPelanggan'];
    $beratCucian = $_POST['beratCucian'];
    $jenisLayanan = $_POST['jenisLayanan'];
    $kategori = $_POST['kategori'];
    $hargaSatuan = $_POST['hargaSatuan'];  // Pastikan 'hargaSatuan' ada di form

    // Pastikan harga satuan dan berat cucian valid (angka)
    if (is_numeric($hargaSatuan) && is_numeric($beratCucian)) {
        // Menghitung total harga
        $totalHarga = $hargaSatuan * $beratCucian;

        // Format harga satuan dan total harga menjadi format Rupiah
        $hargaSatuanFormatted = "Rp " . number_format($hargaSatuan, 0, ',', '.');
        $totalHargaFormatted = "Rp " . number_format($totalHarga, 0, ',', '.');

        // Query untuk menyimpan data ke database
        $query = "INSERT INTO pemasukan (tanggal, nama_pelanggan, berat_cucian, jenis_layanan, kategori, harga_satuan, total_harga) 
                  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssiiid", $tanggal, $namaPelanggan, $beratCucian, $jenisLayanan, $kategori, $hargaSatuan, $totalHarga);

        // Menjalankan query
        if ($stmt->execute()) {
            echo "Data berhasil disimpan! Total Harga: $totalHargaFormatted";
        } else {
            echo "Terjadi kesalahan dalam menyimpan data!";
        }

        $stmt->close();
    } else {
        echo "Harga Satuan atau Berat Cucian tidak valid!";
    }
}

$conn->close();
?>
