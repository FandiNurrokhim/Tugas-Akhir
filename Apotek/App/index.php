<!DOCTYPE html>
<html>
<head>
	<title>CRUD Obat Apotek</title>
</head>
<body>
	<h1>CRUD Obat Apotek</h1>
	<a href="View/tambah.php" class="btn btn-warning">Tambah Data</a>
	<!-- Tabel untuk menampilkan data obat -->
	<table>
		<thead>
			<tr>
				<th>ID Obat</th>
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
					<td><?= $row['nama_obat'] ?></td>
					<td><?= $row['kategori'] ?></td>
					<td><?= $row['harga_obat'] ?></td>
					<td><?= $row['stok_obat'] ?></td>
					<td><?= $row['deskripsi'] ?></td>
					<td>
						<a href="View/edit.php?id=<?= $row['id_obat'] ?>">Edit</a>
						<a href="Model/proses.php?aksi=hapus&id=<?= $row['id_obat'] ?>">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
