<?php require "includes/header.php"; ?>


<div class="admin-layout">

  <!-- SIDEBAR -->
  <?php include "includes/sidebar.php"; ?>
  <!-- MAIN -->
  <main class="admin-main">

    <!-- TOPBAR -->
    <div class="admin-topbar">

      <div class="topbar-left">
        <h1>Panelis</h1>
        <p class="admin-greeting">
          Sveiks, <strong>Markovs</strong>!
          Tava loma sistēmā: <strong>Administrators</strong>
        </p>
      </div>

      <div class="topbar-right">
        <a href="#" class="logout-btn">Izrakstīties</a>
      </div>

    </div>

    <!-- STATS WRAPPER -->
    <div class="stats-wrapper">

      <div class="admin-stats">

        <div class="admin-card">
          <div class="card-text">
            <h4>Lietotāji</h4>
            <p>Reģistrētie lietotāji</p>
          </div>
          <span class="stat-number">124</span>
        </div>

        <div class="admin-card">
          <div class="card-text">
            <h4>Meistarklases</h4>
            <p>Aktīvie kursi</p>
          </div>
          <span class="stat-number">18</span>
        </div>

        <div class="admin-card">
          <div class="card-text">
            <h4>Pieteikumi</h4>
            <p>Kopējie pieteikumi</p>
          </div>
          <span class="stat-number">56</span>
        </div>

      </div>

    </div>

    <!-- BOTTOM -->
    <div class="admin-bottom">

      <!-- TABLE -->
      <div class="admin-table">

        <h2>Pēdējās meistarklases</h2>

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
            <?php
            $meistarklases = [
              ["nosaukums" => "JavaScript", "datums" => "01.05.2026", "lokacija" => "Rīga", "cena" => 20, "max" => 20, "skaits" => 20],
              ["nosaukums" => "Auto", "datums" => "10.05.2026", "lokacija" => "Liepāja", "cena" => 15, "max" => 20, "skaits" => 12],
              ["nosaukums" => "Photoshop", "datums" => "15.05.2026", "lokacija" => "Online", "cena" => 10, "max" => 15, "skaits" => 15],
              ["nosaukums" => "Python", "datums" => "20.05.2026", "lokacija" => "Rīga", "cena" => 30, "max" => 25, "skaits" => 10],
              ["nosaukums" => "Web", "datums" => "25.05.2026", "lokacija" => "Liepāja", "cena" => 25, "max" => 20, "skaits" => 5],
            ];

            foreach ($meistarklases as $m) {
              $free = $m['max'] - $m['skaits'];
              $percent = $m['skaits'] / $m['max'];

              if ($percent >= 0.8) {
                $statusClass = "status-red";
                $statusText = "Gandrīz pilns";
              } elseif ($percent >= 0.5) {
                $statusClass = "status-yellow";
                $statusText = "Puse aizņemta";
              } else {
                $statusClass = "status-green";
                $statusText = "Daudz vietu";
              }
            ?>
              <tr>
                <td><?= $m['nosaukums'] ?></td>
                <td><?= $m['datums'] ?></td>
                <td><?= $m['lokacija'] ?></td>
                <td><?= $m['cena'] ?>€</td>
                <td class="<?= $statusClass ?>">
                  <?= $free ?> / <?= $m['max'] ?>
                </td>
                <td>
                  <span class="status <?= $statusClass ?>">
                    <?= $statusText ?>
                  </span>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>

      </div>

      <!-- RIGHT SIDE -->
      <div class="admin-side">

        <div class="admin-card chart-card">
          <!-- <div class="card-text"> -->
          <h4>Pieteikumu skaits</h4>
          <p>Pieteikumi pa mēnešiem</p>
          <!-- </div> -->
          <canvas id="barChart"></canvas>
        </div>

      </div>

    </div>

  </main>

</div>

<?php require "includes/footer.php"; ?>