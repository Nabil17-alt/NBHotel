<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$tipekamar = $_POST['tipekamar'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

$checkin_date = new DateTime($checkin);
$checkout_date = new DateTime($checkout);
$lama_menginap = $checkout_date->diff($checkin_date)->days;

switch (($tipekamar)) {
    case "Kamar Deluxe":
        $biaya_per_malam = 1200000;
        break;
    case "Kamar Keluarga":
        $biaya_per_malam = 800000;
        break;
    case "Kamar Standar":
        $biaya_per_malam = 400000;
        break;
    default:
        $biaya_per_malam = 0;
}

$biaya_total = $biaya_per_malam * $lama_menginap;

$sql_customer = $koneksi->prepare("INSERT INTO customer_nb (nama_nb, email_nb, tipekamar_nb, checkin_nb, checkout_nb) VALUES (?, ?, ?, ?, ?)");
$sql_customer->bind_param("sssss", $nama, $email, $tipekamar, $checkin, $checkout);

if ($sql_customer->execute()) {
    $customer_id = $sql_customer->insert_id;

    $sql_transaksi = $koneksi->prepare("INSERT INTO transaksi_nb (customer_id_nb, tipekamar_nb, lamamenginap_nb, biaya_nb) VALUES (?, ?, ?, ?)");
    $sql_transaksi->bind_param("isii", $customer_id, $tipekamar, $lama_menginap, $biaya_total);

    if ($sql_transaksi->execute()) {
        echo "<script>alert('Terimakasih Telah Booking'); document.location.href='index.php';</script>";
    } else {
        echo "Error: " . $sql_transaksi->error;
    }

    $sql_transaksi->close();
} else {
    echo "Error: " . $sql_customer->error;
}

$sql_customer->close();
$koneksi->close();
