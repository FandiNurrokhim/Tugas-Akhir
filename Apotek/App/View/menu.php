<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">

    <title>Menu</title>
</head>

<body> 

<?php
// Session
    session_start();
    if (!isset($_SESSION['username']) OR !isset($_SESSION['password'])) {
        header('location:login.php');
    } 
// buat object
    include "../Controller/obat.php";
    $obat = new Obat();
    $row = $obat->getObat();
    $jumlah_obat = count($row);
?>

<section class="product"> 
    <h2 class="product-category">best selling</h2>
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
   
    <div class="product-container">
    <?php for ($i = 0; $i < $jumlah_obat; $i++) { ?>
        <a href="detail_produk.php?id=<?= $row[$i]['id_obat']; ?>"> <!-- mengambil id barang -->
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">Stok Terbatas</span>
                <img src="images/<?= $row[$i]['gambar']; ?>" class="product-thumb" alt="">
            </div>
            <div class="product-info mx-auto">
                <h2 class="product-brand"><?= $row[$i]['nama_obat']?></h2>
                <p class="product-short-description"><?= $row[$i]['deskripsi']?></p>
                <span class="price">Rp. <?= $row[$i]['harga_obat']?></span>
                <span class="stok"><?= $row[$i]['stok_obat']?></span>
            </div>
        </div>
    </a>
        <?php } ?>
</section>

    <script type="text/javascript" src="../Controller/lightslider/script.js"></script>
</body>

</html>