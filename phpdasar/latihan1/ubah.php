<?php 

require "functions.php";


$id = $_GET["id"];

$anm = query("SELECT * FROM anime WHERE id = $id") [0];



if ( isset($_POST["submit"])) {

	if( ubah($_POST) > 0) {
		echo 
			"<script>
				alert('data berhasil diubah!!');
				document.location.href = 'index.php';
			</script>";
	}else{
		echo
			"<script>
				alert('data gagal diubah!!');
				document.location.href = 'index.php';
			</script>";
	}

}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>
	<h1>Tambah</h1>

	<form action="" method="post">
		
		<input type="hidden" name="id" value="<?= $anm["id"]; ?>">

		<ul>
			<li>
				<label for="judul">Judul : </label>
				<input type="text" name="judul" id="judul" required value="<?= $anm["judul"]; ?>">
			</li>
			<br>
			<li>
				<label for="episode">episode : </label>
				<input type="text" name="episode" id="episode" required value="<?= $anm["episode"]; ?>">
			</li>
			<br>
			<li>
				<label for="genre">genre : </label>
				<input type="text" name="genre" id="genre" required value="<?= $anm["genre"]; ?>">
			</li>
			<br>
			<li>
				<label for="rating">rating : </label>
				<input type="text" name="rating" id="rating" required value="<?= $anm["rating"]; ?>">
			</li>
			<br>
			<li>
				<label for="pengarang">pengarang : </label>
				<input type="text" name="pengarang" id="pengarang" required value="<?= $anm["pengarang"]; ?>">
			</li>
			<br>
			<li>
				<label for="rumah_produksi">produksi : </label>
				<input type="text" name="rumah_produksi" id="rumah_produksi" required value="<?= $anm["rumah_produksi"]; ?>">
			</li>
			<br>
			<li>
				<label for="gambar">gambar : </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $anm["gambar"]; ?>">
			</li>
			<br>
			<button type="submit" name="submit">Ubah data</button>

		</ul>

	</form>

</body>
</html>