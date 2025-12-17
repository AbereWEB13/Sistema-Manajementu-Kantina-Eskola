document.addEventListener("DOMContentLoaded", function () {
  const searchBtn = document.querySelector(".search-btn");
  const searchInput = document.querySelector(".search-input");
  const categorySelect = document.querySelector(".category-select");

  searchBtn.addEventListener("click", () => {
    console.log("Search button clicked"); // Debugging log
    const searchTerm = searchInput.value.trim();
    const category = categorySelect.value;

    if (!searchTerm) {
      searchInput.style.border = "1px solid #ef4444";
      setTimeout(() => {
        searchInput.style.border = "1px solid #e2e8f0";
      }, 2000);
      return;
    }

    // Here you would typically make an API call
    console.log("Searching:", {
      term: searchTerm,
      category: category,
    });
  });

  // Initialize mobile menu
  createMobileMenu();
  window.addEventListener("resize", createMobileMenu);

  // Smooth scroll for navigation links
  document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const href = link.getAttribute("href");
      if (href !== "#") {
        window.scrollTo({
          top: document.querySelector(href).offsetTop - 80,
          behavior: "smooth",
        });
      }
    });
  });
});
