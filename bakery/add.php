<?php
require 'function.php';

if (isset($_POST["submit"])){   
    if (tambah($_POST)> 0){
        echo "
            <script>
            alert('Sukses!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Gagal, Coba Lagi!');
        document.location.href = 'index.php';
        </script>
        ";
    }
};

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Kue Ren's Bakery</title>
    </head>
    <body>
        <h1>Tambah Data Kue Ren's Bakery</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="kodekue">Kode Kue</label>
                    <input type="text" name="kodekue" id="kodekue">
                </li>
                <li>
                    <label for="namakue">Nama Kue</label>
                    <input type="text" name="namakue" id="namakue">
                </li>
                <li>
                    <label for="harga">Harga Kue</label>
                    <input type="text" name="harga" id="harga">
                </li>
                <li>
                    <label for="stokkue">Stok Kue</label>
                    <input type="text" name="stokkue" id="stokkue">
                </li>
                <li>
                    <label for="gambar">Gambar Kue</label>
                    <input type="text" name="gambar" id="gambar">
                </li>
                    <button type="submit" name="submit">Tambah Data</button>
            </ul>
        </form>
    </body>
</html>