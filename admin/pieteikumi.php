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
          <tr>
            <td>Jānis Bērziņš</td>
            <td>janis@test.lv</td>
            <td>JavaScript</td>
            <td>01.05.2026</td>
            <td>Gaida maksājumu</td>
          </tr>

          <tr>
            <td>Anna Liepiņa</td>
            <td>anna@test.lv</td>
            <td>Photoshop</td>
            <td>15.05.2026</td>
            <td>Apstiprināts</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
</div>

<?php require "includes/footer.php"; ?>