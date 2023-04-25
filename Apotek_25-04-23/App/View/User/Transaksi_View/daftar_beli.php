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
<!-- Tampilkan data transaksi dalam tabel -->
<div class="container my-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Barang</th>
                <th>Gambar</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Sisa Saldo</th>
                <th>Tanggal Pembelian</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Panggil fungsi untuk mengambil data transaksi
                session_start();
                include "../../../Controller/User/pembeli.php";
                $transaksi = new Pembeli();
                $data = $transaksi->get_transaksi_by_username($_SESSION['id_pembeli']);
                foreach ($data as $row) {
            ?>

                <tr>
                    <td><?= $row['nama_obat'] ?></td>
                    <td><img src="../../Info_Produk/images/<?= $row['gambar'] ?>" alt="" style="width: 100px; height: auto;"></td>
                    <td><?= $row['jumlah'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['total'] ?></td>
                    <td><?= $row['sisa_saldo'] ?></td>
                    <td><?= $row['tanggal_transaksi'] ?></td>
                </tr>
            <?php } ?>
        </tbody>


    </table>
</div>
</body>
</html>

</body>
</html>