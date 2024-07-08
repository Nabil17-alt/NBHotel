<?php
include "koneksi.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($koneksi, $_POST['email_nb']);

    if (empty($email)) {
        $_SESSION['error'] = "Email dibutuhkan!";
        header("Location: authentication-login.html");
        exit;
    }

    $query = "SELECT kata_sandi_nb FROM admin_nb WHERE email_nb = '$email'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['kata_sandi'] = $row['kata_sandi_nb'];
    } else {
        $_SESSION['error'] = "Email tidak ditemukan!";
    }

    header("Location: forgot-password.php");
    exit;
}