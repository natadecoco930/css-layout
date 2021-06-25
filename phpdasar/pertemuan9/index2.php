<?php 
//mengkoneksikan ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari tabel atau query data
$result = mysqli_query($conn, "SELECT * FROM anime");

// ambil data dari object result menggunakan array associative
// while($anim = mysqli_fetch_assoc($result)){
// 	var_dump($anim);
// }




 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Top Anime</title>
</head>
<body>
	<h1>Best Anime</h1>

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
	<?php while($row = mysqli_fetch_assoc($result)): ?>
	<tr>
		<th><?= $i; ?></th>
		<th><a href="">Ubah</a> | <a href="">Hapus</a></th>
		<th><img src="img/<?php echo $row["gambar"]; ?>" width="100"></th>
		<th><?= $row["judul"]; ?></th>
		<th><?= $row["episode"]; ?></th>
		<th><?= $row["genre"]; ?></th>
		<th><?= $row["rating"]; ?></th>
		<th><?= $row["pengarang"]; ?></th>
		<th><?= $row["rumah_produksi"]; ?></th>
	</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>

</body>
</html>