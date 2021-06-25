<?php 
//mengecek apakah request GET yang dikirim melalui $_GET ada atau tidak
if(!isset($_GET["nama"]) || !isset($_GET["seri"]) || !isset($_GET["spek"]) || !isset($_GET["harga"])){

// //redirect (digunakan untuk memaksa kembali ke halaman sebelumnya)
	header("Location: latihan1.php");
	exit;
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Detail Laptop</title>
</head>
<body>
	<ul>
		<img src="img/<?php echo $_GET["gambar"]; ?>">
		<li><?php echo $_GET["seri"]; ?></li>
		<li><?php echo $_GET["spek"]; ?></li>
		<li><?php echo $_GET["harga"]; ?></li>

	</ul>
	<a href="latihan1.php">Kembali</a>
</body>
</html>