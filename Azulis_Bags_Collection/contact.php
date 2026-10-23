<?php
$pageTitle = "Azulis | Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Georgia, serif;
            color: #222;
            background: #f8f5f0;
        }

        /* NAVIGATION */
        header {
            min-height: 85px;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            background: #f8f5f0;
        }

        .logo img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        nav {
            display: flex;
            gap: 28px;
            align-items: center;
        }

        nav a {
            color: #111;
            text-decoration: none;
            font-size: 19px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: #b76e79;
        }

        .icons {
            display: flex;
            justify-self: end;
            align-items: center;
            gap: 25px;
        }

        .icons a {
            color: #111;
            font-size: 21px;
            text-decoration: none;
        }

        .icons a:hover {
            color: #b76e79;
        }

        /* CONTACT HERO WITH PINK BAG BACKGROUND */
        .contact-hero {
            min-height: 300px;
            display: flex;
            align-items: center;
            padding: 40px 7%;

            background-image:
                linear-gradient(
                    to right,
                    rgba(248, 245, 240, 0.95),
                    rgba(248, 245, 240, 0.65),
                    rgba(248, 245, 240, 0.05)
                ),
                url("image/PinkBag.png");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-text {
            max-width: 520px;
        }

        .eyebrow {
            color: #c66d79;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            margin-bottom: 8px;
        }

        .contact-hero h1 {
            font-size: clamp(42px, 5vw, 60px);
            margin-bottom: 8px;
        }

        .hero-subtitle {
            font-size: 20px;
            font-style: italic;
            margin-bottom: 18px;
        }

        .hero-description {
            font-size: 16px;
            line-height: 1.7;
        }

        /* CONTACT CONTENT */
        .contact-section {
            padding: 40px 6%;
            display: grid;
            grid-template-columns: 0.85fr 1.25fr 1.5fr;
            gap: 35px;
            align-items: start;
            background: #f8f5f0;
        }

        /* CONTACT DETAILS */
        .contact-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
            padding: 15px 0;
            border-bottom: 1px solid #ded8d2;
        }

        .contact-item:last-of-type {
            border-bottom: none;
        }

        .contact-icon {
            width: 44px;
            height: 44px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f0d8d5;
            color: #b65d69;
        }

        .contact-item h3 {
            font-size: 17px;
            font-style: italic;
            margin-bottom: 7px;
        }

        .contact-item p,
        .contact-item a {
            font-size: 15px;
            line-height: 1.6;
            color: #444;
            text-decoration: none;
            overflow-wrap: anywhere;
        }

        .social-section {
            margin-top: 22px;
        }

        .social-section h3 {
            margin-bottom: 15px;
        }

        .social-icons {
            display: flex;
            gap: 18px;
        }

        .social-icons a {
            color: #111;
            font-size: 21px;
            transition: 0.3s;
        }

        .social-icons a:hover {
            color: #b65d69;
        }

        /* CONTACT FORM */
        .form-heading {
            font-size: 23px;
            margin-bottom: 8px;
        }

        .form-description {
            color: #666;
            font-size: 14px;
            margin-bottom: 22px;
        }

        .contact-form input,
        .contact-form select,
        .contact-form textarea {
            width: 100%;
            padding: 13px;
            margin-bottom: 12px;
            border: 1px solid #ded8d2;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.55);
            font-family: Georgia, serif;
            font-size: 14px;
        }

        .contact-form input:focus,
        .contact-form select:focus,
        .contact-form textarea:focus {
            outline: 1px solid #bd707a;
            border-color: #bd707a;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .contact-form textarea {
            min-height: 115px;
            resize: vertical;
        }

        .send-button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 4px;
            background: #bd626e;
            color: white;
            font-weight: bold;
            letter-spacing: 1px;
            cursor: pointer;
            transition: 0.3s;
        }

        .send-button:hover {
            background: #9e4e5a;
        }

        .send-button i {
            float: right;
        }

        /* GOOGLE MAP */
        .map-container {
            width: 100%;
            height: 390px;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* FOOTER */
        footer {
            padding: 25px 6% 12px;
            border-top: 1px solid #ded8d2;
            background: rgba(248, 245, 240, 0.95);
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1.2fr 1fr 1fr 1.2fr;
            gap: 30px;
            padding-bottom: 25px;
        }

        .footer-brand {
            font-size: 38px;
            font-style: italic;
            margin-bottom: 5px;
        }

        .footer-tagline {
            font-style: italic;
            color: #555;
        }

        .footer-column h4 {
            margin-bottom: 10px;
            font-size: 15px;
        }

        .footer-column a {
            display: block;
            margin-bottom: 6px;
            color: #555;
            font-size: 13px;
            text-decoration: none;
        }

        .footer-column a:hover {
            color: #bd626e;
        }

        .footer-socials {
            display: flex;
            gap: 13px;
            margin: 10px 0 15px;
        }

        .footer-socials a {
            font-size: 17px;
            color: #111;
        }

        .newsletter {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 25px;
            overflow: hidden;
            background: white;
        }

        .newsletter input {
            min-width: 0;
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
            background: transparent;
        }

        .newsletter button {
            width: 40px;
            flex-shrink: 0;
            border: none;
            border-radius: 50%;
            background: #bd626e;
            color: white;
            cursor: pointer;
        }

        .copyright {
            padding-top: 12px;
            border-top: 1px solid #ded8d2;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        /* TABLET */
        @media (max-width: 1050px) {
            header {
                grid-template-columns: 1fr auto;
                gap: 15px;
                padding: 15px 25px;
            }

            nav {
                grid-column: 1 / -1;
                grid-row: 2;
                flex-wrap: wrap;
                justify-content: center;
                gap: 18px;
                padding-bottom: 10px;
            }

            .icons {
                grid-column: 2;
                grid-row: 1;
            }

            .contact-section {
                grid-template-columns: 1fr 1fr;
            }

            .map-container {
                grid-column: 1 / -1;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
        }

        /* MOBILE */
        @media (max-width: 600px) {
            header {
                padding: 12px 18px;
            }

            .logo img {
                width: 55px;
                height: 55px;
            }

            nav {
                gap: 12px;
            }

            nav a {
                font-size: 14px;
            }

            .icons {
                gap: 15px;
            }

            .icons a {
                font-size: 18px;
            }

            .contact-hero {
                min-height: 300px;
                padding: 35px 22px;
                background-position: 65% center;
            }

            .contact-hero h1 {
                font-size: 42px;
            }

            .hero-description {
                font-size: 14px;
            }

            .contact-section {
                grid-template-columns: 1fr;
                padding: 30px 22px;
                gap: 28px;
            }

            .map-container {
                grid-column: auto;
                height: 300px;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 25px 18px;
            }

            .footer-brand {
                font-size: 30px;
            }
        }
    
        .social-links {
    display: flex;
    gap: 18px;
    align-items: center;
}

.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #111;
    font-size: 22px;
    text-decoration: none;
    cursor: pointer;
    transition: color 0.3s, transform 0.3s;
}

.social-links a:hover {
    color: #b66b68;
    transform: translateY(-3px);
}
    
    </style>
</head>

<body>

    <!-- NAVIGATION BAR -->
    <header>
        <a href="index.php" class="logo">
            <img src="image/Logo.jpg" alt="Azulis Logo">
        </a>

        <nav>
            <a href="index.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="collection.php">Collection</a>
            <a href="about.php">About Us</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>

        <div class="icons">
            <a href="login.php" title="Log In">
                <i class="fa-regular fa-user"></i>
            </a>
            <a href="collection.php" title="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <a href="shop.php" title="Shopping Cart">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
    </header>

    <!-- CONTACT HERO -->
    <section class="contact-hero">
        <div class="hero-text">
            <p class="eyebrow">GET IN TOUCH</p>
            <h1>Contact Us</h1>
            <p class="hero-subtitle">We’d love to hear from you.</p>
            <p class="hero-description">
                Whether you have a question, feedback, or need assistance,
                our team is here to help. Reach out to us anytime!
            </p>
        </div>
    </section>

    <!-- CONTACT DETAILS, FORM AND MAP -->
    <main class="contact-section">

        <section class="contact-details">
            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <h3>Phone</h3>
                    <p>+63 2 645 8027</p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <h3>Address</h3>
                    <p>
                        Block 4, Lot 9, Kabayani Road,<br>
                        Paradise, Marikina City, 1800,<br>
                        Metro Manila, Philippines
                    </p>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h3>Email</h3>
                    <a href="mailto:support@azulis.com">
                        support@azulis.com
                    </a>
                </div>
            </div>

        
            <div class="social-section">
                <h3>Follow Us</h3>
                           <!-- Follow Us -->
<div class="social-links">
    <a href="https://www.facebook.com/AzulisBagCollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>

    <a href="https://www.instagram.com/azulisbag/"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <a href="https://www.tiktok.com/@azulisbagcollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on TikTok">
        <i class="fa-brands fa-tiktok"></i>
    </a>
</div>
            </div>
        </section>

        <!-- CONTACT FORM -->
        <section class="message-section">
            <h2 class="form-heading">Send Us a Message</h2>
            <p class="form-description">
                We’ll get back to you as soon as possible.
            </p> 

            <form class="contact-form" action="#" method="post">
                <div class="form-row">
                    <input type="text" name="full_name"
                           placeholder="Full Name *" required>

                    <input type="email" name="email"
                           placeholder="Email Address *" required>
                </div>

                <select name="subject" required>
                    <option value="">Select a Subject *</option>
                    <option value="product">Product Inquiry</option>
                    <option value="order">Order Assistance</option>
                    <option value="return">Returns and Exchanges</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option>
                </select>

                <textarea name="message"
                          placeholder="Your Message *"
                          required></textarea>

                <button type="submit" class="send-button">
                    SEND MESSAGE
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </form>
        </section>

        <!-- GOOGLE MAP -->
        <section class="map-container">
            <iframe
                src="https://maps.google.com/maps?q=Block%204%20Lot%209%20Kabayani%20Road%20Marikina%20City%20Philippines&t=&z=15&ie=UTF8&iwloc=&output=embed"
                loading="lazy"
                title="Azulis Location Map"
                allowfullscreen>
            </iframe>
        </section>

    </main>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">

            <div>
                <h2 class="footer-brand">Azulis</h2>
                <p class="footer-tagline">Elegance in every detail.</p>
            </div>

            <div class="footer-column">
                <h4>Quick Links</h4>
                <a href="index.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="collection.php">Collections</a>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact</a>
            </div>

            <div class="footer-column">
                <h4>Customer Care</h4>
                <a href="#">FAQs</a>
                <a href="#">Shipping & Returns</a>
                <a href="#">Size Guide</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
            </div>

            <div class="footer-column">
                <h4>Stay Connected</h4>

               <div class="social-links">
    <a href="https://www.facebook.com/AzulisBagCollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>

    <a href="https://www.instagram.com/azulisbag/"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on Instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>

    <a href="https://www.tiktok.com/@azulisbagcollection"
       target="_blank" rel="noopener noreferrer"
       aria-label="Visit Azulis on TikTok">
        <i class="fa-brands fa-tiktok"></i>
    </a>
</div>

                <p style="font-size:13px; margin-bottom:10px;">
                    Subscribe to our newsletter
                </p>

                <form class="newsletter" action="#" method="post">
                    <input type="email" name="newsletter_email"
                           placeholder="Your email address" required>
                    <button type="submit" aria-label="Subscribe">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>

        </div>

        <div class="copyright">
            &copy; <?php echo date("Y"); ?> Azulis. All Rights Reserved.
        </div>
    </footer>

</body>
</html>
