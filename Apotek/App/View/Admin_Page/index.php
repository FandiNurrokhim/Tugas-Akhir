<!DOCTYPE html>
<html>
<head>
	<title>CRUD Obat Apotek</title>
	<!-- Tambahkan link ke file CSS Bootstrap -->
	<!-- BOOTSTRAP CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">CRUD Obat Apotek</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="CRUD/tambah.php">Tambah Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../Info_Produk/menu.php">Menu</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container my-5">
		<!-- Tabel untuk menampilkan data obat -->
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID Obat</th>
					<th>Gambar</th>
					<th>Nama Obat</th>
					<th>Kategori</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Deskripsi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "Controller/obat.php";
				$obat = new Obat();
				$data_obat = $obat->getObat();
				foreach ($data_obat as $row) {
					?>
					<tr>
						<td><?= $row['id_obat'] ?></td>
						<td>
							<img src="View/images/<?= $row['gambar']; ?>" alt="<?= $row['gambar'] ?>" class="img-fluid" style="max-height: 150px;">
						</td>
						<td><?= $row['nama_obat'] ?></td>
						<td><?= $row['kategori'] ?></td>
						<td><?= $row['harga_obat'] ?></td>
						<td><?= $row['stok_obat'] ?></td>
						<td><?= $row['deskripsi'] ?></td>
						<td>
							<a href="CRUD/edit.php?id=<?= $row['id_obat'] ?>" class="btn btn-primary btn-sm">Edit</a>
							<a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row['id_obat'] ?>">Hapus</a>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal<?= $row['id_obat'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Obat</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									Apakah Anda yakin ingin menghapus data obat <?= $row['nama_obat'] ?>?
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
									<a href="../../Model/CRUD/proses.php?aksi=hapus&id=<?= $row['id_obat'] ?>" class="btn btn-danger">Hapus</a>
								</div>
								</div>
							</div>
							</div>

						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
	<!-- Tambahkan script untuk link ke file JavaScript Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
