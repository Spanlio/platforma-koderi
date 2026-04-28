
// =============== D R O P D O W N ================================
document.addEventListener("DOMContentLoaded", () => {
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

function openModal(id) {
  document.getElementById(id).style.display = "flex";
}

function closeModal(id) {
  document.getElementById(id).style.display = "none";
}

/* close on outside click */
window.onclick = function(e) {
  document.querySelectorAll(".modal").forEach(modal => {
    if (e.target === modal) {
      modal.style.display = "none";
    }
  });
};