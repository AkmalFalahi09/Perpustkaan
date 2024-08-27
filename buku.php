<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Buku</h2>
    <div class="row">
        <?php 
        include "koneksi.php";
        $qry_buku=mysqli_query($conn,"select * from buku");
        while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="assets/foto_produk/<?=$dt_buku['foto']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <p class="card-text">Jumlah Stok : <?=substr($dt_buku['stok'], 0,10)?></p>
                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
              </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
<?php 
    include "footer.php";
?>
</body>
</html>
