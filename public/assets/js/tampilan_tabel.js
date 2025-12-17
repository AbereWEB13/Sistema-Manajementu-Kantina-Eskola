document.addEventListener("DOMContentLoaded", function () {
  const rows = Array.from(document.querySelectorAll("#tabel tbody tr"));
  const tableInfo = document.getElementById("tableInfo");
  const pagination = document.getElementById("pagination");
  console.log("JS dijalankan, jumlah rows:", rows.length);
  let currentPage = 1;
  function updateTable() {
    const search = searchInput.value?.toLowerCase() || "";
    const limit = parseInt(showEntries.value || 5);

    const filtered = rows.filter((row) =>
      row.innerText.toLowerCase().includes(search)
    );
    const totalRows = filtered.length;
    const totalPages = Math.ceil(totalRows / limit) || 1;
    if (currentPage > totalPages) currentPage = totalPages;

    rows.forEach((r) => (r.style.display = "none"));
    const start = (currentPage - 1) * limit;
    const end = start + limit;
    filtered.slice(start, end).forEach((r) => (r.style.display = ""));

    tableInfo.innerText = `Showing ${
      totalRows === 0 ? 0 : start + 1
    } to ${Math.min(end, totalRows)} of ${totalRows} entries`;

    renderPagination(totalPages);
  }

  function renderPagination(totalPages) {
    pagination.innerHTML = "";
    pagination.appendChild(
      createPageItem("«", currentPage > 1, () => {
        currentPage--;
        updateTable();
      })
    );

    let start = Math.max(1, currentPage - 2);
    let end = Math.min(totalPages, currentPage + 2);

    if (start > 1) {
      pagination.appendChild(
        createPageItem(1, true, () => {
          currentPage = 1;
          updateTable();
        })
      );
      if (start > 2) pagination.appendChild(ellipsis());
    }
    for (let i = start; i <= end; i++) {
      pagination.appendChild(
        createPageItem(
          i,
          true,
          () => {
            currentPage = i;
            updateTable();
          },
          i === currentPage
        )
      );
    }
    if (end < totalPages) {
      if (end < totalPages - 1) pagination.appendChild(ellipsis());
      pagination.appendChild(
        createPageItem(totalPages, true, () => {
          currentPage = totalPages;
          updateTable();
        })
      );
    }
    pagination.appendChild(
      createPageItem("»", currentPage < totalPages, () => {
        currentPage++;
        updateTable();
      })
    );
  }
  function createPageItem(text, enabled, onClick, active = false) {
    const li = document.createElement("li");
    li.className = "page-item";
    if (!enabled) li.classList.add("disabled");
    if (active) li.classList.add("active");
    const a = document.createElement("a");
    a.className = "page-link";
    a.href = "#";
    a.innerText = text;
    a.onclick = (e) => {
      e.preventDefault();
      if (enabled) onClick();
    };

    li.appendChild(a);
    return li;
  }
  function ellipsis() {
    const li = document.createElement("li");
    li.className = "page-item disabled";
    li.innerHTML = `<span class="page-link">…</span>`;
    return li;
  }
  searchInput.onkeyup = () => {
    currentPage = 1;
    updateTable();
  };
  showEntries.onchange = () => {
    currentPage = 1;
    updateTable();
  };
  updateTable();
});
