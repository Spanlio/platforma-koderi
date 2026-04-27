<?php require "includes/header.php"; ?>

<?php
/* hardcoded for now */
$meistarklase = [
  "nosaukums" => "JavaScript pamati",
  "datums" => "01.05.2026",
  "lokacija" => "Liepāja",
  "apraksts" => "Šajā meistarklasē tu apgūsi JavaScript no pašiem pamatiem līdz praktiskiem piemēriem. Tiks apskatīti mainīgie, funkcijas, DOM manipulācija un daudz kas cits.",
  "cena" => "20"
];
?>

<section class="container">

  <div class="meistarklase-detail">

    <h1><?= $meistarklase['nosaukums'] ?></h1>

    <div class="meistarklase-meta">
      <span>📅 <?= $meistarklase['datums'] ?></span>
      <span>📍 <?= $meistarklase['lokacija'] ?></span>
    </div>

    <div class="meistarklase-image">
      <img src="assets/img/sample.jpg" alt="meistarklase">
    </div>

    <p class="meistarklase-full">
      <?= $meistarklase['apraksts'] ?>
    </p>

    <div class="meistarklase-actions">
      <span class="price"><?= $meistarklase['cena'] ?>€</span>
      <button>Pieteikties</button>
    </div>

  </div>

</section>

<?php require "includes/footer.php"; ?>