<?php require "includes/header.php"; ?>

<section class="container">
  <div class="news-hero">
    <span class="eyebrow">Jaunumi un aktualitātes</span>
    <h1>Kas jauns Koderos</h1>
    <p>Jaunas meistarklases, īpašie piedāvājumi un svarīgi paziņojumi vienuviet.</p>
  </div>

  <div class="news-grid">

  <?php

  $aktualitates = [
    [
      "virsraksts" => "Jauna JavaScript meistarklase!",
      "datums" => "20.04.2026",
      "kategorija" => "Jauna programma",
      "attels" => "https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=900&q=70",
      "apraksts" => "Esam pievienojuši jaunu meistarklasi iesācējiem. Piesakies jau tagad!",
      "detalas" => "Meistarklase paredzēta cilvēkiem, kuri vēlas saprast JavaScript praktiski: mainīgie, funkcijas, DOM elementi un mazi uzdevumi, ko var uzreiz izmantot savos projektos."
    ],
    [
      "virsraksts" => "Atlaides studentiem",
      "datums" => "15.04.2026",
      "kategorija" => "Piedāvājums",
      "attels" => "https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=900&q=70",
      "apraksts" => "Visām meistarklasēm -20% studentiem līdz mēneša beigām.",
      "detalas" => "Atlaide attiecas uz visām aktuālajām meistarklasēm. Piesakoties, norādi studenta statusu, un komanda palīdzēs piemērot īpašo cenu."
    ],
    [
      "virsraksts" => "Jauna lokācija Rīgā",
      "datums" => "10.04.2026",
      "kategorija" => "Telpas",
      "attels" => "https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=900&q=70",
      "apraksts" => "Tagad meistarklases notiek arī jaunā modernā telpā Rīgā.",
      "detalas" => "Jaunā lokācija ir pielāgota praktiskām nodarbībām: ērtas darba vietas, prezentāciju zona un stabila tehniskā infrastruktūra grupu darbam."
    ]
  ];

  foreach($aktualitates as $aktualitate){
  ?>

    <article class="aktualitate-card">
      <div class="aktualitate-image">
        <img src="<?= $aktualitate['attels'] ?>" alt="<?= $aktualitate['virsraksts'] ?>">
        <span><?= $aktualitate['kategorija'] ?></span>
      </div>

      <div class="aktualitate-content">
      <div class="aktualitate-top">
        <h3><?= $aktualitate['virsraksts'] ?></h3>
        <span class="aktualitate-date"><?= $aktualitate['datums'] ?></span>
      </div>

      <p class="aktualitate-apraksts">
        <?= $aktualitate['apraksts'] ?>
      </p>

        <button
          class="news-link"
          type="button"
          onclick="openNewsModal(
            '<?= htmlspecialchars($aktualitate['virsraksts'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($aktualitate['datums'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($aktualitate['kategorija'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($aktualitate['attels'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($aktualitate['apraksts'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($aktualitate['detalas'], ENT_QUOTES) ?>'
          )"
        >
          Uzzināt vairāk →
        </button>
      </div>
    </article>

  <?php } ?>

  </div>
</section>

<div id="news-modal" class="modal news-modal">
  <div class="modal-content news-modal-content">
    <button class="close news-modal-close" type="button" onclick="closeNewsModal()">&times;</button>

    <img id="news-modal-image" src="" alt="">

    <div class="news-modal-body">
      <span id="news-modal-category" class="news-modal-category"></span>
      <p id="news-modal-date" class="aktualitate-date"></p>
      <h2 id="news-modal-title"></h2>
      <p id="news-modal-summary"></p>
      <p id="news-modal-details"></p>
      <a href="meistarklases.php" class="btn">Apskatīt meistarklases</a>
    </div>
  </div>
</div>

<?php require "includes/footer.php"; ?>
