<?php
// Meng-include file koneksi database
include 'koneksi.php';

// Query untuk mengambil data dari tabel transaksi_nb dan customer_nb
$sql = "SELECT c.nama_nb, t.tipekamar_nb, t.lamamenginap_nb, t.biaya_nb, c.created_at_nb
        FROM transaksi_nb t
        JOIN customer_nb c ON t.customer_id_nb = c.id_nb";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Output data setiap baris
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["nama_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["tipekamar_nb"] . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["lamamenginap_nb"] . " Hari</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>Rp " . number_format($row["biaya_nb"], 0, ',', '.') . "</h6></td>";
        echo "<td class='border-bottom-0'><h6 class='fw-semibold mb-1'>" . $row["created_at_nb"] . "</h6></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5' class='border-bottom-0'><h6 class='fw-semibold mb-1'>Tidak ada data pesanan</h6></td></tr>";
}

// Menutup koneksi
$koneksi->close();
