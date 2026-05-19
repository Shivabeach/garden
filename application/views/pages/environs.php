<body>
		<div id="container">
			<header class="header">
				<div class="head"><?php echo $header;?></div>
			</header>
			<div class="left">
				<?php $this->load->view('menus/menu'); ?>
			<pre class="local"></pre>
			<h4 class="block-head">Garden Entries</h4>
			<?php
			$data = [
				'class' =>'conditions',
			];
			echo form_open('forms/soil', $data);?>
			<label for="date">Date</label>
			<input type="text" name="date" id="date" class="todo-date" required><br/>
			<label for="category">Category</label>
			<input type="text" list="cat" name="category" id="category" autocomplete="on"><br>
			<datalist id="cat">
				<option value="Soil Temperature"></option>
				<option value="Temperature"></option>
				<option value="AirTemp"></option>
				<option value="Rain"></option>
				<option value="Watered"></option>
				<option value="General"></option>
			</datalist>
			<label for="slug">Slug</label>
			<input type="text" name="slug" id="slug"><br>

			<label for="todo-action">Entries:</label><textarea name="action" class="todo-action" id="todo-action" required></textarea>
			<button type="submit" class="submit">Submit</button>
			<button type="reset" class="reset">Reset</button>
		</form>
		<div class="todo-result bold-7"></div>

		</div>
		<main class="center">
			<?php
				$this->table->set_caption('Soil & Weather Conditions');
			$this->table->set_heading('ID', 'Date', 'Category','Conditions');
			foreach ($cond as $row) {
			$action = auto_typography($row->action);
			$this->table->add_row(
				$row->id,
				$row->date,
				$row->category,
				$action);
			}
			echo $this->table->generate();
			?>
		</main>
		<div class="right">
			<h4>Environment</h4>
			<p>Soil temps taken with a 5 inch food thermometor ℉ </p>
			<?php
				foreach ($t as $row) {
					echo "<li>$row->date - $row->slug</li>";
				};
				?>
	</div>
	<?php $this->load->view("footer/footer")?>
</div>
<script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
<script type="module" src="<?php echo base_url('assets/js/blank.js');?>"></script>
</body>
</html>