<div class="card meistarklase-card">

  <div class="meistarklase-top">
    <h3><?= $meistarklase['nosaukums'] ?></h3>
  </div>

  <div class="meistarklase-meta">
    <span>📅 <?= $meistarklase['datums'] ?></span>
    <span>📍 <?= $meistarklase['lokacija'] ?></span>
  </div>

  <p class="meistarklase-apraksts">
    <?= $meistarklase['apraksts'] ?>
  </p>

  <div class="meistarklase-bottom">
    <span class="price"><?= $meistarklase['cena'] ?>€</span>
    <a href="meistarklase.php" class="btn">Skatīt</a>
  </div>

</div>