<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LAUNDRY MBAH US</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


          <!-- Sidebar -->
          <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->
      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Mbah Us</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                 <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Pemasukan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button onclick="tambahData()" style="background-color: #4CAF50; color: white; border: none; padding: 6px 10px; cursor: pointer; border-radius: 5px;">
                <i class="bi bi-plus-circle" style="margin-right: 8px;"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Layanan</th>
                            <th>Kategori</th>
                            <th>Berat Cucian</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th>Jenis Layanan</th>
                            <th>Kategori</th>
                            <th>Berat Cucian</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>01-10-2024</td>
                            <td>Silvia</td>
                            <td>Cuci Kering</td>
                            <td>Baju</td>
                            <td>3 KG</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button onclick="hapusData(4)" style="background: none; border: none; cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="margin-right: 10px;"></i>
                                    <i class="bi bi-trash3-fill" style="color: red;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>02-10-2024</td>
                            <td>Silvia</td>
                            <td>Gosok</td>
                            <td>Baju</td>
                            <td>4 KG</td>
                            <td>Rp. 16.000</td>
                            <td>
                                <button onclick="hapusData(4)" style="background: none; border: none; cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="margin-right: 10px;"></i>
                                    <i class="bi bi-trash3-fill" style="color: red;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>03-10-2024</td>
                            <td>Ariska</td>
                            <td>Cuci Kering</td>
                            <td>Selimut</td>
                            <td>5 KG</td>
                            <td>Rp. 30.000</td>
                            <td>
                                <button onclick="hapusData(4)" style="background: none; border: none; cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="margin-right: 10px;"></i>
                                    <i class="bi bi-trash3-fill" style="color: red;"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>04-10-2024</td>
                            <td>Novriyanti</td>
                            <td>Cuci Kering</td>
                            <td>Baju</td>
                            <td>2 KG</td>
                            <td>Rp. 10.000</td>
                            <td>
                                <button onclick="hapusData(4)" style="background: none; border: none; cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="margin-right: 10px;"></i>
                                    <i class="bi bi-trash3-fill" style="color: red;"></i>
                                </button>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>05-10-2024</td>
                            <td>Maharani</td>
                            <td>Cuci Kering</td>
                            <td>Baju</td>
                            <td>3 KG</td>
                            <td>Rp. 15.000</td>
                            <td>
                                <button onclick="hapusData(4)" style="background: none; border: none; cursor: pointer;">
                                    <i class="bi bi-pencil-square" style="margin-right: 10px;"></i>
                                    <i class="bi bi-trash3-fill" style="color: red;"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Form untuk Tambah Data -->
<div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Blue Style Header -->
      <div style="background-color: #007bff; height: 10px;"></div>
      <div class="modal-header">
        <h5 class="modal-title" id="tambahDataModalLabel">Tambah Data Pemasukan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form Input -->
        <form id="tambahDataForm" method="POST" action="proses_pemasukan.php">
          <div class="row">
            <!-- Kolom Kiri -->
            <div class="col-md-6">
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
              </div>
              <div class="mb-3">
                <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" required>
              </div>
              <div class="mb-3">
                <label for="beratCucian" class="form-label">Berat Cucian</label>
                <input type="text" class="form-control" id="beratCucian" name="beratCucian" required>
              </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="jenisLayanan" class="form-label">Jenis Layanan</label>
                    <select class="form-select" id="jenisLayanan" name="jenisLayanan" required onchange="updateHargaSatuan()">
                        <option value="">Pilih Jenis Layanan</option>
                        <?php
                        // Pastikan koneksi database sudah dilakukan sebelumnya
                        include('koneksi.php'); // Memasukkan file koneksi database

                        // Query untuk mendapatkan data jenis layanan
                        $result_jenis_layanan = $conn->query("SELECT id, nama_jenis_layanan FROM jenis_layanan");

                        // Mengecek apakah ada hasil
                        if ($result_jenis_layanan->num_rows > 0) {
                            // Jika ada data, tampilkan sebagai option
                            while ($row = $result_jenis_layanan->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['nama_jenis_layanan'] . "</option>";
                            }
                        } else {
                            // Jika tidak ada data, tampilkan pesan alternatif
                            echo "<option value=''>Tidak ada data</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori" name="kategori" required onchange="updateHargaSatuan()">
                        <option value="">Pilih Kategori</option>
                        <?php
                        // Pastikan koneksi database sudah dilakukan sebelumnya
                        include('koneksi.php'); // Memasukkan file koneksi database

                        // Query untuk mendapatkan data jenis layanan
                        $result_kategori_layanan = $conn->query("SELECT id, nama_kategori FROM kategori_layanan");

                        // Mengecek apakah ada hasil
                        if ($result_kategori_layanan->num_rows > 0) {
                            // Jika ada data, tampilkan sebagai option
                            while ($row = $result_kategori_layanan->fetch_assoc()) {
                                echo "<option value='" . $row['id'] . "'>" . $row['nama_kategori'] . "</option>";
                            }
                        } else {
                            // Jika tidak ada data, tampilkan pesan alternatif
                            echo "<option value=''>Tidak ada data</option>";
                        }
                        ?>
                    </select>
                </div>
              
                <div class="mb-3">
    <label for="hargaSatuan" class="form-label">Harga Satuan</label>
    <input type="text" class="form-control" id="hargaSatuan" name="hargaSatuan" readonly value="">
</div>

<div class="mb-3">
    <label for="harga" class="form-label">Total Harga</label>
    <div class="card border-danger text-center">
      <div class="card-body">
        <h5 class="card-title text-danger fw-bold mb-0" id="harga">Rp. 0</h5>
      </div>
    </div>
</div>


          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary" onclick="simpanData()">Simpan Data</button>
      </div>
    </div>
  </div>
</div>

            </div>
            <script>
              function updateTotalHarga(hargaSatuan) {
  var beratCucian = document.getElementById('beratCucian').value;

  // Pastikan berat cucian valid
  if (beratCucian && !isNaN(beratCucian) && hargaSatuan) {
    // Menghitung total harga
    var totalHarga = hargaSatuan * beratCucian;

    // Membulatkan total harga dan pastikan tidak ada desimal
    totalHarga = Math.round(totalHarga); // Membulatkan ke angka bulat

    // Menampilkan total harga dalam format Rupiah tanpa desimal
    document.getElementById('harga').innerText = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0, // Tidak menampilkan angka desimal
      maximumFractionDigits: 0  // Tidak menampilkan angka desimal
    }).format(totalHarga);
  } else {
    // Menampilkan Rp 0 jika input berat cucian tidak valid
    document.getElementById('harga').innerText = 'Rp. 0';
  }
}




