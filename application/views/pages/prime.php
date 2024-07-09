<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/dist/main-dist.css');?>" media="screen"
    onload="this.media='all'">
	</head>
	<body>
		<div id="container">
			<header class="header"><?php echo $header;?></header>
			<div class="left">Left</div>
			<main class="center">Center</main>
			<div class="right">Right</div>
			<footer class="footer">Footer</footer>
		</div>
		<script src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
	</body>
</html>