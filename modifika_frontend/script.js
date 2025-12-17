document.addEventListener("DOMContentLoaded", function () {
  // Initialize all interactive components
  initPropertySlider();
  initTestimonialSlider();
  initPropertyFilters();
  initContactModal();
  initSmoothScrolling();
  initMobileNavigation();
});

// Mobile Navigation Functionality
function initMobileNavigation() {
  const header = document.querySelector("header");
  const nav = document.querySelector("header nav");
  const hamburgerBtn = document.createElement("button");

  // Create hamburger button
  hamburgerBtn.className = "hamburger-menu";
  hamburgerBtn.innerHTML = "<span></span><span></span><span></span>";
  hamburgerBtn.setAttribute("aria-label", "Toggle navigation menu");

  // Insert hamburger button before the nav
  header.querySelector(".container").insertBefore(hamburgerBtn, nav);

  // Add mobile nav class to the nav
  nav.classList.add("mobile-nav");

  // Toggle navigation when hamburger is clicked
  hamburgerBtn.addEventListener("click", function () {
    this.classList.toggle("active");
    nav.classList.toggle("active");

    // Prevent body scrolling when menu is open
    if (nav.classList.contains("active")) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "";
    }
  });

  // Close mobile menu when a link is clicked
  const navLinks = nav.querySelectorAll("a");
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      hamburgerBtn.classList.remove("active");
      nav.classList.remove("active");
      document.body.style.overflow = "";
    });
  });

  // Close mobile menu when clicking outside
  document.addEventListener("click", function (event) {
    if (
      !nav.contains(event.target) &&
      !hamburgerBtn.contains(event.target) &&
      nav.classList.contains("active")
    ) {
      hamburgerBtn.classList.remove("active");
      nav.classList.remove("active");
      document.body.style.overflow = "";
    }
  });

  // Add CSS for mobile navigation
  const mobileNavStyles = `
        .hamburger-menu {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
            z-index: 1001;
        }
        
        .hamburger-menu span {
            display: block;
            width: 25px;
            height: 3px;
            background-color: #fff;
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        
        .hamburger-menu.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger-menu.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger-menu.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }
        
        @media (max-width: 768px) {
            .hamburger-menu {
                display: block;
            }
            
            header .container {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }
            
            .mobile-nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 250px;
                height: 100vh;
                background-color: var(--primary-color);
                padding: 80px 20px 30px;
                transition: right 0.3s ease;
                z-index: 1000;
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                overflow-y: auto;
            }
            
            .mobile-nav.active {
                right: 0;
            }
            
            .mobile-nav ul {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .mobile-nav ul li {
                margin: 0;
                width: 100%;
            }
            
            .mobile-nav ul li a {
                display: block;
                padding: 12px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }
            
            .contact-button {
                margin-left: auto;
            }
        }
    `;

  // Add the styles to the document
  const styleElement = document.createElement("style");
  styleElement.textContent = mobileNavStyles;
  document.head.appendChild(styleElement);
}

