<?php   
require 'functions.php';
$toko = query("SELECT * FROM keyboard")
?>
<!DOCTYPE html>
<html>
<head>
    <title>Keyboard Shop</title>
</head>
<body>
    <h1>Keyboard Shop</h1>

    <a href="tambah.php">Tambah Data</a>
    <br></br>

    <table border="1" cellpadding="10" cellspacing="2">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Kode</th>
            <th>Harga</th>
            <th>Gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($toko as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" >Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin');">Hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["kode"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="200" height="160"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body> 