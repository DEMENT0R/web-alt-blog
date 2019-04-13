<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Web-alt test Blog</title>
</head>
<body>
	<div class="container">
		<header>
			<?php include 'partials/nav.php'; ?>
		</header>
		<?php 
			if ($_GET["debug"] == '1') {
				//подключаем debug
				include 'partials/debug.php'; 
			}
			
		?>