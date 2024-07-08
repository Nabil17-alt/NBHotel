<?php
// Meng-include file koneksi database
include 'koneksi.php';

// Query untuk mengambil data dari tabel customer_nb
$sql = "SELECT nama_nb, email_nb, tipekamar_nb, checkin_nb, checkout_nb FROM customer_nb";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Output data setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["nama_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["email_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["tipekamar_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["checkin_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["checkout_nb"] . "</h6></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' class='border-bottom-0'><h6 class='fw-semibold mb-1'>Tidak ada data pesanan</h6></td></tr>";
}

// Menutup koneksi
$koneksi->close();