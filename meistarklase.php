<?php require "includes/header.php"; ?>

<?php
/* hardcoded for now */
$meistarklase = [
  "nosaukums" => "JavaScript pamati",
  "datums" => "01.05.2026",
  "lokacija" => "Liepāja",
  "apraksts" => "Šajā meistarklasē tu apgūsi JavaScript no pašiem pamatiem līdz praktiskiem piemēriem. Tiks apskatīti mainīgie, funkcijas, DOM manipulācija un daudz kas cits.",
  "cena" => "20",
  "skaits" => "25"
];
?>

<section class="container">

  <div class="meistarklase-detail">

    <h1><?= $meistarklase['nosaukums'] ?></h1>

    <div class="meistarklase-meta">
      <span>📅 <?= $meistarklase['datums'] ?></span>
      <span>📍 <?= $meistarklase['lokacija'] ?></span>
      <span>👥 <?= $meistarklase['skaits'] ?> cilvēki</span>
    </div>

    <div class="meistarklase-image">
      <img src="assets/img/sample.jpg" alt="meistarklase">
    </div>

    <p class="meistarklase-full">
      <?= $meistarklase['apraksts'] ?>
    </p>

    <div class="meistarklase-actions">
      <span class="price"><?= $meistarklase['cena'] ?>€</span>
      <button onclick="openForm()">Pieteikties</button>
    </div>

  </div>

</section>

<div id="pieteiksanas-modal" class="modal">

  <div class="modal-content">

    <span class="close" onclick="closeForm()">&times;</span>

    <h2>Pieteikšanās</h2>
    <p class="checkout-note">Jūs esat vienu soli no pieteikšanās</p>

    <?php
      $cena = $meistarklase['cena'];
      $atlaide = 5; // later from DB / promo code
      $kopa = $cena - $atlaide;
    ?>

    <form action="checkout.php" method="POST">

      <h3>Jūsu informācija</h3>

      <input type="text" name="vards" placeholder="Vārds" required>
      <input type="text" name="uzvards" placeholder="Uzvārds" required>
      <input type="email" name="email" placeholder="E-pasts" required>
      <input type="tel" name="telefons" placeholder="Telefons" required>

      <div class="form-summary">
        <h4>Pasūtījuma kopsavilkums</h4>

        <div class="summary-row">
          <span>Meistarklase: </span>
          <span><?= $meistarklase['nosaukums'] ?></span>
        </div>

        <div class="summary-row">
          <span>Cena: </span>
          <span><?= $cena ?>€</span>
        </div>

        <?php if ($atlaide > 0): ?>
          <div class="summary-row">
            <span>Atlaide: </span>
            <span>-<?= $atlaide ?>€</span>
          </div>

          <div class="summary-total">
            <span>Kopā: </span>
            <span><?= $kopa ?>€</span>
          </div>
        <?php endif; ?>

      </div>

      <!-- hidden for backend -->
      <input type="hidden" name="nosaukums" value="<?= $meistarklase['nosaukums'] ?>">
      <input type="hidden" name="cena" value="<?= $kopa ?>">
      <input type="hidden" name="atlaide" value="<?= $atlaide ?>">

      <button type="submit">Turpināt uz apmaksu</button>

    </form>

  </div>

</div>

<?php require "includes/footer.php"; ?>