<?php 

// array dibawah disebut dengan array multidimensi, yaitu array didalamnya berisi index sebagai array

$collage_student = [
	["Ade Kurnia Dinata","G1F018022","Sistem Informasi","adekurnia.93@gmail.com"],
	["Riana Agustin","G1A027020","Teknik Informatika","rianaku.utut@gmail.com"]
];

// ctt : array diatas masih beupa array numerik, yaitu array masih belum memiliki tipe data masing-masing tiap index

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Biodata Mahasiswa</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
 	
 	<?php foreach($collage_student as $student) : ?>
 	<ul>
 		<li>Nama : <?php echo $student[0]; ?></li>
 		<li>NPM : <?php echo $student[1]; ?></li>
 		<li>Prodi : <?php echo $student[2]; ?></li>
 		<li>Email : <?php echo $student[3]; ?></li>
 	</ul>

 <?php endforeach; ?>
 
 </body>
 </html>