// Property Slider Functionality
function initPropertySlider() {
  const propertySlider = document.querySelector(".property-slider");
  const slides = Array.from(propertySlider.querySelectorAll(".property-slide"));
  const prevButton = document.querySelector(".prev-slide");
  const nextButton = document.querySelector(".next-slide");

  // Hide all slides except the first one
  slides.forEach((slide, index) => {
    if (index !== 0) {
      slide.style.display = "none";
    }
  });

  let currentSlide = 0;

  function showSlide(index) {
    // Hide all slides
    slides.forEach((slide) => {
      slide.style.display = "none";
    });

    // Show the current slide
    slides[index].style.display = "block";

    // Add fade-in animation
    slides[index].style.opacity = 0;
    setTimeout(() => {
      slides[index].style.transition = "opacity 0.5s ease";
      slides[index].style.opacity = 1;
    }, 10);
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Event listeners for buttons
  nextButton.addEventListener("click", nextSlide);
  prevButton.addEventListener("click", prevSlide);

  // Auto-advance slides every 5 seconds
  setInterval(nextSlide, 5000);
}

// Testimonial Slider Functionality
function initTestimonialSlider() {
  const testimonialSlider = document.querySelector(".testimonial-slider");
  const slides = Array.from(
    testimonialSlider.querySelectorAll(".testimonial-slide")
  );
  const prevButton = document.querySelector(".prev-testimonial");
  const nextButton = document.querySelector(".next-testimonial");

  // Hide all slides except the first one
  slides.forEach((slide, index) => {
    if (index !== 0) {
      slide.style.display = "none";
    }
  });

  let currentSlide = 0;

  function showSlide(index) {
    // Hide all slides
    slides.forEach((slide) => {
      slide.style.display = "none";
    });

    // Show the current slide
    slides[index].style.display = "block";

    // Add fade-in animation
    slides[index].style.opacity = 0;
    setTimeout(() => {
      slides[index].style.transition = "opacity 0.5s ease";
      slides[index].style.opacity = 1;
    }, 10);
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Event listeners for buttons
  nextButton.addEventListener("click", nextSlide);
  prevButton.addEventListener("click", prevSlide);

  // Auto-advance slides every 7 seconds
  setInterval(nextSlide, 7000);
}

// Property Filters Functionality
function initPropertyFilters() {
  const propertyCards = document.querySelectorAll(".property-card");
  const applyFiltersBtn = document.getElementById("apply-filters");
  const resetFiltersBtn = document.getElementById("reset-filters");
  const propertyTypeSelect = document.getElementById("property-type");

  applyFiltersBtn.addEventListener("click", function () {
    const selectedType = propertyTypeSelect.value;

    propertyCards.forEach((card) => {
      // Get data attributes
      const cardType = card.getAttribute("data-type");

      const cardBeds = parseInt(card.getAttribute("data-beds"));

      // Start with the card visible
      let isVisible = true;

      // Filter by property type
      if (selectedType !== "all" && cardType !== selectedType) {
        isVisible = false;
      }

      // Show or hide the card
      card.style.display = isVisible ? "block" : "none";
    });

    // Add animation to visible cards
    const visibleCards = Array.from(propertyCards).filter(
      (card) => card.style.display !== "none"
    );
    visibleCards.forEach((card, index) => {
      card.style.opacity = 0;
      card.style.transform = "translateY(20px)";
      setTimeout(() => {
        card.style.transition = "opacity 0.5s ease, transform 0.5s ease";
        card.style.opacity = 1;
        card.style.transform = "translateY(0)";
      }, index * 100);
    });

    // Show message if no properties match
    const noResultsMessage = document.querySelector(".no-results-message");
    if (visibleCards.length === 0) {
      if (!noResultsMessage) {
        const message = document.createElement("p");
        message.className = "no-results-message";
        message.textContent =
          "No properties match your criteria. Please try different filters.";
        message.style.textAlign = "center";
        message.style.padding = "20px";
        message.style.color = "#e74c3c";

        const propertyGrid = document.querySelector(".property-grid");
        propertyGrid.appendChild(message);
      }
    } else if (noResultsMessage) {
      noResultsMessage.remove();
    }
  });

  resetFiltersBtn.addEventListener("click", function () {
    // Reset select elements
    propertyTypeSelect.value = "all";

    // Show all property cards
    propertyCards.forEach((card) => {
      card.style.display = "block";

      // Add fade-in animation
      card.style.opacity = 0;
      setTimeout(() => {
        card.style.transition = "opacity 0.5s ease";
        card.style.opacity = 1;
      }, 10);
    });

    // Remove no results message if it exists
    const noResultsMessage = document.querySelector(".no-results-message");
    if (noResultsMessage) {
      noResultsMessage.remove();
    }
  });
}

// Contact Modal Functionality
function initContactModal() {
  const modal = document.getElementById("contact-modal");
  const openModalBtn = document.getElementById("contact-popup-btn");
  const closeModalBtn = document.querySelector(".close-modal");
  const modalForm = document.getElementById("modal-contact-form");

  // Open modal
  openModalBtn.addEventListener("click", function () {
    modal.style.display = "flex";
    document.body.style.overflow = "hidden"; // Prevent scrolling when modal is open

    // Add animation
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.style.transition = "opacity 0.3s ease";
      modal.style.opacity = 1;
    }, 10);
  });

  // Close modal
  function closeModal() {
    modal.style.opacity = 0;
    setTimeout(() => {
      modal.style.display = "none";
      document.body.style.overflow = "auto"; // Re-enable scrolling
    }, 300);
  }

  closeModalBtn.addEventListener("click", closeModal);

  // Close modal when clicking outside
  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      closeModal();
    }
  });

  // Handle form submission
  modalForm.addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form data
    const name = document.getElementById("modal-name").value;
    const email = document.getElementById("modal-email").value;
    const phone = document.getElementById("modal-phone").value;
    const message = document.getElementById("modal-message").value;

    // In a real application, you would send this data to a server
    console.log("Form submitted:", { name, email, phone, message });

    // Show success message
    const formContent = modalForm.innerHTML;
    modalForm.innerHTML = `
            <div class="success-message">
                <h3>Thank you, ${name}!</h3>
                <p>Your message has been sent successfully. I'll get back to you within 24 hours.</p>
            </div>
        `;

    // Close modal after 3 seconds
    setTimeout(() => {
      closeModal();

      // Reset form after modal is closed
      setTimeout(() => {
        modalForm.innerHTML = formContent;
        modalForm.reset();
      }, 300);
    }, 3000);
  });
}

