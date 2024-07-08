<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_nb']);
    $kata_sandi = mysqli_real_escape_string($koneksi, $_POST['kata_sandi_nb']);

    if (empty($nama)) {
        echo "<script>alert('Nama dibutuhkan!'); document.location.href='authentication-login.html'; </script>";
        exit;
    } else if (empty($kata_sandi)) {
        echo "<script>alert('Kata sandi dibutuhkan!'); document.location.href='authentication-login.html'; </script>";
        exit;
    }

    $query = "SELECT * FROM admin_nb WHERE nama_nb = '$nama' AND kata_sandi_nb = '$kata_sandi'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id_nb'];
        $_SESSION['nama'] = $user['nama_nb'];
        $_SESSION['email'] = $user['email_nb'];
        $_SESSION['no_hp'] = $user['no_hp_nb'];
        $_SESSION['tanggal_lahir'] = $user['tanggal_lahir_nb'];
        $_SESSION['alamat'] = $user['alamat_nb'];

        echo "<script>alert('Login berhasil!'); document.location.href='index.php';</script>";
        exit;
    } else {
        echo "<script>alert('Nama atau kata sandi salah!'); document.location.href='authentication-login.html';</script>";
    }
}