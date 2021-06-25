<?php 
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

	// cek username dan password
	if( $_POST["username"]=="admin" && $_POST["password"]=="123") {
		header("Location: admin.php");
		exit;
	} else {

	// jika salah, tampilkan pesan kesalahan
		$error = true;

	}

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login Admin</h1>

	<?php if( isset($error)): ?>
	<p style="color: red">Username / Password anda salah !</p>
	<?php endif; ?>

	<ul>
	<form action="" method="post">
		<li>
			<label for="username">Username</label>
			<input type="username" name="username" id="username">
		</li>
		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</li>
		<button type="submit" name="submit">Login</button>
	</form>
	</ul>
	
<!-- ctt : tag button tidak boleh diluar tag form jika ingin mentrigerred tombol submit, kalu tidak maka tombol button tidak akan bereaksi dan diam saja 
	"nata tolol" -->

</body>
</html>