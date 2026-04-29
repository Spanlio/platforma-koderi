<?php require "includes/header.php"; ?>

<div class="admin-layout">
  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <h1>Pieteikumi</h1>
    </div>

    <div class="admin-table">
      <h2>Visi pieteikumi</h2>

      <table>
        <thead>
          <tr>
            <th>Vārds</th>
            <th>E-pasts</th>
            <th>Meistarklase</th>
            <th>Datums</th>
            <th>Statuss</th>
          </tr>
        </thead>

        <tbody>

          <?php
          $pieteikumi = [
            [
              "vards" => "Jānis Bērziņš",
              "email" => "janis@test.lv",
              "kurss" => "JavaScript",
              "datums" => "01.05.2026",
              "statuss" => "pending"
            ],
            [
              "vards" => "Anna Liepiņa",
              "email" => "anna@test.lv",
              "kurss" => "Photoshop",
              "datums" => "15.05.2026",
              "statuss" => "approved"
            ]
          ];

          foreach ($pieteikumi as $p):
          ?>

          <tr>
            <td><?= $p['vards'] ?></td>
            <td><?= $p['email'] ?></td>
            <td><?= $p['kurss'] ?></td>
            <td><?= $p['datums'] ?></td>
            <td>
              <span class="status <?= $p['statuss'] ?>">
                <?= $p['statuss'] == 'approved' ? 'Apstiprināts' : 'Gaida maksājumu' ?>
              </span>
            </td>
          </tr>

          <?php endforeach; ?>

        </tbody>
      </table>
    </div>

  </main>
</div>

<?php require "includes/footer.php"; ?>