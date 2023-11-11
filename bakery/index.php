<?php
require 'function.php';
$barang = query("SELECT * FROM rens_bakery")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ren's Bakery</title>
    </head>
    <body>
        <h1>Daftar Kue Ren's Bakery</h1>

        <a href="add.php">Tambah Data Kue</a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Kue</th>
                <th>Kode Kue</th>
                <th>Harga Kue</th>
                <th>Stok Kue</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="change.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="delete.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah anda yakin data dihapus??');">Hapus</a>
                </td>
                <td><img src="image/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namakue"]; ?></td>
                <td><?= $row["kodekue"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["stokkue"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>