<body>
		<div id="container">
			<header class="header">
				<div class="head"><?php echo $header;?></div>
			</header>
		<div class="left"> <?php $this->load->view('menus/menu'); ?> <pre class="local"></pre>
		<h4 class="block-head">Whats Happening</h4> <?php
				$data = [
					'class' =>'todo',
				];
		echo form_open('forms/recieve', $data);?> <label for="date">Date</label>
		<input type="text" name="date" id="date" class="todo-date" required><br />
		<label for="todo-action">Todo:</label>
		<textarea name="action" class="todo-action" id="todo-action" required></textarea>
		<button type="submit" class="submit">Submit</button>
		<button type="reset" class="reset">Reset</button>
	</form>
	</div>
<!-- end left -->
	<main class="center1">
	<?php	foreach ($plant as $row):?>
	<div class="display1">
		<div class="wrapper">
			<span class="drug"><?php echo $row->date; ?></span>
			<div class="actions"><?php echo $this->typography->auto_typography($row->action); ?></div>
		</div>
	</div> <?php endforeach; ?>
	</main>
	<?php $this->load->view("footer/footer")?>
</div>
<script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
<script type="module" src="<?php echo base_url('assets/js/blank.js');?>"></script>
</body>
</html>