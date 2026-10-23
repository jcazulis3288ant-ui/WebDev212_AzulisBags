<?php
$pageTitle = "Azulis | Home";
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

        /* Navigation Bar */
        header {
            height: 90px;
            width: 100%;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            align-items: center;
        }

        /* Logo */
        .logo {
            display: flex;
            align-items: center;
            justify-self: start;
        }

        .logo img {
            width: 75px;
            height: 75px;
            object-fit: contain;
        }

        /* Navigation Menu */
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
            font-size: 21px;
            transition: 0.3s;
        }

        nav a:hover,
        nav a.active {
            color: #9b665c;
            transform: translateY(-2px);
        }

        /* Icons */
        .icons {
            display: flex;
            justify-self: end;
            align-items: center;
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


/* FULL-SCREEN HOMEPAGE WITH BAGS */
.hero {
    width: 100%;
    min-height: calc(100vh - 90px);

    display: flex;
    align-items: center;
    justify-content: flex-start;

    padding: 50px 8%;

    /* Handbag background image */
    background-image: url("image/BackgroundIvory.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* HOMEPAGE TEXT */
.hero-text {
    width: 100%;
    max-width: 700px;
}

.brand-name {
    font-size: 45px;
    margin-bottom: 25px;
}

.hero h1 {
    font-size: clamp(55px, 6.2vw, 100px);
    line-height: 1.05;
    margin-bottom: 20px;
}

.hero p {
    font-size: clamp(17px, 2vw, 27px);
    margin-bottom: 28px;
}


        /* Shop Button */
        .button {
            display: inline-block;
            background: #111;
            color: white;
            padding: 17px 25px;
            font-size: 21px;
            text-decoration: none;
            transition: 0.3s;
        }

        .button:hover {
            background: #9b665c;
            transform: translateY(-3px);
        }

        /* Footer */
        footer {
            padding: 20px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 1100px) {
            header {
                height: auto;
                padding: 20px;
                grid-template-columns: 1fr auto;
                gap: 20px;
            }

            nav {
                grid-column: 1 / -1;
                grid-row: 2;
                flex-wrap: wrap;
                gap: 18px;
            }

            .icons {
                grid-column: 2;
                grid-row: 1;
            }

            nav a {
                font-size: 17px;
            }

            .hero {
                min-height: 80vh;
                padding: 50px 25px;
            }

            .brand-name {
                font-size: 35px;
            }
        }

        @media (max-width: 480px) {
            header {
                padding: 12px;
            }

            .logo img {
                width: 55px;
                height: 55px;
            }

            .icons {
                gap: 15px;
            }

            .icons a {
                font-size: 18px;
            }

            nav {
                gap: 14px;
            }

            nav a {
                font-size: 15px;
            }

            .hero h1 {
                font-size: 48px;
            }

            .hero p {
                font-size: 17px;
            }

            .button {
                font-size: 16px;
                padding: 14px 18px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <header>

        <!-- Logo -->
        <a href="index.php" class="logo">
            <img src="image/Logo.jpg" alt="Azulis Logo">
        </a>

        <!-- Navigation Menu -->
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="shop.php">Shop</a>
            <a href="collection.php">Collection</a>
            <a href="about.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>

        <!-- Icons -->
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

    <!-- Homepage -->
    <main>
        <section class="hero">

            <div class="hero-text">

                <div class="brand-name">— Azulis —</div>

                <h1>
                    Moira<br>
                    Collection
                </h1>

                <p>Everyday Elegance, Beautifully Carried</p>

                <a href="collection.php" class="button">
                    Shop the Collection →
                </a>

            </div>

        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Azulis. All Rights Reserved.</p>
    </footer>

</body>
</html>