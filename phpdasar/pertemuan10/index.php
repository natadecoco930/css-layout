<?php
// untuk menghubungkan ke functions.php
require "functions.php";

// mengambil data dari tabel anime atau query data
$anime = query("SELECT * FROM anime");

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Top Anime</title>
</head>
<body>
	<h1>Best Anime</h1>
		<a href="tambah.php">Tambah data</a>
		<br>
		<br>

<table border="1" cellpadding="5" cellspacing="1">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Judul</th>
		<th>Episode</th>
		<th>Genre</th>
		<th>Rating</th>
		<th>Creator</th>
		<th>Production</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach($anime as $anm): ?>
	<tr>
		<th><?= $i; ?></th>
		<th><a href="">Ubah</a> | <a href="hapus.php?id=<?= $anm["id"];?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></th>
		<th><img src="img/<?php echo $anm["gambar"]; ?>" width="100"></th>
		<th><?= $anm["judul"]; ?></th>
		<th><?= $anm["episode"]; ?></th>
		<th><?= $anm["genre"]; ?></th>
		<th><?= $anm["rating"]; ?></th>
		<th><?= $anm["pengarang"]; ?></th>
		<th><?= $anm["rumah_produksi"]; ?></th>
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

</body>
</html>