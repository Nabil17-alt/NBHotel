<?php
include 'koneksi.php';

$sql = "SELECT * FROM test_nb";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>No Kamar</th>
                <th>Harga</th>
                <th>Tipe Kamar</th>
                <th>Gambar</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nomor_kamar"] . "</td>";
        echo "<td>Rp " . number_format($row["harga"], 0, ',', '.') . "</td>";
        echo "<td>" . $row["tipe_kamar"] . "</td>";
        echo "<td><img src='" . $row["gambar"] . "' width='200' height='150'></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data kamar saat ini.";
}

$koneksi->close();