<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h1>Data from Database</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Action</th>
    </tr>

    <?php
    include('koneksi.php'); // Sesuaikan dengan file koneksi.php yang Anda miliki

    // Sesuaikan dengan nama tabel dan kolom di database Anda
    $query = "SELECT id, nama, email, pesanan FROM pembeli";
    $result = mysqli_query($koneksi, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['nama'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['pesan'] . '</td>';
        echo '<td><a href="update.php?id=' . $row['id'] . '">Update</a></td>'; // Tambah link untuk update
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