// Main contact form submission
document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Get form data
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const interest = document.getElementById("interest").value;
    const message = document.getElementById("message").value;

    // In a real application, you would send this data to a server
    console.log("Contact form submitted:", {
      name,
      email,
      phone,
      interest,
      message,
    });

    // Show success message
    const formContainer = document.querySelector(".contact-form");
    const formContent = formContainer.innerHTML;

    formContainer.innerHTML = `
        <div class="success-message">
            <h3>Thank you for reaching out!</h3>
            <p>I've received your message and will contact you shortly.</p>
        </div>
    `;

    // Reset form after 5 seconds
    setTimeout(() => {
      formContainer.innerHTML = formContent;
      document.getElementById("contact-form").reset();
    }, 5000);
  });

// Newsletter form submission
document
  .getElementById("newsletter-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const email = this.querySelector('input[type="email"]').value;

    // In a real application, you would send this to a server
    console.log("Newsletter subscription:", email);

    // Show success message
    const button = this.querySelector("button");
    const originalText = button.textContent;

    button.textContent = "Subscribed!";
    button.style.backgroundColor = "#27ae60";

    // Reset after 3 seconds
    setTimeout(() => {
      button.textContent = originalText;
      button.style.backgroundColor = "";
      this.reset();
    }, 3000);
  });

// Smooth scrolling for navigation links
function initSmoothScrolling() {
  const navLinks = document.querySelectorAll("header nav a, .footer-links a");

  navLinks.forEach((link) => {
    link.addEventListener("click", function (event) {
      // Check if the link is pointing to an ID on the page
      const targetId = this.getAttribute("href");
      if (targetId.startsWith("#")) {
        event.preventDefault();

        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          // Calculate position to scroll to (with offset for fixed header)
          const headerHeight = document.querySelector("header").offsetHeight;
          const targetPosition =
            targetElement.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight;

          // Smooth scroll to target
          window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
          });
        }
      }
    });
  });

  // Scroll to properties when CTA button is clicked
  document.querySelector(".cta-button").addEventListener("click", function () {
    const propertiesSection = document.getElementById("properties");
    const headerHeight = document.querySelector("header").offsetHeight;
    const targetPosition =
      propertiesSection.getBoundingClientRect().top +
      window.pageYOffset -
      headerHeight;

    window.scrollTo({
      top: targetPosition,
      behavior: "smooth",
    });
  });
}

// Add active class to navigation links based on scroll position
window.addEventListener("scroll", function () {
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll("header nav a");

  let currentSection = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const headerHeight = document.querySelector("header").offsetHeight;

    if (window.pageYOffset >= sectionTop - headerHeight - 50) {
      currentSection = section.getAttribute("id");
    }
  });

  navLinks.forEach((link) => {
    link.classList.remove("active");
    if (link.getAttribute("href") === `#${currentSection}`) {
      link.classList.add("active");
    }
  });
});

// Add CSS class for active navigation link
document.head.insertAdjacentHTML(
  "beforeend",
  `
    <style>
        nav ul li a.active {
            color: var(--secondary-color);
        }
        nav ul li a.active::after {
            width: 100%;
        }
        .success-message {
            text-align: center;
            padding: 30px 20px;
        }
        .success-message h3 {
            color: #27ae60;
            margin-bottom: 15px;
        }
    </style>
`
);

// Add animation when page elements come into view
const animateOnScroll = function () {
  const elements = document.querySelectorAll(
    ".property-card, .about-content, .testimonial-slide, .contact-content"
  );

  elements.forEach((element) => {
    const elementPosition = element.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (elementPosition < windowHeight - 100) {
      element.classList.add("animate-in");
    }
  });
};

// Add CSS for scroll animations
document.head.insertAdjacentHTML(
  "beforeend",
  `
    <style>
        .property-card, .about-content, .testimonial-slide, .contact-content {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .animate-in {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
`
);

// Run animation check on scroll
window.addEventListener("scroll", animateOnScroll);
// Run once on page load
animateOnScroll();
