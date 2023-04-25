<?php
    include "../../../Controller/Produk/obat.php";

    $obat = new Produk();
    $detail = $obat->get_obat_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="editCSS.css">
    <title>CRUD OOP PHP mySQL</title>
</head>

<body>
    <nav class="navbar w-75 mx-auto navbar-expand-lg navbar-warning bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">SehatQ</a>

          <div class="w-50 d-flex justify-content-center">
            <form class="d-flex w-100">
              <input class="form-control me-2 ms-5" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>

          <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary me-2">Masuk</button>
            <button type="button" class="btn btn-secondary">Daftar</button>
          </div>
        </div>
    </nav>
      
    <form method="post" enctype="multipart/form-data" action="../../../Model/CRUD/proses.php?aksi=edit&id=<?= $detail['id_obat']; ?>" class="container w-50 d-flex mt-5">
        <div class="gambar w-50 h-75 position-relative">
          <img src="../../Info_Produk/images/<?= $detail['gambar'] ?>" alt="" class="w-100 h-100">
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
      
        <div class="form w-50 ms-3 h-75 ">
          <div class="row g-3 align-items-center">
            <div class="col-md-4 w-100">
              <label for="nama_obat" class="form-label">Nama Obat</label>
              <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $detail['nama_obat']; ?>">
            </div>
      
            <div class="col-md-4 w-100">
              <label for="deskripsi_obat" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi_obat" name="deskripsi" rows="4" value="<?= $detail['deskripsi']; ?>"></textarea>
            </div>
      
            <div class="col-md-4 w-100">
              <label for="kategori_obat" class="form-label">Kategori</label>
              <select class="form-select" id="kategori_obat" name="kategori">
                <option value="" selected disabled>Pilih kategori</option>
                <option value="Obat Flu">Obat flu</option>
                <option value="Obat sakit kepala">Obat sakit kepala</option>
                <option value="Obat demam">Obat demam</option>
              </select>
            </div>
      
            <div class="col-md-4 w-50">
              <label for="harga_obat" class="form-label"><i class="fas fa-dollar-sign me-2"></i>Harga Obat</label>
              <div class="input-group">
                <span class="input-group-text">Rp</span>
                <input type="text" class="form-control" id="harga_obat" name="harga_obat" value="<?= $detail['harga_obat']; ?>">
              </div>
            </div>
      
            <div class="col-md-4 w-50">
              <label for="stok_obat" class="form-label"><i class="fas fa-clipboard-list me-2"></i>Stok Obat</label>
              <div class="input-group">
                <input type="text" class="form-control" id="stok_obat" name="stok_obat" value="<?= $detail['stok_obat']; ?>">
                <span class="input-group-text">pcs</span>
              </div>
            </div>
          </div>
      
          <div class="button mt-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary bg-gradient me-2"><i class="fas fa-save me-2"></i>Simpan</button>
            
            <button type="reset" class="btn btn-secondary bg-gradient"><i class="fas fa-times me-2"></i>Batal</button>
          </div>
        </div>
      </form>
      
    
</body>

</html>