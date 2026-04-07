<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/main-dist.css');?>" media="screen" onload="this.media='all'">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
  </head>

  <body>
  	<header class="tab-header">
        <div class="head"><?php echo $header;?></div>
    </header>
    <div id="tab-container">
      <div class="tab-left"> <?php $this->load->view('menus/menu'); ?> </div>
      <main class="tab-center2">
        <ul class="inline">
          <button class="tablink" onclick="openPage('Pepper', this, 'purple' )">Peppers</button>
          <button class="tablink" onclick="openPage('Anise', this, '#6868AC' )" id="defaultOpen">Anise Hyssop</button>
          <button class="tablink" onclick="openPage('Tulsi', this, 'green' )">Holy Basil</button>
          <button class="tablink" onclick="openPage('Sage', this, 'blue' )">Sage</button>
          <button class="tablink" onclick="openPage('Nuts', this, 'orange' )">Nuts</button>
        </ul>
        <div id="Pepper" class="tabcontent">
          <h3>Peppers</h3>
          <h4>Serrano Peppers</h4>
          <blockquote>
          	<p>Species:	<span class="name">Capsicum annuum</span></p>
						<p>Origin:	<span class="origin">Puebla and Hidalgo Mexico</p>
						<p>Scoville scale: <span class="scale">10,000–25,000 SHU</span></p>
						<p>Source: <span class="source"> Home Depot</p>
					</blockquote>
          <h4>Cayenne Peppers</h4>
        </div>
        <div id="Anise" class="tabcontent">
          <h3>Anise Hyssop</h3>
          <blockquote>
          	<p>Species:	<span class="name">Agastache foeniculum</span></p>
						<p>Origin:	<span class="origin">North America</p>
						<p>Source: <span class="source"> Erins herb Nursery</p>
          </blockquote>
        </div>
        <div id="Tulsi" class="tabcontent">
          <h3>Holy Basil Kapoor</h3>
          <p>Species:	<span class="name">Ocimum africanum</span></p>
					<p>Origin:	<span class="origin"> Asia</p>
					<p>Source: <span class="source"> Erins herb Nursery</p>
        </div>
        <div id="Sage" class="tabcontent">
          <h3>Sages</h3>
          <p>Three types of sage</p>
        </div>
        <div id="Nuts" class="tabcontent">
          <h3>Nuts</h3>
          <p>Walnuts Pecans and brazil nuts</p>
        </div>
      </main>
      <?php $this->load->view("footer/tab-footer")?>
    </div>
    <script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
    <script src="<?php echo base_url('assets/js/tabs.js');?>"></script>
