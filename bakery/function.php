<?php
    $conn = mysqli_connect("localhost:3308","root","","bakery_shop");

    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $kodekue = $data['kodekue'];
        $namakue = $data['namakue'];
        $gambar = $data['gambar'];
        $harga = $data['harga'];
        $stokkue = $data['stokkue'];

$query = "INSERT INTO rens_bakery (kodekue, namakue, gambar, harga, stokkue)
    VALUES ('$kodekue', '$namakue', '$gambar', '$harga', '$stokkue')";

        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function hapus($no){
        global $conn;
        $no = mysqli_real_escape_string($conn, $no);
        mysqli_query($conn, "DELETE FROM rens_bakery WHERE no = $no");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $no = $data["no"];
        $kodekue = $data['kodekue'];
        $namakue = $data['namakue'];
        $gambar = $data['gambar'];
        $harga = $data['harga'];
        $stokkue = $data['stokkue'];

        $query = "UPDATE rens_bakery SET
            kodekue = '$kodekue',
            namakue = '$namakue',
            gambar = '$gambar',
            harga = '$harga',
            stokkue = '$stokkue'
            WHERE no = $no
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }
    ?>