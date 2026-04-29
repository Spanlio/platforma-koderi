<?php require "includes/header.php"; ?>

<?php
$meistarklases = [
  [
    "nosaukums" => "JavaScript pamati",
    "datums" => "01.05.2026",
    "lokacija" => "Liepāja",
    "cena" => "20€",
    "vietas" => "18 / 24",
    "statuss" => "Aktīva",
    "statuss_klase" => "status-green"
  ],
  [
    "nosaukums" => "Auto diagnostika",
    "datums" => "10.05.2026",
    "lokacija" => "Rīga",
    "cena" => "15€",
    "vietas" => "12 / 20",
    "statuss" => "Puse aizņemta",
    "statuss_klase" => "status-yellow"
  ],
  [
    "nosaukums" => "Python iesācējiem",
    "datums" => "18.05.2026",
    "lokacija" => "Online",
    "cena" => "30€",
    "vietas" => "23 / 25",
    "statuss" => "Gandrīz pilna",
    "statuss_klase" => "status-red"
  ],
];
?>

<div class="admin-layout">
  <?php include "includes/sidebar.php"; ?>

  <main class="admin-main">

    <div class="admin-topbar">
      <div>
        <h1>Meistarklases</h1>
        <p class="page-intro">Pārskati gaidāmās nodarbības un ātri pievieno jaunu meistarklasi.</p>
      </div>
    </div>

    <div class="admin-summary-grid">
      <div class="summary-card">
        <span class="summary-label">Gaidāmās</span>
        <strong>3</strong>
      </div>
      <div class="summary-card">
        <span class="summary-label">Brīvas vietas</span>
        <strong>16</strong>
      </div>
      <div class="summary-card">
        <span class="summary-label">Tuvākā</span>
        <strong>01.05</strong>
      </div>
    </div>

<div class="admin-table">

  <div class="table-header">
    <div>
      <h2>Visas meistarklases</h2>
      <p>Demo dati vizuālai pārbaudei</p>
    </div>

    <button class="primary-btn" type="button" onclick="openModal('meistarklaseModal')">
      <i class="fa-solid fa-plus"></i> Pievienot
    </button>
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
        <th>Darbības</th>
      </tr>
    </thead>

    <tbody id="meistarklasesTableBody">
      <?php foreach ($meistarklases as $meistarklase) { ?>
        <tr
          data-nosaukums="<?= htmlspecialchars($meistarklase["nosaukums"]) ?>"
          data-datums="<?= htmlspecialchars($meistarklase["datums"]) ?>"
          data-lokacija="<?= htmlspecialchars($meistarklase["lokacija"]) ?>"
          data-cena="<?= htmlspecialchars(str_replace("€", "", $meistarklase["cena"])) ?>"
          data-skaits="<?= htmlspecialchars(explode(" / ", $meistarklase["vietas"])[1]) ?>"
        >
          <td><?= $meistarklase["nosaukums"] ?></td>
          <td><?= $meistarklase["datums"] ?></td>
          <td><?= $meistarklase["lokacija"] ?></td>
          <td><?= $meistarklase["cena"] ?></td>
          <td><?= $meistarklase["vietas"] ?></td>
          <td>
            <span class="status <?= $meistarklase["statuss_klase"] ?>">
              <?= $meistarklase["statuss"] ?>
            </span>
          </td>

          <td class="actions">
            <button class="icon-btn edit-icon" type="button" onclick="openEditMasterclass(this)" aria-label="Rediģēt">
              <i class="fa-solid fa-pen"></i>
            </button>
            <button class="icon-btn delete-icon" type="button" onclick="deleteMasterclass(this)" aria-label="Dzēst">
              <i class="fa-solid fa-trash"></i>
            </button>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>

  </main>
</div>

<div id="meistarklaseModal" class="modal">
  <div class="modal-content">

    <div class="modal-header">
      <div>
        <h2><i class="fa-solid fa-graduation-cap"></i> Jauna meistarklase</h2>
        <p>Pievieno demo ierakstu meistarklašu sarakstam.</p>
      </div>
      <button class="modal-close" type="button" onclick="closeModal('meistarklaseModal')" aria-label="Aizvērt">&times;</button>
    </div>

    <form class="modal-form" onsubmit="addMasterclass(event)">

      <div class="form-group">
        <label>Nosaukums</label>
        <input type="text" name="nosaukums" placeholder="Piemēram: JavaScript pamati" required>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Datums</label>
          <input type="date" name="datums" required>
        </div>

        <div class="form-group">
          <label>Cena (€)</label>
          <input type="number" name="cena" placeholder="20" min="0" step="0.01" required>
        </div>
      </div>

      <div class="form-group">
        <label>Lokācija</label>
        <input type="text" name="lokacija" placeholder="Liepāja, Rīga vai Online" required>
      </div>

      <div class="form-group">
        <label>Maksimālais vietu skaits</label>
        <input type="number" name="skaits" placeholder="24" min="0" required>
      </div>

      <div class="form-group">
        <label>Apraksts</label>
        <textarea name="apraksts" placeholder="Īss meistarklases apraksts" rows="3"></textarea>
      </div>

      <div class="modal-actions">
        <button class="secondary-btn" type="button" onclick="closeModal('meistarklaseModal')">Atcelt</button>
        <button type="submit">Saglabāt meistarklasi</button>
      </div>

    </form>

  </div>
</div>

<div id="editMeistarklaseModal" class="modal">
  <div class="modal-content">

    <div class="modal-header">
      <div>
        <h2><i class="fa-solid fa-pen"></i> Rediģēt meistarklasi</h2>
        <p>Izmaiņas tiek parādītas tikai šajā lapā.</p>
      </div>
      <button class="modal-close" type="button" onclick="closeModal('editMeistarklaseModal')" aria-label="Aizvērt">&times;</button>
    </div>

    <form class="modal-form" onsubmit="saveEditedMasterclass(event)">

      <input type="hidden" name="rowIndex">

      <div class="form-group">
        <label>Nosaukums</label>
        <input type="text" name="nosaukums" required>
      </div>

      <div class="form-row">
        <div class="form-group">
          <label>Datums</label>
          <input type="date" name="datums" required>
        </div>

        <div class="form-group">
          <label>Cena (€)</label>
          <input type="number" name="cena" min="0" step="0.01" required>
        </div>
      </div>

      <div class="form-group">
        <label>Lokācija</label>
        <input type="text" name="lokacija" required>
      </div>

      <div class="form-group">
        <label>Maksimālais vietu skaits</label>
        <input type="number" name="skaits" min="0" required>
      </div>

      <div class="modal-actions">
        <button class="secondary-btn" type="button" onclick="closeModal('editMeistarklaseModal')">Atcelt</button>
        <button type="submit">Saglabāt izmaiņas</button>
      </div>

    </form>

  </div>
</div>

<?php require "includes/footer.php"; ?>
