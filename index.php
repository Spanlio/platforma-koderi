<?php require "includes/header.php"; ?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <h1>Atrodi savu nākamo meistarklasi</h1>
      <p>Mācies, attīsties un pievienojies labākajiem kursiem Latvijā</p>
      <a href="meistarklases.php" class="btn">Skatīt meistarklases</a>
    </div>

    <div class="hero-box">
      <div class="card highlight">
        <h3>🔥 Jaunums</h3>
        <p>Web izstrādes meistarklase</p>
        <span>20€</span>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features container">
  <div class="feature">
    <h3>📚 Plašs piedāvājums</h3>
    <p>Dažādas IT un praktiskās meistarklases</p>
  </div>

  <div class="feature">
    <h3>⚡ Ātra pieteikšanās</h3>
    <p>Vienkāršs un saprotams process</p>
  </div>

  <div class="feature">
    <h3>💳 Droši maksājumi</h3>
    <p>Integrācija ar maksājumu sistēmām</p>
  </div>
</section>

<!-- COURSES -->
<section class="container">
  <h2>Populārās meistarklases</h2>

  <div class="grid">

  <?php

  $meistarklases = [
    [
      "nosaukums" => "JavaScript pamati",
      "datums" => "01.05.2026",
      "lokacija" => "Liepāja",
      "apraksts" => "Iemācies programmēt no nulles",
      "cena" => "20"
    ],
    [
      "nosaukums" => "Auto diagnostika",
      "datums" => "10.05.2026",
      "lokacija" => "Rīga",
      "apraksts" => "Darbs ar OBD sistēmām",
      "cena" => "15"
    ],
    [
      "nosaukums" => "Photoshop",
      "datums" => "15.05.2026",
      "lokacija" => "Online",
      "apraksts" => "Dizaina pamati un prakse",
      "cena" => "10"
    ]
  ];

  foreach($meistarklases as $meistarklase){
    include "includes/meistarklase-card.php";
  }

  ?>

  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="cta-overlay"></div>

  <div class="container cta-content">
    <h2>Sāc jau šodien</h2>
    <p>Piesakies meistarklasei un attīsti savas prasmes kopā ar profesionāļiem</p>

    <div class="cta-actions">
      <a href="meistarklases.php" class="btn primary">Apskatīt meistarklases</a>
      <a href="#" class="btn outline">Uzzināt vairāk</a>
    </div>
  </div>
</section>

<?php require "includes/footer.php"; ?>S