<?php
session_start();
include "koneksi.php";

// Pastikan pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); document.location.href='authentication-login.html';</script>";
    exit;
}

// Ambil data dari form
$user_id = $_SESSION['user_id'];
$nama = mysqli_real_escape_string($koneksi, $_POST['nama_nb']);
$email = mysqli_real_escape_string($koneksi, $_POST['email_nb']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp_nb']);
$tanggal_lahir = mysqli_real_escape_string($koneksi, $_POST['tanggal_lahir_nb']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat_nb']);

$query = "UPDATE admin_nb SET nama_nb = '$nama', email_nb = '$email', no_hp_nb = '$no_hp', tanggal_lahir_nb = '$tanggal_lahir', alamat_nb = '$alamat' WHERE id_nb = $user_id";

// Eksekusi query
if (mysqli_query($koneksi, $query)) {
    // Update data sesi
    $_SESSION['nama'] = $nama;
    $_SESSION['email'] = $email;
    $_SESSION['no_hp'] = $no_hp;
    $_SESSION['tanggal_lahir'] = $tanggal_lahir;
    $_SESSION['alamat'] = $alamat;

    echo "<script>alert('Profil berhasil diperbarui!'); document.location.href='profil.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan saat memperbarui profil!'); document.location.href='profil.php';</script>";
}

mysqli_close($koneksi);