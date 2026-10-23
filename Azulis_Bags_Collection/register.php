<?php
session_start();
$pageTitle = "Azulis | Create Account";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>

    <!-- Connect CSS File -->
    <link rel="stylesheet" href="auth.css">
</head>

<body>

<main class="auth-page register-page">

    <section class="auth-content">

        <!-- Logo and Home Link -->
        <header class="auth-header">
            <a href="index.php" class="logo">— Azulis —</a>

            <a href="index.php" class="back-home">
                ← Back to Home
            </a>
        </header>

        <!-- Registration Title -->
        <h1 class="auth-title">Create Your Account</h1>

        <p class="auth-subtitle">
            Join Azulis for timeless everyday style.
        </p>

        <!-- Registration Form -->
        <form class="auth-form" id="registerForm">

            <label for="fullName">Full Name</label>
            <input
                type="text"
                id="fullName"
                placeholder="Enter your full name"
                required
            >

            <label for="email">Email Address</label>
            <input
                type="email"
                id="email"
                placeholder="you@example.com"
                required
            >

            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                placeholder="Choose a username"
                required
            >

            <label for="password">Password</label>
            <input
                type="password"
                id="password"
                placeholder="Enter your password"
                minlength="8"
                required
            >

            <label for="confirmPassword">Confirm Password</label>
            <input
                type="password"
                id="confirmPassword"
                placeholder="Re-enter your password"
                required
            >

            <!-- Terms and Privacy -->
            <div class="terms">
                <label>
                    <input type="checkbox" id="agreeTerms" required>

                    <span>
                        I agree to the
                        <a href="#" id="termsLink">
                            Terms & Conditions
                        </a>
                        and
                        <a href="#" id="privacyLink">
                            Privacy Policy
                        </a>
                    </span>
                </label>
            </div>

            <button type="submit" class="auth-button">
                Create Account
            </button>

        </form>

        <!-- Login Page Link -->
        <p class="auth-footer">
            Already have an account?
            <a href="login.php">Log in</a>
        </p>

    </section>

</main>

<!-- JavaScript Registration Function -->
<script>
    const registerForm = document.getElementById("registerForm");

    registerForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const fullName =
            document.getElementById("fullName").value.trim();

        const email =
            document.getElementById("email").value.trim();

        const username =
            document.getElementById("username").value.trim();

        const password =
            document.getElementById("password").value;

        const confirmPassword =
            document.getElementById("confirmPassword").value;

        // Check whether passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return;
        }

        // Check for an existing demo account
        const savedAccount = localStorage.getItem("azulisUser");

        if (savedAccount) {
            const existingUser = JSON.parse(savedAccount);

            if (
                existingUser.email.toLowerCase() === email.toLowerCase() ||
                existingUser.username.toLowerCase() === username.toLowerCase()
            ) {
                alert("That email or username is already registered.");
                return;
            }
        }

        // Organize account information
        const user = {
            fullName: fullName,
            email: email,
            username: username,
            password: password
        };

        // Save demo account in browser storage
        localStorage.setItem("azulisUser", JSON.stringify(user));

        alert("Account created successfully! You can now log in.");

        window.location.href = "login.php";
    });

    // Terms and Conditions
    document.getElementById("termsLink").addEventListener(
        "click", function(event) {
            event.preventDefault();
            alert("Add your Azulis Terms and Conditions here.");
        }
    );

    // Privacy Policy
    document.getElementById("privacyLink").addEventListener(
        "click", function(event) {
            event.preventDefault();
            alert("Add your Azulis Privacy Policy here.");
        }
    );
</script>

</body>
</html>
