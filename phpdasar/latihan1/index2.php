<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

$result = mysqli_query($conn, "SELECT * FROM anime");



// $anim = mysqli_fetch_assoc($result);
// 	var_dump($anim);



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar</h1>

<table border="1" cellpadding="10" cellspacing="0">
	
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Judul</th>
		<th>Gambar</th>
		<th>Episode</th>
		<th>Genre</th>
		<th>Rating</th>
		<th>Author</th>
		<th>Produksi</th>
	</tr>

	<?php $i=1; ?>
	<?php while ( $row = mysqli_fetch_assoc($result)):?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Edit</a> | 
			<a href="">Hapus</a>
		</td>
		<td><?= $row["judul"]; ?></td>
		<td><img src="img/<?= $row["gambar"]; ?>" alt="nata" width="100px"></td>
		<td><?= $row["episode"]; ?></td>
		<td><?= $row["genre"]; ?></td>
		<td><?= $row["rating"]; ?></td>
		<td><?= $row["pengarang"]; ?></td>
		<td><?= $row["rumah_produksi"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
</table>

</body>
</html>