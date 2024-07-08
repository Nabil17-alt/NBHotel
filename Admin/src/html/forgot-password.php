<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NBHotel</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logoicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/logo.png" width="180" alt="">
                </a>
                <h6>Masukkan Email yang sudah terdaftar</h6>
                <form action="./proses-sandi.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email_nb"
                      aria-describedby="email">
                  </div>
                  <div class="mb-4">
                    <label for="kata_sandi" class="form-label" id="kata_sandi_label" style="display: none;">Kata
                      Sandi:</label>
                    <p id="kata_sandi_value"></p>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check"></div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Cari Sandi</button>
                </form>
                <?php
                session_start();
                if (isset($_SESSION['kata_sandi'])) {
                  echo "<script>
                      document.addEventListener('DOMContentLoaded', function() {
                          var kataSandiLabel = document.getElementById('kata_sandi_label');
                          var kataSandiValue = document.getElementById('kata_sandi_value');
                          kataSandiValue.innerHTML = '{$_SESSION['kata_sandi']}';
                          kataSandiLabel.style.display = 'block';
                          setTimeout(function() {
                              window.location.href = 'authentication-login.html';
                          }, 5000);
                      });
                    </script>";
                  unset($_SESSION['kata_sandi']);
                }

                if (isset($_SESSION['error'])) {
                  echo "<script>alert('{$_SESSION['error']}');</script>";
                  unset($_SESSION['error']);
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>