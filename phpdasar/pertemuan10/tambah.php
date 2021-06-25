<?php 
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){

	// cek apakah data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0){
		echo 
		"<script>
			alert('data berhasil ditambahkan!')
			document.location.href = 'index.php';
		</script>";
	} else {
		echo 
		"<script>
			alert('data gagal ditambahkan!')
			document.location.href = 'index.php';
		</script>";
		
	}



}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Anime</title>
</head>
<body>
	<h1>Tambah data</h1>
	<form action="tambah.php" method="post">
		<ul>
			<li>
				<label for="judul">Judul :</label>
				<input type="text" name="judul" id="judul" required>
			</li>
			<li>
				<label for="episode">Episode :</label>
				<input type="text" name="episode" id="episode" required>
			</li>
			<li>
				<label for="genre">Genre :</label>
				<input type="text" name="genre" id="genre" required>
			</li>
			<li>
				<label for="rating">Rating :</label>
				<input type="text" name="rating" id="rating" required>
			</li>
			<li>
				<label for="pengarang">Creator :</label>
				<input type="text" name="pengarang" id="pengarang" required>
			</li>
			<li>
				<label for="rumah_produksi">Production :</label>
				<input type="text" name="rumah_produksi" id="rumah_produksi" required>
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<br>
			<button type="submit" name="submit">Masukan data!</button>
		</ul>
	</form>

</body>
</html>