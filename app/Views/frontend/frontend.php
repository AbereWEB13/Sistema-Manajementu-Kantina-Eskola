<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Manajamentu iha Kantina Eskola</title>
    <link rel="stylesheet" href="<?= base_url(); ?>modifika_frontend/styles.css">

    <!-- We'll add CSS and JS links later -->
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="nav-brand">
                <img src="<?= base_url() ?>public/assets/images/logo/kantina.png" alt="Logo" class="logo">
                <h1>Sistema Manajamentu iha Kantina Eskola</h1>
            </div>
            <div class="nav-menu">
                <a href="#" class="nav-link">Home</a>
                <a href="#about" class=" nav-link">About</a>
                <a href="#properties" class=" nav-link">Menu Sasan</a>
                <a href="#testimonials" class=" nav-link">Testimonials</a>
                <a href="#contact" class="nav-link">Contact</a>
                <a class="login-btn" href="<?= base_url("/auth/logout") ?>">
                    Login
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <div class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Bemvidu Kantina Eskola</h1>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?= base_url(); ?>modifika_frontend/images/user/user.png" alt="Jane Doe - Real Estate Agent">
                </div>
                <div class="about-text">
                    <h3>Jane Doe</h3>
                    <h4>Licensed Canteen Manager</h4>
                    <p>With a passion for helping customers enjoy the best food and service, I’ve been serving the local community in the canteen business for over a decade. My expertise in menu planning, food quality, and customer service ensures you get the best experience every time.</p>
                    <ul class="credentials">
                        <li>Certified Culinary Specialist (CCS)</li>
                        <li>Accredited Customer Service Representative (ACSR)</li>
                        <li>Top 1% of Canteen Professionals Nationwide</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties Slider -->
    <section class="featured-properties">
        <div class="container">
            <h2 class="section-title">Fatin Kantina </h2>
            <div class="property-slider">
                <!-- Property Slide 1 -->
                <div class="property-slide">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/kantina1.webp" alt="Luxury Villa">

                    </div>
                    <div class="property-details">
                        <h3>Kantina 1</h3>

                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Slide 2 -->
                <div class="property-slide">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/kantina2.webp" alt="Modern Apartment">

                    </div>
                    <div class="property-details">
                        <h3>Kantina 2</h3>

                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Slide 3 -->
                <div class="property-slide">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/kantina3.jpg" alt="Family Home">

                    </div>
                    <div class="property-details">
                        <h3>Kantina 3</h3>
                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <button class="prev-slide">Previous</button>
                <button class="next-slide">Next</button>
            </div>
        </div>
    </section>

    <!-- Property Listings with Filters -->
    <section id="properties" class="property-listings">
        <div class="container">
            <h2 class="section-title">Menu Sasan</h2>

            <!-- Filters -->
            <div class="property-filters">
                <div class="filter-group">
                    <label for="property-type">Kategoria Produtu</label>
                    <select id="property-type">
                        <option value="all">All Types</option>
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                </div>

                <button id="apply-filters">Apply Filters</button>
                <button id="reset-filters">Reset</button>
            </div>

            <!-- Property Grid -->
            <div class="property-grid">
                <!-- Property Card 1 -->
                <div class="property-card" data-type="makanan" data-price="0.50" data-beds="1">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/burger.jpg" alt="Luxury Villa">

                        <div class="property-price">$0.50</div>
                    </div>
                    <div class="property-details">
                        <h3>Burger</h3>

                        <div class="property-features">
                        </div>
                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="property-card" data-type="minuman" data-price="0.25" data-beds="2">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/es-teh.jpg" alt="Modern Apartment">

                        <div class="property-price">$0.25</div>
                    </div>
                    <div class="property-details">
                        <h3>Es-teh</h3>

                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="property-card" data-type="makanan" data-price="0.50" data-beds="3">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/nasi_ayam.jpg" alt="Family Home">

                        <div class="property-price">$0.50</div>
                    </div>
                    <div class="property-details">
                        <h3>Etu Naan Manu</h3>
                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Card 4 -->
                <div class="property-card" data-type="makanan" data-price="0.50" data-beds="4">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/nasi-telur.jpg" alt="Waterfront Condo">

                        <div class="property-price">$0.50</div>
                    </div>
                    <div class="property-details">
                        <h3>Etu Mantolun</h3>
                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>

                <!-- Property Card 5 -->
                <div class="property-card" data-type="minuman" data-price="0.50" data-beds="5">
                    <div class="property-image">
                        <img src="<?= base_url(); ?>modifika_frontend/images/properties/exta_joss.jpg" alt="Luxury Estate">

                        <div class="property-price">$0.50</div>
                    </div>
                    <div class="property-details">
                        <h3>Es-Extrajoss</h3>

                        <a href="#" class="property-link">View Details</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="location-map">
        <div class="container">
            <h2 class="section-title">Our Service Areas</h2>
            <div class="map-container">
                <!-- This will be replaced with an actual map in the JS implementation -->
                <div id="property-map">
                    <img src="<?= base_url(); ?>modifika_frontend/images/maps/mapa.jpeg" alt="Service Area Map">
                </div>
                <div class="map-overlay">
                    <h3>Areas We Serve</h3>
                    <ul class="service-areas">
                        <li>Manleuana Mane Mesac</li>
                        <li>Kios Mantenek</li>
                        <li>Dili Institute of Technology</li>
                        <li>Kost Manleuana</li>
                        <li>Kapela Sao Miguel Arcanjo</li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="section-title">Client Testimonials</h2>
            <div class="testimonial-slider">
                <!-- Testimonial 1 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="quote">"Kantina ida ne’e halo han ne'ebé fresku no diak. Servisu mak rapide, no presu mos loos atu estudante sira. Hau sempre gosta mai han iha ne’e!"
                        </div>
                        <div class="client-info">
                            <img src="<?= base_url(); ?>modifika_frontend/images/clients/client-1.png" alt="John & Sarah Thompson" class="client-image">
                            <div class="client-details">
                                <h4>João Guterres</h4>
                                <p>Estudante</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="quote">"Ambiente iha Kantina diak loos. Haan mos limpa no hotu-hotu prepara dadaun. Bele recomenda ba kolega sira hotu."</div>
                        <div class="client-info">
                            <img src="<?= base_url(); ?>modifika_frontend/images/clients/client-2.png" alt="Robert Johnson" class="client-image">
                            <div class="client-details">
                                <h4>Maria dos Santos </h4>
                                <p>Estudante</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="quote">"Kantina ne’e fó servisu boot ba estudante no formador sira. Haan diak, preisu halo sentido, no espasu mos confortável."
                        </div>
                        <div class="client-info">
                            <img src="<?= base_url(); ?>modifika_frontend/images/clients/client-3.png" alt="Michael & Lisa Chen" class="client-image">
                            <div class="client-details">
                                <h4>Filomeno Rebocho</h4>
                                <p>Estudante</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-controls">
                <button class="prev-testimonial">Previous</button>
                <button class="next-testimonial">Next</button>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Kontaktu Ami</h2>
            <div class="contact-content">

                <!-- Contact Info -->
                <div class="contact-info">
                    <h3>Informasaun Kontaktu</h3>
                    <ul>
                        <li><i class="icon-phone"></i> (+670) 74603313</li>
                        <li><i class="icon-email"></i> aberegomes9@gmail.com</li>
                        <li><i class="icon-location"></i>Manleuana, Dili – Timor-Leste</li>
                    </ul>

                </div>

                <!-- Contact Form -->
                <div class="contact-form">
                    <h3>Envia Mensajen</h3>
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="name">Naran</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Imail</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefónu</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <div class="form-group">
                            <label for="interest">Assuntu:</label>
                            <select id="interest" name="interest">
                                <option value="food">Han (Food)</option>
                                <option value="drink">Bebidas</option>
                                <option value="reservation">Reserva Mesa</option>
                                <option value="other">Seluk</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Mensajen</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="submit-button">Envia Mensajen</button>
                    </form>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <h3>Salvador Erto Marcal Gomes</h3>
                    <p>Your trusted partner in real estate since 2025</p>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#properties">Properties</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Salvador Gomes Realty. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- We'll add JavaScript files later -->
    <script src="<?= base_url(); ?>modifika_frontend/script.js"></script>
    <script src="<?= base_url(); ?>modifika_frontend/script1.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 4rem;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .nav-brand img {
            height: 45px;
            width: auto;
        }

        .nav-brand h1 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 2.5rem;
        }

        .nav-link {
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            font-size: 1rem;
            transition: color 0.2s ease;
        }

        .nav-link:hover {
            color: #2563eb;
        }

        .login-btn {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 0.625rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
            text-decoration: none;
            /* Ensure it looks like a button */
        }

        .login-btn:hover {
            background-color: #1d4ed8;
        }

        .hero {
            height: 70vh;
            position: relative;
            background: url('<?= base_url() ?>public/assets/images/b_kantina.jpg') center/cover no-repeat;
            margin-top: 73px;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 2rem;
        }

        .hero-content h1 {
            color: white;
            font-size: 3.5rem;
            font-weight: 700;
            max-width: 800px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .search-section {
            padding: 2rem;
            margin-top: -2rem;
            position: relative;
            z-index: 2;
        }

        .search-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 1rem;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .search-input {
            flex: 2;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 1rem;
        }

        .category-select {
            flex: 1;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 1rem;
            background-color: white;
            cursor: pointer;
        }

        .search-btn {
            padding: 0.75rem 2rem;
            background-color: #2563eb;
            color: white;
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .search-btn:hover {
            background-color: #1d4ed8;
        }

        @media (max-width: 1024px) {
            .navbar {
                padding: 1rem 2rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .search-container {
                flex-direction: column;
            }

            .hero-content h1 {
                font-size: 2rem;
            }
        }
    </style>


</body>

</html>