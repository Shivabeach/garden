<body>
  <header class="tab-header">
    <div class="head"><?php echo $header;?></div>
  </header>
  <div id="tab-container">
    <div class="tab-left"> <?php $this->load->view('menus/menu'); ?> </div>
    <main class="tab-center2">
      <ul class="inline">
        <button class="tablink" onclick="openPage('Pepper', this, '#197fe6' )" id="defaultOpen">Peppers</button>
        <button class="tablink" onclick="openPage('Anise', this, '#df3adf' )" >Anise Hyssop</button>
        <button class="tablink" onclick="openPage('Tulsi', this, '#df8c3a' )">Basil</button>
        <button class="tablink" onclick="openPage('Sage', this, '#5899da' )">Sage</button>
        <button class="tablink" onclick="openPage('Balm', this, '#fb9e01' )">Bee Balm</button>
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
            </blockquote>
          </div>
          <div class="box">
            <p>Serrano's are Kims favorite pepper. She graduated to them from Jalopena's</p>
            <p> First flowers by 5/14/2026</p>
            <p>6/20/2026 Am now picking good sized peppers</p>
          </div>
          <div class="box">
            <blockquote>
              <h4>Cayenne Peppers</h4>
              <p>Species: <span class="name">Capsicum annuum</span></p>
              <p>Origin:  <span class="origin">French Guiana</p>
              <p>Scoville scale: <span class="scale">30,000 - 50,000 SHU</span></p>
              <p>Source: <span class="source"> Erins Herb Nursery</span></p>
            </blockquote>
          </div><div class="box">
          <p>Cayennes are hot as hell</p>
          <p>I have already picked one pepper from this plant, it was a scout pepper</p>
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
        <div class="box">
          <p>One plant is 5 years old, the 2nd plant was planted 2 years ago, and one plant was planted this year</p>
          <p>2/16/2026 Plants are now about 3 feet high</p>
          <p>5/31/2026 Main plant is flowing</p>
        </div>
      </section>
    </div>
    <div id="Tulsi" class="tabcontent">
      <section class="split">
        <div class="box">
          <blockquote>
            <h4>Tulsi Kapoor</h4>
            <p>Species: <span class="name">Ocimum africanum</span></p>
            <p>Origin:  <span class="origin"> Asia</span></p>
            <p>Source: <span class="source"> Erins herb Nursery</span></p>
          </blockquote>
          <ul>
            <li>Ocimum africanumLour., or lemon basil, is an aromatic herb widely used in folk medicine and culinary traditions, especially in Southeast Asia and Africa.</li>
            <li>Traditionally used to treat cough, headaches, digestive issues, and fungal infections and as an insect repellent and larvicide.</li>
            <li>Rich in terpenoids (citral, linalool, ursolic acid) and phenylpropanoids (methyl chavicol, eugenol), showing chemotypic variation across different regions.</li>
          </ul>
        </div>
        <div class="box">
          <blockquote>
            <h4>Pesto Perpetua</h4>
            <p>Species: <span class="name">Ocimum citriodorum</span></p>
            <p>Origin:  <span class="origin"> United States</span></p>
            <p>Source: <span class="source"> Erins herb Nursery</span></p>
          </blockquote>
          <ul>
            <li>‘Pesto Perpetuo’ is a non-flowering, columnar basil that features aromatic, lime green leaves variegated with thin white margins. It was discovered in 2004 as a sport of Ocimum x citriodorum 'Lesbos'. It typically grows in an upright, bushy mound to 1-2' tall on square stems clad with opposite, ovate leaves (to 2" long). 'Pesto Perpetuo' is valued not only for its aromatic leaves but also for its ornamental foliage. For culinary purposes, leaves are used either fresh or dried to flavor a variety of food preparations, including not only classic pesto sauce, but also vegetable dishes, meat dishes, stews, soups and marinades</li>
          </ul>
        </div>
        <div class="box">
          <blockquote>
            <h4>Wild Magic</h4>
            <p>Species: <span class="name">Ocimum Hybrid</span></p>
            <p>Origin:  <span class="origin"> Asia</span></p>
            <p>Source: <span class="source"> Erins herb Nursery</span></p>
          </blockquote>
        </div>
        <div class="box">
          <blockquote>
            <h4>Lettuce Leaf</h4>
            <p>Species: <span class="name">Ocimum basilicum</span></p>
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
            <h4>Pineapple Sage</h4>
            <p>Species: <span class="name">Salvia elegans</span></p>
            <p>Origin:  <span class="origin"> Mexico</span></p>
            <p>Source: <span class="source"> Erins herb Nursery</span></p>
            <p>Bloom Time: <span class="bloom">Summer, Fall</span></p>
          </blockquote>
        </div>
        <div class="box">
          <p>One of the most popular salvias, Salvia elegans, commonly known as Pineapple Sage, is a perennial shrub native to the highlands of Mexico and Guatemala. Renowned for its sweet, pineapple-scented foliage and brilliant scarlet-red flowers, Pineapple Sage is a favorite in herb gardens, pollinator-friendly landscapes, and ornamental borders. Its long blooming period and versatility make it a popular choice among gardeners.</p>
          <p>Pineapple Sage is a tender perennial of open habit with erect, square stems. It grows as an upright shrub in warm climates. In cooler regions, it is often treated as an annual. Its clump-forming habit and abundant foliage make it an excellent filler plant in borders and gardens.</p>
          <p>5/16/2026 Both plants are starting to flower, it seems to early</p>
        </div>
      </div>
    </section>

  <div id="Balm" class="tabcontent">
    <section class="split">
      <div class="box">
        <blockquote>
          <h4>Bee Balm Blue Moon</h4>
          <p>Species: <span class="name">Monarda didyma ‘Blue Moon’</span></p>
          <p>Origin:  <span class="origin"> North America</span></p>
          <p>Source: <span class="source"> Erins herb Nursery</span></p>
          <p>Bloom Time: <span class="bloom">Summer, Fall</span></p>
        </blockquote>
      </div>
      <div class="box"><p>Bee balm is another wonderful Bee attractor. I have Bee balm and lemon balm around the yard. Lemon balm is growing wild mostly in the shade, but the Bee balm will get more sun. </p>
    </div>
  </section>
</div>
</main>
<?php $this->load->view("footer/tab-footer")?>
</div>
<script type="module" src="<?php echo base_url('assets/dist/script-dist.js');?>"></script>
<script src="<?php echo base_url('assets/js/tabs.js');?>"></script>