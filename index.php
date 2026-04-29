<?php require "includes/header.php"; ?>

<!-- HERO -->
<section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <span class="eyebrow">Praktiskas tehnoloģiju meistarklases</span>
      <h1>Atrodi savu nākamo meistarklasi</h1>
      <p>Mācies modernā vidē, attīsti praktiskas prasmes un piesakies nodarbībām, kas palīdz ātrāk tikt līdz rezultātam.</p>

      <div class="hero-actions">
        <a href="meistarklases.php" class="btn">Skatīt meistarklases</a>
        <a href="aktualitates.php" class="btn soft">Jaunumi</a>
      </div>

      <div class="hero-stats">
        <span><strong>18+</strong> meistarklases</span>
        <span><strong>450+</strong> dalībnieki</span>
        <span><strong>4.9</strong> vērtējums</span>
      </div>
    </div>

    <div class="hero-box">
      <div class="highlight">
        <span class="highlight-badge">Jaunums</span>
        <h3>Web izstrādes meistarklase</h3>
        <p>HTML, CSS un JavaScript pamati praktiskā nodarbībā.</p>
        <div class="highlight-footer">
          <span>20€</span>
          <small>01.05.2026</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="features container">
  <div class="feature">
    <span class="feature-icon">📚</span>
    <h3>Pārdomāts piedāvājums</h3>
    <p>Dažādas IT un praktiskās meistarklases</p>
  </div>

  <div class="feature">
    <span class="feature-icon">⚡</span>
    <h3>Ātra pieteikšanās</h3>
    <p>Vienkāršs un saprotams process</p>
  </div>

  <div class="feature">
    <span class="feature-icon">💳</span>
    <h3>Droši maksājumi</h3>
    <p>Integrācija ar maksājumu sistēmām</p>
  </div>
</section>

<!-- COURSES -->
<section class="container">
  <div class="section-heading">
    <span class="eyebrow">Ko apgūt tālāk</span>
    <h2>Populārās meistarklases</h2>
    <p>Izvēlies nodarbību pēc temata, vietas un sev ērtākā datuma.</p>
  </div>

  <div class="grid">

  <?php

  $meistarklases = [
    [
      "nosaukums" => "JavaScript pamati",
      "datums" => "01.05.2026",
      "lokacija" => "Liepāja",
      "apraksts" => "Iemācies programmēt no nulles",
      "cena" => "20",
      "skaits" => "30"
    ],
    [
      "nosaukums" => "Auto diagnostika",
      "datums" => "10.05.2026",
      "lokacija" => "Rīga",
      "apraksts" => "Darbs ar OBD sistēmām",
      "cena" => "15",
      "skaits" => "12"
    ],
    [
      "nosaukums" => "Photoshop",
      "datums" => "15.05.2026",
      "lokacija" => "Online",
      "apraksts" => "Dizaina pamati un prakse",
      "cena" => "10",
      "skaits" => "20"
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

<?php require "includes/footer.php"; ?>
