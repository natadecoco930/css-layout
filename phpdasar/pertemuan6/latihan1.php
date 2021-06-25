
<!DOCTYPE html>
<html>
<head>
	<title>Number</title>
</head>
<h1>Array Angka</h1>
<style type="text/css">
	.kotak{

		width :40px;
		height: 40px;
		background-color: aqua;
		text-align: center;
		line-height: 30px;
		margin: 3px;
		float: left;
		transition: 1s;
	}
	.kotak = hover {
		transform: rotate(360deg);
		border-radius: 50%;
	}
	.clear {
		clear: both;
	}
	</style>
<body>

	<?php $Numbers = [[1,2,3],[4,5,6],[7,8,9]] ?>

	<?php foreach ($Numbers as $number) : ?>
		<?php foreach($number as $numb): ?>
			<div class="kotak"><?php echo $numb; ?></div>
		<?php endforeach; ?>
			<div class="clear"></div>
	<?php endforeach; ?>

</body>
</html>