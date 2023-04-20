<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="View/Info_Produk/CSS/style.css">

    <title>Menu</title>
</head>

<body> 

<?php
// buat object
    include "Controller/Produk/obat.php";
    $obat = new Produk();
    $row = $obat->get_obat();
    $jumlah_obat = count($row);
?>

<section class="product"> 
    <h2 class="product-category">best selling</h2>
    <a href="../User/Transaks_Viewi/daftar_beli.php" class="product-category">Lihat pembelian</a>
    <button class="pre-btn"><img src="View/Info_Produk/images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="View/Info_Produk/images/arrow.png" alt=""></button>
   
    <div class="product-container">
    <?php for ($i = 0; $i < $jumlah_obat; $i++) { ?>
        <a href="View/Info_Produk/detail_produk.php?id=<?= $row[$i]['id_obat']; ?>"> <!-- mengambil id barang -->
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">Stok Terbatas</span>
                <img src="View/Info_Produk/images/<?= $row[$i]['gambar']; ?>" class="product-thumb" alt="">
            </div>
            <div class="product-info mx-auto">
                <h2 class="product-brand"><?= $row[$i]['nama_obat']?></h2>
                <span class="price">Rp. <?= $row[$i]['harga_obat']?></span>
                <span class="stok">Stok : <?= $row[$i]['stok_obat']?></span>
                <img class="sehatQ" src="View/Info_Produk/images/SehatQ.png" alt="">
                <span class="opacity-75 fs">Dikelola oleh SehatQ</span>
                <br>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffe358" class="bi bi-star-fill" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <span class="opacity-75">5.0 | x.x ulasan</span>
            </div>
        </div>
    </a>
        <?php } ?>
</section>

    <script type="text/javascript" src="Controller/JS/script.js"></script>
</body>

</html>