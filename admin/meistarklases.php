<?php require "includes/header.php"; ?>

<div class="admin-layout">
  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <h1>Meistarklases</h1>
    </div>

    <div class="admin-table">
      <h2>Visas meistarklases</h2>

      <table>
        <thead>
          <tr>
            <th>Nosaukums</th>
            <th>Datums</th>
            <th>Lokācija</th>
            <th>Cena</th>
            <th>Vietas</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>JavaScript</td>
            <td>01.05.2026</td>
            <td>Rīga</td>
            <td>20€</td>
            <td>20 / 20</td>
          </tr>

          <tr>
            <td>Auto diagnostika</td>
            <td>10.05.2026</td>
            <td>Liepāja</td>
            <td>15€</td>
            <td>12 / 20</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
</div>

<div id="meistarklaseModal" class="modal">
  <div class="modal-content">

    <div class="modal-header">
      <h2><i class="fa-solid fa-graduation-cap"></i> Jauna meistarklase</h2>
      <span class="close" onclick="closeModal('meistarklaseModal')">&times;</span>
    </div>

    <form class="modal-form">

      <input type="text" placeholder="Nosaukums" required>

      <div class="form-row">
        <input type="date" required>
        <input type="number" placeholder="Cena (€)" required>
      </div>

      <input type="text" placeholder="Lokācija" required>

      <input type="number" placeholder="Maksimālais vietu skaits" required>

      <textarea placeholder="Apraksts" rows="3"></textarea>

      <button type="submit">Saglabāt meistarklasi</button>

    </form>

  </div>
</div>

<?php require "includes/footer.php"; ?>