// Fungsi untuk update total harga
function updateHargaSatuan() {
  var jenisLayanan = document.getElementById('jenisLayanan').value;

  // Jika jenis layanan belum dipilih, set harga satuan menjadi kosong
  if (!jenisLayanan) {
    document.getElementById('hargaSatuan').value = ''; // Kosongkan harga satuan
    document.getElementById('harga').innerText = 'Rp. 0'; // Set total harga ke Rp 0
    return; // Hentikan eksekusi jika jenis layanan belum dipilih
  }

  // Jika jenis layanan dipilih, fetch harga satuan
  fetch(`get_harga_satuan.php?id=${jenisLayanan}`)
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        var hargaSatuan = data.harga_satuan;

        // Menampilkan harga satuan dalam format Rupiah tanpa desimal
        document.getElementById('hargaSatuan').value = new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR',
          minimumFractionDigits: 0, // Tidak menampilkan angka desimal
          maximumFractionDigits: 0  // Tidak menampilkan angka desimal
        }).format(hargaSatuan);

        // Update total harga setiap kali harga satuan berubah
        updateTotalHarga(hargaSatuan);
      } else {
        alert("Harga satuan tidak ditemukan.");
      }
    });
}





// Event listener untuk mengupdate total harga saat berat cucian diubah
document.getElementById('beratCucian').addEventListener('input', function() {
  var beratCucian = parseFloat(this.value);
  var hargaSatuan = parseFloat(document.getElementById('hargaSatuan').value.replace(/[^0-9.-]+/g, ""));
  
  if (!isNaN(beratCucian) && !isNaN(hargaSatuan)) {
    var totalHarga = hargaSatuan * beratCucian;
    document.getElementById('harga').innerText = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR'
    }).format(totalHarga);
  }
});
              </script>
            
            
            <!-- End of Main Content -->
            

        </div>
        <!-- End of Content Wrapper -->

            <!-- Footer -->
            <?php include 'footer.php'; ?>
            <!-- End of Footer -->
    </div>
    <!-- End of Page Wrapper -->
 

            

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Fungsi untuk menampilkan modal
function tambahData() {
    // Menampilkan modal ketika tombol "Tambah Data" diklik
    $('#tambahDataModal').modal('show');
}

// Fungsi untuk menyimpan data
function simpanData() {
    const tanggal = document.getElementById('tanggal').value;
    const namaPelanggan = document.getElementById('namaPelanggan').value;
    const jenisLayanan = document.getElementById('jenisLayanan').value;
    const kategori = document.getElementById('kategori').value;
    const beratCucian = document.getElementById('beratCucian').value;
    const harga = document.getElementById('harga').value;

    // Validasi input
    if (!tanggal || !namaPelanggan || !jenisLayanan || !kategori || !beratCucian || !harga) {
        alert("Semua field harus diisi!");
        return;
    }

    // Logika untuk menyimpan data, bisa menggunakan AJAX untuk mengirim ke server
    console.log('Data yang disimpan:', {
        tanggal,
        namaPelanggan,
        jenisLayanan,
        kategori,
        beratCucian,
        harga
    });

    // Menutup modal setelah data disimpan
    $('#tambahDataModal').modal('hide');
}

    </script>

    <!-- tombol close -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    

    <!-- mengubah ukuran background model -->
    <style>
        .modal-dialog {
          max-width: 60%; /* Memperbesar lebar modal */
          margin: 2rem auto; /* Memberi jarak dari atas/bawah */
        }
        .modal-content {
          min-height: 50vh; /* Memperbesar tinggi modal */
        }
        .modal-backdrop.show {
          opacity: 0.8; /* Menyesuaikan transparansi latar belakang */
        }
      </style>
      

</body>

</html>