<?php 

require "functions.php";

$anime = query("SELECT * FROM anime");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
	
	<h1>MyAnimeList</h1>

	<a href="tambah.php">Tambah Data</a>
	<br>
	<br>

	<table class="content-table">
		
		<thead>
			<th>No.</th>
			<th>Aksi</th>
			<th>Judul</th>
			<th>Gambar</th>
			<th>Episode</th>
			<th>Genre</th>
			<th>Rating</th>
			<th>Author</th>
			<th>Produksi</th>
		</thead>

		<?php $i=1; ?>
		
		<?php foreach ($anime as $row ) :?>

		<tbody>
			<td><?= $i; ?>.</td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> | 
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick = "return confirm('yakin?');">Hapus</a>
			</td>
			<td><?= $row["judul"]; ?></td>
			<td><img src="img/<?= $row["gambar"]; ?>" alt="nata" width="100px"></td>
			<td><?= $row["episode"]; ?></td>
			<td><?= $row["genre"]; ?></td>
			<td><?= $row["rating"]; ?></td>
			<td><?= $row["pengarang"]; ?></td>
			<td><?= $row["rumah_produksi"]; ?></td>
		</tbody>

		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</div>



</body>
</html>