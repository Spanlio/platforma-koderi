
// =============== D R O P D O W N ================================
document.addEventListener("DOMContentLoaded", () => {
  const currentPage = window.location.pathname.split("/").pop();

  document.querySelectorAll(".dropdown-toggle").forEach(toggle => {
    toggle.addEventListener("click", (e) => {
      e.preventDefault();

      const parent = toggle.parentElement;

      // close others (clean UX)
      document.querySelectorAll(".dropdown").forEach(d => {
        if (d !== parent) d.classList.remove("active");
      });

      parent.classList.toggle("active");
    });
  });

  document.querySelectorAll(".sidebar-menu a").forEach(link => {
    const linkPage = link.getAttribute("href");

    if (linkPage === currentPage) {
      link.classList.add("active");

      const dropdown = link.closest(".dropdown");
      if (dropdown) {
        dropdown.classList.add("active");
      }
    }
  });
});
// =============== D I A G R A M M =================================
const barCtx = document.getElementById('barChart');

if (barCtx) {
  new Chart(barCtx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jūn'],
      datasets: [{
        label: 'Pieteikumi',
        data: [21, 45, 30, 52, 40, 60],
        backgroundColor: '#6c3cff',
        borderRadius: 6
      }]
    },
    options: {
      plugins: {
        legend: {
          display: false
        }
      },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
// ===================== M O D A L ==========================
let editingMasterclassRow = null;

function openModal(id) {
  const modal = document.getElementById(id);

  if (modal) {
    modal.style.display = "flex";
  }
}

function closeModal(id) {
  const modal = document.getElementById(id);

  if (modal) {
    modal.style.display = "none";
  }
}

function formatDateForDisplay(value) {
  const date = new Date(value);

  return date.toLocaleDateString("lv-LV", {
    day: "2-digit",
    month: "2-digit",
    year: "numeric"
  });
}

function formatDateForInput(value) {
  const parts = value.split(".");

  if (parts.length !== 3) {
    return value;
  }

  return `${parts[2]}-${parts[1]}-${parts[0]}`;
}

function escapeHtml(value) {
  return value.replace(/[&<>"']/g, char => ({
    "&": "&amp;",
    "<": "&lt;",
    ">": "&gt;",
    '"': "&quot;",
    "'": "&#039;"
  }[char]));
}

function addMasterclass(event) {
  event.preventDefault();

  const form = event.target;
  const tableBody = document.getElementById("meistarklasesTableBody");

  if (!tableBody) {
    return;
  }

  const formattedDate = formatDateForDisplay(form.datums.value);
  const safeName = escapeHtml(form.nosaukums.value);
  const safeLocation = escapeHtml(form.lokacija.value);
  const safePrice = escapeHtml(form.cena.value);
  const safeCount = escapeHtml(form.skaits.value);

  const row = document.createElement("tr");
  row.classList.add("new-row");
  row.dataset.nosaukums = form.nosaukums.value;
  row.dataset.datums = formattedDate;
  row.dataset.lokacija = form.lokacija.value;
  row.dataset.cena = form.cena.value;
  row.dataset.skaits = form.skaits.value;
  row.innerHTML = `
    <td>${safeName}</td>
    <td>${formattedDate}</td>
    <td>${safeLocation}</td>
    <td>${safePrice}€</td>
    <td>0 / ${safeCount}</td>
    <td><span class="status status-green">Aktīva</span></td>
    <td class="actions">
      <button class="icon-btn edit-icon" type="button" onclick="openEditMasterclass(this)" aria-label="Rediģēt">
        <i class="fa-solid fa-pen"></i>
      </button>
      <button class="icon-btn delete-icon" type="button" onclick="deleteMasterclass(this)" aria-label="Dzēst">
        <i class="fa-solid fa-trash"></i>
      </button>
    </td>
  `;

  tableBody.prepend(row);
  form.reset();
  closeModal("meistarklaseModal");
}

function openEditMasterclass(icon) {
  const row = icon.closest("tr");
  const form = document.querySelector("#editMeistarklaseModal form");

  if (!row || !form) {
    return;
  }

  editingMasterclassRow = row;
  form.nosaukums.value = row.dataset.nosaukums || row.children[0].textContent.trim();
  form.datums.value = formatDateForInput(row.dataset.datums || row.children[1].textContent.trim());
  form.lokacija.value = row.dataset.lokacija || row.children[2].textContent.trim();
  form.cena.value = (row.dataset.cena || row.children[3].textContent.trim()).replace("€", "");
  form.skaits.value = row.dataset.skaits || row.children[4].textContent.trim().split("/").pop().trim();

  openModal("editMeistarklaseModal");
}

function saveEditedMasterclass(event) {
  event.preventDefault();

  const form = event.target;
  const tableBody = document.getElementById("meistarklasesTableBody");

  if (!tableBody || !editingMasterclassRow) {
    return;
  }

  const row = editingMasterclassRow;

  if (!row || !tableBody.contains(row)) {
    return;
  }

  const formattedDate = formatDateForDisplay(form.datums.value);
  const safeName = escapeHtml(form.nosaukums.value);
  const safeLocation = escapeHtml(form.lokacija.value);
  const safePrice = escapeHtml(form.cena.value);
  const safeCount = escapeHtml(form.skaits.value);
  const occupiedCount = row.children[4].textContent.trim().split("/")[0].trim();

  row.dataset.nosaukums = form.nosaukums.value;
  row.dataset.datums = formattedDate;
  row.dataset.lokacija = form.lokacija.value;
  row.dataset.cena = form.cena.value;
  row.dataset.skaits = form.skaits.value;

  row.children[0].innerHTML = safeName;
  row.children[1].textContent = formattedDate;
  row.children[2].innerHTML = safeLocation;
  row.children[3].textContent = `${safePrice}€`;
  row.children[4].textContent = `${occupiedCount} / ${safeCount}`;
  row.classList.add("updated-row");

  setTimeout(() => row.classList.remove("updated-row"), 900);
  editingMasterclassRow = null;
  closeModal("editMeistarklaseModal");
}

function deleteMasterclass(icon) {
  const row = icon.closest("tr");

  if (row) {
    row.classList.add("removing");
    setTimeout(() => row.remove(), 180);
  }
}

/* close on outside click */
window.onclick = function(e) {
  document.querySelectorAll(".modal").forEach(modal => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
};

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    document.querySelectorAll(".modal").forEach(modal => {
      modal.style.display = "none";
    });
  }
});

window.openModal = openModal;
window.closeModal = closeModal;
window.addMasterclass = addMasterclass;
window.openEditMasterclass = openEditMasterclass;
window.saveEditedMasterclass = saveEditedMasterclass;
window.deleteMasterclass = deleteMasterclass;
