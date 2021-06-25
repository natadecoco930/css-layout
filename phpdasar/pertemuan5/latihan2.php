<?php 

$days = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Hari</title>
 	<style type="text/css">
 		div	{
 			width: 80px;
 			height: 50px;
 			background-color: aqua;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		}
 	</style>
 </head>
 <body>
 	<?php foreach($days as $day) : ?>
 	<div><?= $day; ?></div>
 <?php endforeach; ?>
 
 </body>
 </html>