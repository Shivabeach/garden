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
		<main class="center">

			<?php
			$this->table->set_caption('Planting, Planning & Reacting');
      $this->table->set_heading('ID', 'Date', 'Action');
      foreach ($plant as $row) {
        $action = auto_typography($row->action);
        $this->table->add_row($row->id, $row->date, $action);
        }
        echo $this->table->generate();?>
		</main>

		<div class="right">
			<h3 class="block-head">Todo</h3>
				<?php
				$data = [
					'class' =>'todo',
				];
				echo form_open('forms/recieve', $data);?>
					<label for="date">Date</label>
					<input type="text" name="date" id="date" class="todo-date" required><br/>

					<label for="todo-action">Todo:</label><textarea name="action" class="todo-action" id="todo-action" required></textarea>
					<button type="submit" class="submit">Submit</button>
					<button type="reset" class="reset">Reset</button>
				</form>
				<div class="todo-result bold-7"></div>
		</div>
		<footer class="footer">
			<div class="datey bold-8 border"></div>
			<div class="copyr bold-7 border"></div>
			<div class="border">Page rendered in <strong>{elapsed_time}</strong> seconds.</div>
			<div class="border"> <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></div>
			<div>More foot</div>
		</footer>
	</div>
	<script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>

	<script type="module" src="<?php echo base_url('assets/js/blank.js');?>"></script>
</body>
</html>