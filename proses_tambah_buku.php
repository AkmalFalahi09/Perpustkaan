<?php

if($_POST){
    $nama_buku = $_POST['nama_buku'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok']
    $foto = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];

    if(empty($nama_buku)){
        echo "<script>alert('Nama buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    else if(empty($deskripsi)){
        echo "<script>alert('Deskripsi tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    else if(empty($jumlah)){
        echo "<script>alert('Jumlah tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    else if(empty($foto)){
        echo "<script>alert('Foto buku tidak boleh kosong');location.href='tambah_buku.php';</script>";
    }
    else {
        include "koneksi.php";

        $folder = "assets/foto_produk/";
        $path = $folder . basename($foto);

        if(move_uploaded_file($tmp_name, $path)){
            $insert = mysqli_query($conn, "INSERT INTO buku (nama_buku, deskripsi, foto) VALUES ('".$nama_buku."', '".$deskripsi."', '".$foto."')");
            if($insert){
                echo "<script>alert('Sukses menambahkan buku');location.href='tambah_buku.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan buku ke database');location.href='tambah_buku.php';</script>";
            }
        } else {
            echo "<script>alert('Gagal mengunggah foto');location.href='tambah_buku.php';</script>";
        }
    }
}
?>
