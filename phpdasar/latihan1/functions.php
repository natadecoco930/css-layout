<?php 

$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;
	$judul = htmlspecialchars($data["judul"]);
	$episode = htmlspecialchars($data["episode"]);
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$produksi = htmlspecialchars($data["rumah_produksi"]);
	$gambar = htmlspecialchars($data["gambar"]);


	$query = "INSERT INTO anime VALUES('', '$judul', '$episode', '$genre', '$rating', '$pengarang', '$produksi', '$gambar')";

	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = ($data["id"]);
	$judul = htmlspecialchars($data["judul"]);
	$episode = htmlspecialchars($data["episode"]);
	$genre = htmlspecialchars($data["genre"]);
	$rating = htmlspecialchars($data["rating"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$produksi = htmlspecialchars($data["rumah_produksi"]);
	$gambar = htmlspecialchars($data["gambar"]);


	$query = "UPDATE anime SET judul='$judul', episode='$episode', genre = '$genre', rating = '$rating', pengarang='$pengarang', rumah_produksi='$produksi', gambar='$gambar' WHERE id = $id";

	mysqli_query($conn, $query);


	return mysqli_affected_rows($conn);

}

 ?>