<?php require "includes/header.php"; ?>

<div class="admin-layout">
  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <h1>Aktualitātes</h1>
    </div>
            <button class="primary-btn" onclick="openModal('aktualitatesModal')">
            + Jauna aktualitāte
        </button>

    <div class="admin-table">
      <h2>Jaunumi</h2>

      <table>
        <thead>
          <tr>
            <th>Virsraksts</th>
            <th>Datums</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Jauna meistarklase pieejama</td>
            <td>01.04.2026</td>
          </tr>

          <tr>
            <td>Atlaides studenti</td>
            <td>15.04.2026</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
</div>

<div id="aktualitatesModal" class="modal">
  <div class="modal-content">

    <div class="modal-header">
      <h2><i class="fa-solid fa-newspaper"></i> Jauna aktualitāte</h2>
      <span class="close" onclick="closeModal('aktualitatesModal')">&times;</span>
    </div>

    <form class="modal-form">

      <input type="text" placeholder="Virsraksts" required>

      <textarea placeholder="Apraksts" rows="4" required></textarea>

      <input type="date" required>

      <button type="submit">Saglabāt aktualitāti</button>

    </form>

  </div>
</div>

<?php require "includes/footer.php"; ?>