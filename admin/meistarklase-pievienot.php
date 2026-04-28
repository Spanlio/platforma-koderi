<?php require "includes/header.php"; ?>

<div class="admin-layout">

  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <h1>Pievienot meistarklasi</h1>
    </div>

    <form class="admin-form">

      <div class="form-group">
        <label>Nosaukums</label>
        <input type="text" required>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Datums</label>
          <input type="date" required>
        </div>

        <div class="form-group">
          <label>Cena (€)</label>
          <input type="number" required>
        </div>
      </div>

      <div class="form-group">
        <label>Lokācija</label>
        <input type="text" required>
      </div>

      <div class="form-group">
        <label>Maksimālais vietu skaits</label>
        <input type="number" required>
      </div>

      <button type="submit">Saglabāt meistarklasi</button>

    </form>

  </main>

</div>

<?php require "includes/footer.php"; ?>