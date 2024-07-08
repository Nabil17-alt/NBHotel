<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['user_id'])) {
  echo "<script>alert('Anda harus login terlebih dahulu!'); document.location.href='authentication-login.html';</script>";
  exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBHotel - Profil</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logoicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Halaman</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Home</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Pesanan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">Transaksi</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->
    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/logo_admin.png" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">Profil Saya</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Profil</h5>
            <!-- Menampilkan Data Profil -->
            <div id="profile-view">
              <p><strong>Nama:</strong> <?php echo $_SESSION['nama']; ?></p>
              <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
              <p><strong>No HP:</strong> <?php echo $_SESSION['no_hp']; ?></p>
              <p><strong>Tanggal Lahir:</strong> <?php echo $_SESSION['tanggal_lahir']; ?></p>
              <p><strong>Alamat:</strong> <?php echo $_SESSION['alamat']; ?></p>
              <button type="button" class="btn btn-outline-primary m-1" id="edit-button">Edit Profil</button>
            </div>

            <!-- Form Mengedit Data Profil -->
            <form action="update_profile.php" method="post" enctype="multipart/form-data" id="profile-edit"
              style="display: none;">
              <div class="mb-3">
                <label for="nama_nb" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_nb" name="nama_nb"
                  value="<?php echo $_SESSION['nama']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="email_nb" class="form-label">Email</label>
                <input type="email" class="form-control" id="email_nb" name="email_nb"
                  value="<?php echo $_SESSION['email']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="no_hp_nb" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp_nb" name="no_hp_nb"
                  value="<?php echo $_SESSION['no_hp']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir_nb" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir_nb" name="tanggal_lahir_nb"
                  value="<?php echo $_SESSION['tanggal_lahir']; ?>" required>
              </div>
              <div class="mb-3">
                <label for="alamat_nb" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat_nb" name="alamat_nb"
                  value="<?php echo $_SESSION['alamat']; ?>" required>
              </div>
              <button type="submit" class="btn btn-outline-primary m-1">Simpan</button>
              <button type="button" class="btn btn-outline-danger m-1" id="cancel-button">Kembali</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script>
    document.getElementById('edit-button').addEventListener('click', function () {
      document.getElementById('profile-view').style.display = 'none';
      document.getElementById('profile-edit').style.display = 'block';
    });

    document.getElementById('cancel-button').addEventListener('click', function () {
      document.getElementById('profile-view').style.display = 'block';
      document.getElementById('profile-edit').style.display = 'none';
    });
  </script>
</body>

</html>