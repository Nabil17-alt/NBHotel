<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama_nb']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email_nb']);
    $kata_sandi = mysqli_real_escape_string($koneksi, $_POST['kata_sandi_nb']);

    if (empty($nama)) {
        echo "<script>alert('Nama dibutuhkan!'); document.location.href='authentication-register.html'; </script>";
        exit;
    } else if (empty($email)) {
        echo "<script>alert('Email dibutuhkan!'); document.location.href='authentication-register.html'; </script>";
        exit;
    } else if (empty($kata_sandi)) {
        echo "<script>alert('Kata sandi dibutuhkan!'); document.location.href='authentication-register.html'; </script>";
        exit;
    }

    if (strlen($nama) < 5) {
        echo "<script>alert('Nama harus terdiri dari minimal 5 karakter!'); document.location.href='authentication-register.html'; </script>";
        exit;
    } else if (strlen($kata_sandi) < 8) {
        echo "<script>alert('Kata sandi harus terdiri dari minimal 8 karakter!'); document.location.href='authentication-register.html'; </script>";
        exit;
    }

    $query = "INSERT INTO admin_nb (nama_nb, email_nb, kata_sandi_nb) VALUES ('$nama', '$email', '$kata_sandi')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Akun berhasil dibuat!'); document.location.href='authentication-login.html';</script>";
        exit();
    } else {
        echo "Gagal melakukan pendaftaran: " . mysqli_error($koneksi);
    }
}