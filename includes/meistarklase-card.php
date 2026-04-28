<a href="meistarklase.php" class="card meistarklase-card-link">

  <div class="meistarklase-card">

    <div class="meistarklase-top">
      <h3><?= $meistarklase['nosaukums'] ?></h3>
    </div>

    <div class="meistarklase-meta">
      <span>📅 <?= $meistarklase['datums'] ?></span>
      <span>📍 <?= $meistarklase['lokacija'] ?></span>
      <span>👥 <?= $meistarklase['skaits'] ?> cilvēki</span>
    </div>

    <p class="meistarklase-apraksts">
      <?= $meistarklase['apraksts'] ?>
    </p>

    <div class="meistarklase-bottom">
      <span class="price"><?= $meistarklase['cena'] ?>€</span>
      <span class="skatīt">Skatīt →</span>
    </div>

  </div>

</a>