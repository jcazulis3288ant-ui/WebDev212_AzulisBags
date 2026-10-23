<?php
$pageTitle = "Azulis | About Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>

    <!-- Font Awesome Icons -->
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
            background: #f8f5f0;
            color: #111;
        }

        /* NAVIGATION BAR */
        header {
            height: 85px;
            width: 100%;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
            background: #f8f5f0;
        }

        /* LOGO */
        .logo {
            display: flex;
            align-items: center;
            justify-self: start;
        }

        .logo img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        /* NAVIGATION MENU */
        nav {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 28px;
            white-space: nowrap;
        }

        nav a {
            color: #111;
            text-decoration: none;
            font-size: 20px;
            padding: 8px 0;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: #9b665c;
        }

        nav a.active {
            border-bottom: 2px solid #9b665c;
        }

        /* RIGHT-SIDE ICONS */
        .icons {
            display: flex;
            align-items: center;
            justify-self: end;
            gap: 28px;
        }

        .icons a {
            color: #111;
            font-size: 21px;
            text-decoration: none;
            transition: 0.3s;
        }

        .icons a:hover {
            color: #9b665c;
            transform: translateY(-3px);
        }

        /* HERO BACKGROUND */
        .about-hero {
            min-height: 390px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            text-align: center;
            padding: 50px 20px;

            background-image:
                linear-gradient(rgba(0,0,0,0.35),
                                rgba(0,0,0,0.35)),
                url("image/Background_girls.png");

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero-content {
            position: relative;
            color: white;
        }

        .hero-label {
            color: #f5a623;
            font-family: Arial, sans-serif;
            font-size: 20px;
            margin-bottom: 12px;
            letter-spacing: 1px;
        }

        .about-hero h1 {
            font-size: clamp(38px, 5vw, 65px);
            line-height: 1.1;
            font-weight: normal;
        }

        .star {
            position: absolute;
            left: -90px;
            top: 45px;
            color: #f5a623;
            font-size: 65px;
        }

        /* IVORY CONTENT BACKGROUND */
        .about-content {
            padding: 40px 8% 60px;
            background-color: #f8f5f0;
            background-image: url("image/Ivory.png");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* STORY SECTION */
        .story-grid {
            max-width: 1050px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            column-gap: 90px;
            row-gap: 35px;
        }

        .section-label {
            font-family: Arial, sans-serif;
            font-size: 14px;
            color: #c77d22;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .intro h2 {
            color: #205c49;
            font-size: 36px;
            line-height: 1.2;
            font-weight: normal;
        }

        .story h2 {
            color: #205c49;
            font-size: 23px;
            margin-bottom: 10px;
        }

        .story p,
        .mission p,
        .vision p {
            font-family: Arial, sans-serif;
            color: #666;
            font-size: 14px;
            line-height: 1.8;
        }

        /* MISSION AND VISION */
        .mission h2,
        .vision h2 {
            color: #205c49;
            font-size: 22px;
            margin-bottom: 8px;
        }

        /* LOWER IMAGE */
        .about-image {
            max-width: 1050px;
            height: 220px;
            margin: 35px auto 0;
            border-radius: 18px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            filter: grayscale(100%);
            display: block;
        }

        /* FOOTER */
        footer {
            background: #f8f5f0;
            text-align: center;
            padding: 20px;
            font-size: 13px;
            color: #666;
        }

        /* TABLET */
        @media (max-width: 1000px) {
            header {
                height: auto;
                padding: 15px 25px;
                grid-template-columns: 1fr auto;
                row-gap: 15px;
            }

            nav {
                grid-column: 1 / -1;
                grid-row: 2;
                flex-wrap: wrap;
                gap: 20px;
            }

            .icons {
                grid-column: 2;
                grid-row: 1;
            }

            .story-grid {
                column-gap: 40px;
            }

            .about-hero {
                min-height: 330px;
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

            .icons {
                gap: 17px;
            }

            .icons a {
                font-size: 18px;
            }

            nav {
                gap: 15px;
            }

            nav a {
                font-size: 15px;
            }

            .about-hero {
                min-height: 300px;
                background-position: center;
            }

            .about-hero h1 {
                font-size: 40px;
            }

            .hero-label {
                font-size: 16px;
            }

            .star {
                position: static;
                display: block;
                font-size: 45px;
                margin-bottom: 8px;
            }

            .about-content {
                padding: 35px 25px;
            }

            .story-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .intro h2 {
                font-size: 31px;
            }

            .about-image {
                height: 170px;
                margin-top: 30px;
            }
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
            <a href="about.php" class="active">About Us</a>
            <a href="contact.php">Contact</a>
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

    <!-- HERO SECTION -->
    <main>
        <section class="about-hero">
            <div class="hero-content">
                <span class="star">✳</span>
                <p class="hero-label">ABOUT US</p>
                <h1>The Art of<br>Everyday Elegance</h1>
            </div>
        </section>

        <!-- ABOUT US DETAILS -->
        <section class="about-content">

            <div class="story-grid">

                <!-- WHO WE ARE -->
                <div class="intro">
                    <p class="section-label">WHO WE ARE</p>
                    <h2>Elegance, style, and functionality.</h2>
                </div>

                <!-- OUR STORY -->
                <div class="story">
                    <h2>Our Story</h2>
                    <p>
                        Azulis is a handbag brand that brings together
                        elegance, style, and functionality. Proudly inspired
                        by Marikina, the shoe and leathercraft capital of the
                        Philippines, we offer durable, quality-made Marikina
                        bags designed to last. Our collections feature a
                        variety of handbags that complement different outfits,
                        occasions, and personal styles.
                    </p>
                </div>

                <!-- OUR MISSION -->
                <div class="mission">
                    <p class="section-label">OUR MISSION</p>
                    <h2>Beautiful bags for everyday life.</h2>
                    <p>
                        Our mission is to offer fashionable and versatile
                        handbags while providing customers with a simple,
                        convenient, and enjoyable online shopping experience.
                        We value quality, practicality, and timeless style.
                    </p>
                </div>

                <!-- OUR VISION -->
                <div class="vision">
                    <p class="section-label">OUR VISION</p>
                    <h2>Confidence in every carry.</h2>
                    <p>
                        Our vision is to become a trusted destination for
                        handbag lovers by offering stylish designs that
                        inspire confidence and express individuality. We aim
                        to showcase the quality craftsmanship and durability
                        of Marikina-made bags.
                    </p>
                </div>

            </div>

            <!-- LOWER BACKGROUND IMAGE -->
            <div class="about-image">
                <img src="image/Background_girls.png"
                     alt="Azulis bag collection">
            </div>

        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Azulis. All Rights Reserved.</p>
    </footer>

</body>
</html>
