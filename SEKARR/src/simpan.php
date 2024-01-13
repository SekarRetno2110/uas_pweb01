<?php
include('koneksi.php');

// Jika ada aksi hapus
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $deleteSql = "DELETE FROM pembeli WHERE id = $id";

    if (mysqli_query($koneksi, $deleteSql)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $deleteSql . "<br>" . mysqli_error($koneksi);
    }
}

// Ambil data dari database
$query = "SELECT * FROM pembeli";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}

// Jika ada aksi tambah
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesanan = $_POST['pesanan'];

    $insertSql = "INSERT INTO pembeli (nama, email, pesanan) VALUES ('$nama', '$email', '$pesanan')";

    if (mysqli_query($koneksi, $insertSql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $insertSql . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>

    <h1>Data Pembeli</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesanan</th>
            <th>Aksi</th>
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['nama'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['pesanan'] . '</td>';
            echo '<td><a href="?hapus=' . $row['id'] . '">Hapus</a></td>';
            echo '</tr>';
        }
        ?>
    </table>

  

</body>

</html>

<?php
mysqli_close($koneksi);
?>
