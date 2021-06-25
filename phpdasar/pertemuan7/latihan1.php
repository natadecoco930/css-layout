<?php 
// SUPERGLOBALS
// variabel php
// merupakan Array Assocsiative

// 1. $_GET
// cara memasukan data
// $_GET["nama"]="Ade Kurnia dinata";
// $_GET["kelas"]="XII IPS 3";

$laptops = [
	["gambar"=>"Dell.png","nama"=>"Dell XPS 13","seri"=>"XPS13","spek"=>"Proc : Intel Core I5-1065G7, RAM : 16GB,Internal : 512GB SSD, Grafis : Intel Iris Plus Graphics","harga"=>"Rp.15.999.000"],
	["gambar"=>"macbook.png","nama"=>"Macbook Air (2020)","seri"=>"Macbook Air 2020","spek"=>"Proc : Intel Core I7-Gen10th, RAM : 16GB,Internal : 2TB SSD, Grafis : Intel Iris Plus Graphics","harga"=>"Rp.13.669.000"],
	["gambar"=>"rog.png","nama"=>"Asus ROG Zephyrus G14","seri"=>"Zephyrus G14","spek"=>"Proc : AMD Ryzen 7 4800H, RAM : 16GB,Internal : 1TB SSD M.2 NVMe PCIe 3.0, Grafis : NVIDIA GeForce RTX 2060","harga"=>"Rp.15.999.000"],
	];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>GET</title>
 	<style type="text/css">
 		a{
 			text-decoration: none;
 		}
 	</style>
 </head>
 <body>
 	<h1>Daftra Mahasiswa</h1>
 	<?php foreach($laptops as $lap): ?>
 		<ul>
 			<li><a href="latihan2.php?nama=<?php echo $lap["nama"]; ?>&seri=<?php echo $lap["seri"];?>&spek=<?php echo $lap["spek"]; ?>&harga=<?php echo $lap["harga"]; ?>&gambar=<?php echo $lap["gambar"]; ?>"><?php echo $lap["nama"]; ?></a></li>
 		</ul>
 	<?php endforeach; ?>
 
 </body>
 </html>