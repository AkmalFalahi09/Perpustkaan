<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
    include "header.php";
?>
<h2>Selamat datang di website Perpustakaan Online, <?=$_SESSION['nama_siswa']?></h2>
<?php
    include "footer.php";
?>
</body>
</html>
