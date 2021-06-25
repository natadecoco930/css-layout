<?php

// untuk mengkoneksikan ke database
$conn = mysqli_connect("localhost","root","","phpdasar");


// membuat function untuk mekanisme query
function query($mysqli) {
	// mencari variabel $conn di luar function untuk query
	global $conn;
	// query data tabel
	$result = mysqli_query($conn, $mysqli);
	// membuat array yang sisnya kosong
	$rows = [];
	// ambil data dari object result dengan looping
	while( $anm = mysqli_fetch_assoc($result)){
		// menambahkan element array
		$rows[] = $anm;
	}
	// mengembalikan dalam bentuk true
	return $rows;
}


 ?>