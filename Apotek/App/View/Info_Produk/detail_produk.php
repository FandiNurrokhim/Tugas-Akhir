<?php
    include "../../Controller/Produk/obat.php";

    $obat = new Produk();
    $row = $obat->get_obat_by_id($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- Awesome Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" />
  </head>

  <body>
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6">
          <img src="images/<?= $row['gambar']; ?>" class="img-fluid" alt="Produk" />
        </div>
          
          <div class="col-md-6">
            <h1 class="fw-bold mb-3"><?= $row['nama_obat']; ?></h1>
            <h2 class="text-muted mb-3"><?= $row['kategori']; ?></h2>
        <!-- form untuk mengarah ke proses transaksi -->
          <form action="../../Model/Transaksi/proses_pembelian.php?id=<?= $row['id_obat']; ?>" method="post">
            <h3 class="text-danger mb-3"><?= $row['harga_obat']; ?></h3>
            <input type="hidden" name="harga_obat" value="<?= $row['harga_obat']; ?>">
            <p class="mb-3"><?= $row['deskripsi']; ?></p>
      
          <div class="mb-3">

          <label class="form-label">Jumlah</label>
            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button" id="minus-btn"><span class="bi bi-dash"></span></button>
                <input type="text" name="jumlah" id="quantity-input" value="1"/>
                <button class="btn btn-outline-secondary" type="button" id="plus-btn"><span class="bi bi-plus"></span></button>
            </div>
          </div>

          <div class="d-grid gap-2 mb-3">
            <button class="btn btn-success" type="submit">BeliSekarang</button>
          </div>
        </form>

        </div>
      </div>
    </div>

    <script>
    const minusBtn = document.getElementById("minus-btn");
    const plusBtn = document.getElementById("plus-btn");
    const quantityInput = document.getElementById("quantity-input");

    minusBtn.addEventListener("click", () => {
        if (quantityInput.value > 1) {
            quantityInput.value--;
            minusBtn.disabled = false;
        } else {
            minusBtn.disabled = true;
        }
    });

    plusBtn.addEventListener("click", () => {
        quantityInput.value++;
        minusBtn.disabled = false;
    });

    minusBtn.disabled = quantityInput.value == 1;
</script>
  </body>
</html>

</body>
</html>