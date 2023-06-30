<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="View/Assets/CSS/style.css">
    <link rel="stylesheet" href="View/Assets/CSS/AdminButton.css">
    <link rel="stylesheet" href="View/Assets/CSS/root.css">

    <title>SehatQ</title>
</head>

<body>

    <body>
        <!-- Topbar Start -->
        <div class="container-fluid bg-light shadow-sm bg-gradient" style="position: fixed; z-index: 999;">
            <div class="row align-items-center py-3 px-xl-5 w-100 mx-auto navbar navbar-expand-lg">

                <div class="col-lg-3 d-none d-lg-block">
                    <a href="" class="text-decoration-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-danger font-weight-bold border px-3 mr-1">Sehat <span class="text-dark">Q</span></h1>
                    </a>
                </div>

                <div class="col-lg-6 col-6 text-left" style="height: 5em">
                    <!-- form search -->
                    <form action="View/ProductView/SearchResult.php" class="mt-3" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari obat.." name="cari">
                            <div class="input-group-append">
                                <span class="input-group-text bg-primary text-dark">
                                    <button type="submit" class="fa fa-search" style="background-color: #03ac0e;border: none; color: white;"></button>
                                </span>
                            </div>
                        </div>
                    </form>

                    <div class="navbar-nav navbar-collapse mt-1">
                        <!-- link  masih kosong-->
                        <a href="#" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Shop</a>
                        <a href="#" class="nav-item nav-link">fitur 1</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Keranjang</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="#" class="dropdown-item">Lihat Keranjang</a>
                                <a href="View/AdminPage/PurchaseDetails.php" class="dropdown-item">Lihat Pembelian</a>
                            </div>
                        </div>

                        <a href="#" class="nav-item nav-link">fitur 3</a>
                        <!-- akhir link -->
                    </div>
                </div>

                <div class="col-lg-3 col-6 text-right">
                    <?php
                    require_once "Model/UserModel/User.php";
                    $user = new user();
                    session_start();

                    if (isset($_SESSION['username'])) {

                        // Validasi apakah user adalah admin
                        $id_user   = $_SESSION['id_pembeli'];
                        $is_admin  = $user->is_user_admin($id_user);
                        if ($is_admin) {
                            // Tampilkan link ke halaman admin jika user adalah admin
                            echo '<a href="View/UserView/Admin/" class="box btn btn-light me-5 text-dark"><span class="fw-bold fs-6"><i class="fa-solid fa-user fa-lg align-middle fs-4"></i> <span class="align-middle">' . $_SESSION['username'] . '</span></span></a>';

                            echo '<a href="Controller/UserController/LoginAndRegister.php?aksi=logout" class="btn text-dark rounded" onclick="return confirm_logout()"><span class="fw-bold fs-6">Log Out</span></a>';
                        } else {
                            echo '<a href="View/UserView/Admin/Profile.php" class="btn text-dark rounded" style="width: 40%; "><span class="fw-bold fs-6"><img src="View/Assets/Images/default-profile.jpg" class="ms-5 w-25 rounded-circle" alt=""><span class="align-middle ms-1">' . $_SESSION['username'] . '</span></span></a>';
                            echo '<span class="text-dark"> | </span>';

                            echo '<a href="Controller/UserController/LoginAndRegister.php?aksi=logout" class="btn text-dark rounded" onclick="return confirm_logout()"><span class="fw-bold fs-6">Log Out</span></a>';
                        }
                    } else {
                        // Jika user belum login
                        echo '<a href="View/UserView/Register.php" class="btn btn-outline-primary rounded"><span class="text-primary fs-6 fw-bold">Daftar</span></a>';
                        echo '<span class="text-dark"> | </span>';
                        echo '<a href="View/UserView/Login.php" class="btn btn-primary text-light rounded"><span class="fw-bold fs-6">Masuk</span></a>';
                    }

                    ?>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Hero Start -->
        <div class="container-fluid pb-2 mb-5" style="box-shadow: 0px 2px 9px 0px rgba(0,0,0,0.1); padding-top: 10em;">
            <div class="row border-top px-xl-5 w-75 mx-auto">
                <div class="col-lg-3 d-none d-lg-block">
                    <div style="position: relative; width: 100%; height: 0; padding-top: 141.4286%;
                padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
                border-radius: 8px; will-change: transform;">
                        <iframe style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;" src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFg_qHDa-U&#x2F;view?embed">
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
                    </nav>
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item" style="height: 410px;">
                                <img class="img-fluid" src="View/Assets/Images/Pet Care.jpg">

                                <div class="carousel-caption">
                                    <div class="p-3" style="max-width: 700px;">
                                        <a href="View/ProductView/SearchResult.php?cari=obat hewan" class="btn btn-danger fw-bold bg-gradient py-2 px-3">Belanja Sekarang</a>
                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item active" style="height: 410px;">
                                <img class="img-fluid" src="View/Assets/Images/anak.jpg" alt="Image">

                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px;">
                                        <a href="View/ProductView/SearchResult.php?cari=obat anak" class="btn btn-danger bg-gradient py-2 px-3 fw-bold text-light">Belanja Sekarang</a>
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
        <!-- Gero End -->


        <!-- Featured Start -->
        <div class="container-fluid w-75">
            <div class="row px-xl-5 pb-3">

                <div class="col-lg-3 col-md-4 col-sm-12 pb-1">
                    <a href="#">
                        <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                            <h1 class="fa fa-credit-card text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Top Up</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <a href="View/ProductView/SearchResult.php?cari=masker">
                        <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                            <h1 class="fa fa-mask-face text-primary m-0 mr-2"></h1>
                            <h5 class="font-weight-semi-bold m-0">Masker</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <a href="View/ProductView/SearchResult.php?cari=obat">
                        <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                            <h1 class="fas fa-pills text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Obat</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <a href="View/ProductView/SearchResult.php?cari=obat">
                        <div class="d-flex align-items-center border mb-4" style="padding: 15px;">
                            <h1 class="fa fa-tags text-primary m-0 mr-3"></h1>
                            <h5 class="font-weight-semi-bold m-0">Semua Promo</h5>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!-- Featured End -->


        <!-- Categories Start -->
        <?php
        // buat object
        include "Model/ProductModel/Product.php";
        $obat = new Produk();
        $row = $obat->get_products();
        $jumlah_obat = count($row);

        $row2 = $obat->get_stok_less_50();
        $jumlah_obat2 = count($row2);
        ?>
        <div class="product mx-auto bg-warning bg-gradient pt-5 mb-5">
            <i class="fa-solid fa-angle-right pre-btn"></i>
            <i class="fa-solid fa-angle-right nxt-btn bg-light rounded-circle"></i>


            <div class="product-container">
                <?php for ($i = 0; $i < $jumlah_obat; $i++) { ?>
                    <a href="View/ProductView/ProductDetails.php?id=<?= $row[$i]['id_obat']; ?>"> <!-- mengambil id barang -->
                        <div class="product-card bg-light">
                            <div class="product-image">
                                <span class="discount-tag">Stok Terbatas</span>
                                <img src="View/ProductView/images/<?= $row[$i]['gambar']; ?>" class="product-thumb" alt="">
                            </div>
                            <div class="product-info mx-auto">
                                <h2 class="product-brand"><?= $row[$i]['nama_obat'] ?></h2>
                                <span class="price">Rp. <?= $row[$i]['harga_obat'] ?></span>
                                <span class="stok">Stok : <?= $row[$i]['stok_obat'] ?></span>
                                <img class="sehatQ" src="View/ProductView/images/SehatQ.png" alt="">
                                <span class="opacity-75 fs">Dikelola oleh SehatQ</span>
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffe358" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <span class="opacity-75">5.0 | x.x ulasan</span>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>

        <div class="product mx-auto produk-bg bg-gradient pt-5 mt-5">
            <i class="fa-solid fa-angle-right pre-btn"></i>
            <i class="fa-solid fa-angle-right nxt-btn bg-light rounded-circle"></i>


            <div class="product-container">
                <?php for ($i = 0; $i < $jumlah_obat2; $i++) { ?>
                    <a href="View/ProductView/ProductDetails.php.php?id=<?= $row2[$i]['id_obat']; ?>"> <!-- mengambil id barang -->
                        <div class="product-card bg-light">
                            <div class="product-image">
                                <span class="discount-tag">Stok Terbatas</span>
                                <img src="View/ProductView/images/<?= $row2[$i]['gambar']; ?>" class="product-thumb" alt="">
                            </div>
                            <div class="product-info mx-auto">
                                <h2 class="product-brand"><?= $row2[$i]['nama_obat'] ?></h2>
                                <span class="price">Rp. <?= $row2[$i]['harga_obat'] ?></span>
                                <span class="stok">Stok : <?= $row2[$i]['stok_obat'] ?></span>
                                <img class="sehatQ" src="View/ProductView/images/SehatQ.png" alt="">
                                <span class="opacity-75 fs">Dikelola oleh SehatQ</span>
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffe358" class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
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
        <div class="container-fluid offer pt-5 w-7 mb-5">
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
        <div class="container-fluid pt-5 w-75 mt-5">
            <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Produk Baru</span></h2>
            </div>
            <div class="row px-xl-5 pb-3">

                <?php for ($i = 0; $i < $jumlah_obat; $i++) { ?>
                    <div class="col-lg-2 col-md-6 col-sm-12 pb-1">
                        <a href="View/ProductView/ProductDetails.php.php?id=<?= $row[$i]['id_obat']; ?>"> <!-- mengambil id barang -->
                            <div class="product-card mb-5">
                                <div class="product-image">
                                    <img src="View/ProductView/images/<?= $row[$i]['gambar']; ?>" class="product-thumb" alt="">
                                </div>
                                <div class="product-info mx-auto">
                                    <h2 class="product-brand"><?= $row[$i]['nama_obat'] ?></h2>
                                    <span class="price">Rp. <?= $row[$i]['harga_obat'] ?></span>
                                    <span class="stok">Stok : <?= $row[$i]['stok_obat'] ?></span>
                                    <img class="sehatQ" src="View/ProductView/images/SehatQ.png" alt="">
                                    <span class="opacity-75 fs">Dikelola oleh SehatQ</span>
                                    <br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffe358" class="bi bi-star-fill" viewBox="0 0 16 16">
                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                    </svg>
                                    <span class="opacity-75">5.0 | x.x ulasan</span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>
        <!-- Products End -->

        <?php include "View/Footer.php"; ?>