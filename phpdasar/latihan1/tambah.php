<?php 

require "functions.php";

if ( isset($_POST["submit"])) {

	if( tambah($_POST) > 0) {
		echo 
			"<script>
				alert('data berhasil ditambahkan!!');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo
			"<script>
				alert('data gagal ditambahkan!!');
				document.location.href = 'index.php';
			</script>";
	}

}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Tambah</h1>

	<form action="" method="post">
		
		<ul>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required>
			</li>
			<br>
			<li>
				<label for="episode">episode : </label>
				<input type="text" name="episode" id="episode" required>
			</li>
			<br>
			<li>
				<label for="genre">genre : </label>
				<input type="text" name="genre" id="genre" required>
			</li>
			<br>
			<li>
				<label for="rating">rating : </label>
				<input type="text" name="rating" id="rating" required>
			</li>
			<br>
			<li>
				<label for="pengarang">pengarang : </label>
				<input type="text" name="pengarang" id="pengarang" required>
			</li>
			<br>
			<li>
				<label for="rumah_produksi">produksi : </label>
				<input type="text" name="rumah_produksi" id="rumah_produksi" required>
			</li>
			<br>
			<li>
				<label for="gambar">gambar : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<br>
			<button type="submit" name="submit">Tambah data</button>

		</ul>

	</form>

</body>
</html>