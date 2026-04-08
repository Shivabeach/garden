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
        <button class="tablink" onclick="openPage('Balm', this, 'orange' )">Bee Balm</button>
      </ul>
      <!-- Seperating tabs from tab content -->
      <div id="Pepper" class="tabcontent">
        <section class="split">
          <div class="box">
          <blockquote>
            <h4>Serrano Peppers</h4>
            <p>Species: <span class="name">Capsicum annuum</span></p>
            <p>Origin:  <span class="origin">Puebla and Hidalgo Mexico</p>
            <p>Scoville scale: <span class="scale">10,000–25,000 SHU</span></p>
            <p>Source: <span class="source"> Home Depot</p>
          </blockquote></div>
          <div class="box">
          <blockquote>
            <h4>Cayenne Peppers</h4>
            <p>Species: <span class="name">Capsicum annuum</span></p>
            <p>Origin:  <span class="origin">French Guiana</p>
            <p>Scoville scale: <span class="scale">30,000 - 50,000 SHU</span></p>
            <p>Source: <span class="source"> Erins Herb Nursery</span></p>
          </blockquote>
          </div>
        </section>
      </div>
      <div id="Anise" class="tabcontent">
        <section class="split">
          <div class="box">
            <blockquote>
              <h4>Anise Hyssop</h4>
              <p>Species: <span class="name">Agastache foeniculum</span></p>
              <p>Origin:  <span class="origin">North America</p>
              <p>Source: <span class="source"> Erins herb Nursery</p>
              <p>Anise Hyysop is renowned for being the premier plant for attracting pollinators such as butterflies and various types of Bees</p>
            </blockquote>
          </div>
        </section>
      </div>
      <div id="Tulsi" class="tabcontent">
        <section class="split">
          <div class="box">
        <blockquote>
          <h3>Holy Basil Kapoor</h3>
          <p>Species: <span class="name">Ocimum africanum</span></p>
          <p>Origin:  <span class="origin"> Asia</span></p>
          <p>Source: <span class="source"> Erins herb Nursery</span></p>
        </blockquote>
      </div>
    </section>
      </div>
      <div id="Sage" class="tabcontent">
        <section class="split">
          <div class="box">
            <blockquote>
              <h3>Pineapple Sage</h3>
              <p>Species: <span class="name">Salvia elegans</span></p>
              <p>Origin:  <span class="origin"> Mexico</span></p>
              <p>Source: <span class="source"> Erins herb Nursery</span></p>
              <p>Bloom Time: <span class="bloom">Summer, Fall</span></p>
            </blockquote>
          </div>
        </section>
      </div>
      <div id="Balm" class="tabcontent">
        <section class="split">
          <div class="box">
            <blockquote>
              <h3>Bee Balm</h3>
              <p>Species: <span class="name">Monarda</span></p>
              <p>Origin:  <span class="origin"> North America</span></p>
              <p>Source: <span class="source"> Erins herb Nursery</span></p>
              <p>Bloom Time: <span class="bloom">Summer, Fall</span></p>
            </blockquote>
          </div>
          <div class="box"><p>Bee balm is another wonderful Bee attractor. I have Bee balm and lemon balm around the yard. Lemon balm is growing wild mostly in the shade, but the Bee balm will get more sun. </p></div>
        </section>
      </div>
    </main>
    <?php $this->load->view("footer/tab-footer")?>
  </div>
  <script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
  <script src="<?php echo base_url('assets/js/tabs.js');?>"></script>