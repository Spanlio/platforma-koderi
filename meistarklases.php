<?php require "includes/header.php"; ?>

<div class="page-heading">
  <span class="eyebrow">Katalogs</span>
  <h1>Meistarklases</h1>
  <p>Atrodi sev piemērotu nodarbību pēc tēmas, lokācijas un pieredzes līmeņa.</p>
</div>

<div class="filters">
  <input type="text" placeholder="Meklēt meistarklasi...">
  <select>
    <option>Kategorija</option>
    <option>IT</option>
    <option>Auto</option>
  </select>
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
      "skaits" => "20"
    ],
    [
      "nosaukums" => "Auto diagnostika",
      "datums" => "10.05.2026",
      "lokacija" => "Rīga",
      "apraksts" => "Darbs ar OBD sistēmām",
      "cena" => "15",
      "skaits" => "30"
    ]
  ];

  foreach ($meistarklases as $meistarklase) {
    include "includes/meistarklase-card.php";
  }

  ?>

</div>

<?php require "includes/footer.php"; ?>
