<?php require "includes/header.php"; ?>

<h1>Meistarklases</h1>

<input type="text" placeholder="Meklēt...">
<select>
  <option>Kategorija</option>
  <option>IT</option>
  <option>Auto</option>
</select>

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
    ]
  ];

  foreach ($meistarklases as $meistarklase) {
    include "includes/meistarklase-card.php";
  }

  ?>

</div>
</div>

<?php require "includes/footer.php"; ?>