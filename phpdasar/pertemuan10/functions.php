<?php

// untuk mengkoneksikan ke database
$conn = mysqli_connect("localhost","root","","phpdasar");


// membuat function untuk mekanisme query
function query($mysqli) {
	// mencari variabel $conn di luar function untuk query
	global $conn;
	// query data tabel
	$result = mysqli_query($conn, $mysqli);
	// membuat array yang isinya kosong
	$rows = [];
	// ambil semua data dari object result dengan looping
	while( $anm = mysqli_fetch_assoc($result)){
		// menambahkan element array
		$rows[] = $anm;
	}
	// mengembalikan dalam bentuk true
	return $rows;
}

function tambah($post){
	global $conn;

	// ambil data dari tiap elemen dalam form
	$judul = $post["judul"];
	$episode = $post["episode"];
	$genre = $post["genre"];
	$rating = $post["rating"];
	$pengarang = $post["pengarang"];
	$rumah_produksi = $post["rumah_produksi"];
	$gambar = $post["gambar"];

	// query insert data
	$query = "INSERT INTO anime VALUES ('','$judul','$episode','$genre','$rating','$pengarang','$rumah_produksi','$gambar')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM anime WHERE id = $id");
	return mysqli_affected_rows($conn);

}

 ?>