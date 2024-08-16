<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title ?></title>
		<link rel="stylesheet" href="<?php echo base_url('assets/dist/main-dist.css');?>" media="screen"
		onload="this.media='all'">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
	</head>
	<body>
		<div id="container">
			<header class="header">
				<div class="head"><?php echo $header;?></div>
			</header>
			<div class="left">
				<pre class="local"></pre>
			</div>
		<main class="center">Center main
			<div class="see">
				<pre></pre>
			</div>
		</main>

		<div class="right">
			<h3 class="block-head">Todo</h3>
				<form action="" class="todo">
					<input type="hidden" class="uid" name="uid" value="<?php echo rand(1,999);?>">
					<span class="date-text">Date: </span><input type="date" name="date" id="date" class="todo-date" required><br/>
					<span class="todo-text">Todo: </span><textarea name="action" class="todo-action" id="todo-action" required></textarea>
					<button type="submit" class="submit">Submit</button>
					<button type="reset" class="reset">Reset</button>
				</form>
				<div class="todo-result bold-7"></div>
		</div>
		<footer class="footer">
			<div class="datey bold-8"></div>
			<div class="copyr bold-7"></div>
		</footer>
	</div>
	<script src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
	<!-- <script src="<?php echo base_url('assets/js/forms.js');?>"></script> -->
	<script src="<?php echo base_url('assets/js/copilot.js');?>"></script>
</body>
</html>