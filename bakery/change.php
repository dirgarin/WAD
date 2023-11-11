<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM rens_bakery WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Sukses!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Kue Ren's Bakery</title>
    </head>
    <body>
        <h1>Ubah Data Kue Ren's Bakery</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="kodekue">Kode Kue</label>
                    <input type="text" name="kodekue" id="kodekue" required value = <?= $brg["kodekue"];?>>
                </li>
                <li>
                    <label for="namakue">Nama Kue</label>
                    <input type="text" name="namakue" id="namakue" required value = <?= $brg["namakue"];?>>
                </li>
                <li>
                    <input type="text" name="gambar" id="gambar" required value = <?= $brg["gambar"];?>>
                    <label for="gambar">Gambar</label>
                </li>
                <li>
                    <label for="hargajual">Harga Kue</label>
                    <input type="text" name="harga" id="harga" required value = <?= $brg["harga"];?>>
                </li>
                <li>
                    <label for="stokkue">Stok Kue</label>
                    <input type="text" name="stokkue" id="stokkue" required value = <?= $brg["stokkue"];?>>
                </li>
                    <button type="submit" name="submit">Ubah Data</button>
            </ul>
        </form>
    </body>
</html>