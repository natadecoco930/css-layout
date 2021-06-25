<?php 

$laptops = [
	["gambar"=>"Dell.png","nama"=>"Dell XPS 13","seri"=>"CPS13","spek"=>"Proc : Intel Core I5-1065G7, RAM : 16GB,Internal : 512GB SSD, Grafis : Intel Iris Plus Graphics","harga"=>"Rp.15.999.000"],
	["gambar"=>"macbook.png","nama"=>"Macbook Air (2020)","seri"=>"Macbook Air 2020","spek"=>"Proc : Intel Core I7-Gen10th, RAM : 16GB,Internal : 2TB SSD, Grafis : Intel Iris Plus Graphics","harga"=>"Rp.13.669.000"],
	["gambar"=>"rog.png","nama"=>"Asus ROG Zephyrus G14","seri"=>"Zephyrus G14","spek"=>"Proc : AMD Ryzen 7 4800H, RAM : 16GB,Internal : 1TB SSD M.2 NVMe PCIe 3.0, Grafis : NVIDIA GeForce RTX 2060","harga"=>"Rp.15.999.000"],
	];



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Laptop</title>
</head>
<header>
	<h1>Daftar Laptop Terbaik 2021</h1>
	<nav>
		<ul class="menu">
			<li class="submenu"><a href="#">Home</a></li>
			<li class="submenu"><a href="#">About</a></li>
			<li class="submenu"><a href="#">Contact Us</a></li>
		</ul>
	</nav>
</header>
<body>
	<style type="text/css">
		header {
			width: 100%;
			height: 70px;
			background-color: #282828;

		}
		body {
			margin: 0;
			padding: 0;
			background-image: url('img/title-2.jpg');
  			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}
		.box{
			width: 590px;
			background: rgba(0, 0, 0, 0.4);
			padding: 40px;
			margin: auto;
			margin-top: 2.5%;
			margin-bottom: 2.5%;
			color: white;
			font-family: 'Century Gothic',sans-serif;
		}


		h1 {
			position: absolute;
			padding: 3px;
			float: left;
			margin-left: 2%;
			margin-top: 10px;
			font-family: cursive;
			width: 600px;
			letter-spacing: 2px;
			color: white;

		}
		.menu {
			width: auto;
			float: right;
			margin-top: 8px;
		}
		.submenu {
			font-family: cursive;
			display: inline-block;
			padding: 15px
		}
		a {
			text-align: center;
			color: white;
			text-decoration: none;
			font-size: 1.2vw;
		}
		a:hover {
			color: #006994;
			transition: 0.5s;
		}

	</style>
	<?php foreach($laptops as $lap): ?>
	<div class="box">
	<ul>
		<img src="img/<?php echo $lap["gambar"] ?>">
		<li>Nama Laptop : <?php echo $lap["nama"]; ?></li>
		<li>Seri Laptop : <?php echo $lap["seri"]; ?></li>
		<li>Spesifikasi : <?php echo $lap["spek"]; ?></li>
		<li>Harga : <?php echo $lap["harga"]; ?></li>
	</ul>
	</div>
	<?php endforeach; ?>

</body>
</html>