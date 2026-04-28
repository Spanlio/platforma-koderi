<?php require "includes/header.php"; ?>

<div class="admin-layout">
    <?php include "includes/sidebar.php"; ?>

    <main class="admin-main">

        <div class="admin-topbar">
            <h1>Lietotāji</h1>
        </div>
        <button class="primary-btn" onclick="openModal('lietotajsModal')">
            + Jauns lietotājs
        </button>

        <div class="admin-table">
            <h2>Visi lietotāji</h2>

            <table>
                <thead>
                    <tr>
                        <th>Vārds</th>
                        <th>Uzvārds</th>
                        <th>E-pasts</th>
                        <th>Loma</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Jānis</td>
                        <td>Bērziņš</td>
                        <td>janis@test.lv</td>
                        <td>Administrators</td>
                    </tr>

                    <tr>
                        <td>Anna</td>
                        <td>Liepiņa</td>
                        <td>anna@test.lv</td>
                        <td>Lietotājs</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>
</div>

<div id="lietotajsModal" class="modal">
  <div class="modal-content">

    <div class="modal-header">
      <h2><i class="fa-solid fa-user-plus"></i> Jauns lietotājs</h2>
      <span class="close" onclick="closeModal('lietotajsModal')">&times;</span>
    </div>

    <form class="modal-form">

      <div class="form-row">
        <input type="text" placeholder="Vārds" required>
        <input type="text" placeholder="Uzvārds" required>
      </div>

      <input type="email" placeholder="E-pasts" required>
      <input type="password" placeholder="Parole" required>

      <select>
        <option>Lietotājs</option>
        <option>Administrators</option>
      </select>

      <button type="submit">Izveidot lietotāju</button>

    </form>

  </div>
</div>

<?php require "includes/footer.php"; ?>