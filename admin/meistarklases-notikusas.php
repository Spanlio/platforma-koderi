<?php require "includes/header.php"; ?>

<?php
$meistarklases = [
  [
    "nosaukums" => "HTML un CSS pamati",
    "datums" => "12.04.2026",
    "lokacija" => "Liepāja",
    "cena" => "10€",
    "vietas" => "20 / 20",
    "statuss" => "Noslēgusies"
  ],
  [
    "nosaukums" => "Photoshop dizaina darbnīca",
    "datums" => "05.04.2026",
    "lokacija" => "Rīga",
    "cena" => "18€",
    "vietas" => "14 / 18",
    "statuss" => "Noslēgusies"
  ],
  [
    "nosaukums" => "Robotikas ievads",
    "datums" => "22.03.2026",
    "lokacija" => "Online",
    "cena" => "25€",
    "vietas" => "16 / 16",
    "statuss" => "Noslēgusies"
  ],
];
?>

<div class="admin-layout">
  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <div>
        <h1>Notikušās meistarklases</h1>
        <p class="page-intro">Arhīva skats meistarklasēm, kas jau ir noslēgušās.</p>
      </div>
    </div>

    <div class="admin-summary-grid archive-stats">
      <div class="summary-card">
        <div class="summary-icon"><i class="fa-solid fa-box-archive"></i></div>
        <div>
          <span class="summary-label">Arhīvā</span>
          <strong>3</strong>
        </div>
      </div>
      <div class="summary-card">
        <div class="summary-icon"><i class="fa-solid fa-users"></i></div>
        <div>
          <span class="summary-label">Aizpildītas</span>
          <strong>2</strong>
        </div>
      </div>
      <div class="summary-card">
        <div class="summary-icon"><i class="fa-solid fa-calendar-check"></i></div>
        <div>
          <span class="summary-label">Pēdējā</span>
          <strong>12.04</strong>
        </div>
      </div>
    </div>

    <div class="admin-table">

      <div class="table-header">
        <div>
          <h2>Arhīvs</h2>
          <p>Demo dati vizuālai pārbaudei</p>
        </div>
        <a class="primary-btn" href="meistarklases.php">
          <i class="fa-solid fa-arrow-left"></i> Gaidāmās meistarklases
        </a>
      </div>

      <table>
        <thead>
          <tr>
            <th>Nosaukums</th>
            <th>Datums</th>
            <th>Lokācija</th>
            <th>Cena</th>
            <th>Vietas</th>
            <th>Statuss</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($meistarklases as $meistarklase) { ?>
            <tr>
              <td><?= $meistarklase["nosaukums"] ?></td>
              <td><?= $meistarklase["datums"] ?></td>
              <td><?= $meistarklase["lokacija"] ?></td>
              <td><?= $meistarklase["cena"] ?></td>
              <td><?= $meistarklase["vietas"] ?></td>
              <td><span class="status status-green"><?= $meistarklase["statuss"] ?></span></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </div>

  </main>
</div>

<?php require "includes/footer.php"; ?>
