<?php
    include "../Controller/obat.php";

    $obat = new Obat();
    $detail = $obat->getObatById($_GET['id']);
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
    
    <title>CRUD OOP PHP mySQL</title>
</head>

<body>
    <div class="container">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data User</h4>
        
        <form method="POST" action="../Model/proses.php?aksi=edit&id=<?= $detail['id_obat']; ?>">
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="<?= $detail['nama_obat']; ?>">
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <textarea class="form-control" id="kategori" name="kategori"><?= $detail['kategori']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="harga_obat" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga_obat" name="harga_obat" value="<?= $detail['harga_obat']; ?>">
            </div>

            <div class="mb-3">
                <label for="stok_obat" class="form-label">Stok</label>
                <input type="text" class="form-control" id="stok_obat" name="stok_obat" value="<?= $detail['stok_obat']; ?>">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $detail['deskripsi']; ?>">
            </div>	
        
            <div class="mb-3">
		        <label for="gambar" class="form-label">
			    <i class="bi bi-file-image"></i> Gambar:
                </label>
		        <input type="file" class="form-control" name="gambar">
	        </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</body>

</html>