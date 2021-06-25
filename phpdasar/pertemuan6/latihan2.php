<?php 

// array yang indexnya kita buat sendiri
// Array associative yaitu array yang key-nya adalah string yang kita buat sendiri.

$collage_student = [
	[
		"nama"=>"Ade Kurnia Dinata",
		"npm"=>"G1F018022","jurusan"=>"Sistem Informasi",
		"email"=>"adekurnia.93@gmail.com",
		"gambar"=>"nata.jpg"
	],
	[
		"nama"=>"Riana Agustin",
		"npm"=>"G1A027020",
		"jurusan"=>"Teknik Informatika",
		"email"=>"rianaku.utut@gmail.com"
	]
];

 ?>
 <!-- array diatas adalah gabungan dari array numerik yang didalamnya memiliki array, misalnya array associative-->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Mahasiswa</title>
 </head>
 <body>
 	<h1>Data Mahasiswa</h1>
 	<?php foreach($collage_student as $student): ?>
 	<ul>
 		<li><img src="img/<?php echo["gambar"]; ?>"></li>
 		<li>Nama : <?php echo $student["nama"]; ?></li>
 		<li>NPM : <?php echo $student["npm"]; ?></li>
 		<li>Jurusan : <?php echo $student["jurusan"]; ?></li>
 		<li>Email : <?php echo $student["email"]; ?></li>
 	</ul>
 <?php endforeach; ?>
 
 </body>
 </html>
