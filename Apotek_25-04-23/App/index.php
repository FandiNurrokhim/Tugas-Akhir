<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="View/Info_Produk/CSS/style.css">

    <title>SehatQ</title>
  </head>
  <body>
    <body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary bg-gradient" style="position: fixed; z-index: 999;">
        <div class="row align-items-center py-3 px-xl-5 w-75 mx-auto">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border px-3 mr-1">Sehat <span class="text-dark">Q</span></h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <!-- form search -->
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari obat..">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary text-dark">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <?php 
                session_start();
                if (isset($_SESSION['username'])) {
                    // Jika user sudah login, tampilkan nama user dan link ke halaman user_profile.html
                    echo '<a href="View/User/user_profile.html" class="btn"><span class="badge fs-6"><i class="fa-solid fa-user fa-lg align-middle fs-4"></i> <span class="align-middle">' . $_SESSION['username'] . '</span></span></a>';
                    echo '<span class="text-light">|</span>';
                    echo '<a href="Model/UserModel/proses.php?aksi=logout" class="btn"><span class="badge fs-6">Log Out</span></a>';
                } else {
                    // Jika user belum login, tampilkan link "Daftar" dan "Log In"
                    echo '<a href="View/User/Login_Register_User/daftar.php" class="btn"><span class="badge fs-6">Daftar</span></a>';
                    echo '<span class="text-light">|</span>';
                    echo '<a href="View/User/Login_Register_User/masuk.php" class="btn"><span class="badge fs-6">Log In</span></a>';
                }                
                ?>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid pb-2 mb-5" style="box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.1); padding-top: 5em">
        <div class="row border-top px-xl-5 w-75 mx-auto">
            <div class="col-lg-3 d-none d-lg-block">
                <div style="position: relative; width: 100%; height: 0; padding-top: 141.4286%;
                padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                border-radius: 8px; will-change: transform;">
                <iframe style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFg_qHDa-U&#x2F;view?embed">
                </iframe>
                </div>
            </div>
            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <!-- link  masih kosong-->
                            <a href="" class="nav-item nav-link active">Home</a>
                            <a href="" class="nav-item nav-link">Shop</a>
                            <a href="" class="nav-item nav-link">fitur 1</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">fitur 2</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="" class="dropdown-item">Lihat Barang</a>
                                    <a href="" class="dropdown-item">Lihat Pembelian</a>
                                </div>
                            </div>
                            <a href="" class="nav-item nav-link">fitur 3</a>
                            <!-- akhir link -->
                        </div>
                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="Pet Care.jpg">
                            
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 700px;">
                                    <a href="" class="btn btn-danger fw-bold bg-gradient py-2 px-3">Belanja Sekarang</a>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="anak.jpg" alt="Image">

                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <a href="" class="btn btn-danger bg-gradient py-2 px-3 fw-bold text-light" >Belanja Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Featured Start -->
    <div class="container-fluid w-75">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                    <h1 class="fa fa-credit-card text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Top Up</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                    <h1 class="fa fa-mask-face text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Masker</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                    <h1 class="fas fa-pills text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Obat</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                    <h1 class="fa fa-tags text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Semua Promo</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->


    <!-- Categories Start -->
<?php
// buat object
    include "Controller/Produk/obat.php";
    $obat = new Produk();
    $row = $obat->get_obat();
    $jumlah_obat = count($row);
?>
    <div class="product mx-auto pt-5">
        <h2 class="product-category">best selling</h2>
        <i class="fa-solid fa-angle-right pre-btn"></i>
        <i class="fa-solid fa-angle-right nxt-btn"></i>

    
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
        </div>
    </div>
    <!-- Categories End -->


    <!-- Offer Start -->
    <div class="container-fluid offer pt-5 w-75">
        <div class="row px-xl-5">
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-right text-white mb-2 py-5 px-5">
                    <img src="img/offer-1.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Diskon 20%</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Obat Alien</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Beli Sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pb-4">
                <div class="position-relative bg-secondary text-center text-md-left text-white mb-2 py-5 px-5">
                    <img src="img/offer-2.png" alt="">
                    <div class="position-relative" style="z-index: 1;">
                        <h5 class="text-uppercase text-primary mb-3">Diskon 20%</h5>
                        <h1 class="mb-4 font-weight-semi-bold">Obat Planet</h1>
                        <a href="" class="btn btn-outline-primary py-md-2 px-md-3">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5 w-75">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Paling Laku</span></h2>
        </div>

        <div class="row px-xl-5 pb-3 bg-danger">
            <p>produk</p>
        </div>
    </div>
    <!-- Products End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 w-75">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Produk Baru</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                        <div class="d-flex justify-content-center">
                            <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5 w-75">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">Sehat</span>Q</h1>
                </a>
                <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Chat-GPT</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Bootstrap 5</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Fandi front-end</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Fandi back-end</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Stuck Overflow</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Template Bootstrap 5</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Diriku</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    © <a class="text-dark font-weight-semi-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                    by
                    <a class="text-dark font-weight-semi-bold" href="https://htmlcodex.com">HTML Codex</a><br>
                    Distributed By <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="Controller/JS/script.js"></script>
</body>
</html>
