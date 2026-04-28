<?php require "includes/header.php"; ?>

<section class="container">
  <h1>Aktualitātes</h1>

  <div class="grid">

  <?php

  $aktualitates = [
    [
      "virsraksts" => "Jauna JavaScript meistarklase!",
      "datums" => "20.04.2026",
      "apraksts" => "Esam pievienojuši jaunu meistarklasi iesācējiem. Piesakies jau tagad!"
    ],
    [
      "virsraksts" => "Atlaides studentiem",
      "datums" => "15.04.2026",
      "apraksts" => "Visām meistarklasēm -20% studentiem līdz mēneša beigām."
    ],
    [
      "virsraksts" => "Jauna lokācija Rīgā",
      "datums" => "10.04.2026",
      "apraksts" => "Tagad meistarklases notiek arī jaunā modernā telpā Rīgā."
    ]
  ];

  foreach($aktualitates as $aktualitate){
  ?>

    <div class="card aktualitate-card">
      <div class="aktualitate-top">
        <h3><?= $aktualitate['virsraksts'] ?></h3>
        <span class="aktualitate-date"><?= $aktualitate['datums'] ?></span>
      </div>

      <p class="aktualitate-apraksts">
        <?= $aktualitate['apraksts'] ?>
      </p>
    </div>

  <?php } ?>

  </div>
</section>

<?php require "includes/footer.php"; ?>