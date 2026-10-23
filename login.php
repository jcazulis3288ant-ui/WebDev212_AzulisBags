<?php
session_start();
$pageTitle = "Azulis | Log In";
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

<main class="auth-page">

    <section class="auth-content">

        <!-- Logo and Home Link -->
        <header class="auth-header">
            <a href="index.php" class="logo">— Azulis —</a>

            <a href="index.php" class="back-home">
                ← Back to Home
            </a>
        </header>

        <!-- Login Title -->
        <h1 class="auth-title">Welcome Back</h1>

        <p class="auth-subtitle">
            Sign in to discover your everyday elegance.
        </p>

        <!-- Login Form -->
        <form class="auth-form" id="loginForm">

            <label for="email">Email Address</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="you@example.com"
                required
            >

            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                placeholder="Enter your password"
                required
            >

            <!-- Remember Me and Forgot Password -->
            <div class="form-options">

                <label>
                    <input type="checkbox" id="remember">
                    Remember me
                </label>

                <a href="#" id="forgotPassword">
                    Forgot password?
                </a>

            </div>

            <button type="submit" class="auth-button">
                Log In
            </button>

        </form>

        <!-- Google Sign-in -->
        <div class="divider-text">or continue with</div>

        <a href="#" class="google-button" id="googleLogin">
            🌐 &nbsp; Continue with Google
        </a>

        <!-- Register Page Link -->
        <p class="auth-footer">
            New to Azulis?
            <a href="register.php">Create an account</a>
        </p>

    </section>

</main>

<!-- JavaScript -->
<script>
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", function(event) {
        event.preventDefault();

        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value;

        // Get the registered account from browser storage
        const savedUser = JSON.parse(
            localStorage.getItem("azulisUser") || "null"
        );

        // Check whether an account exists
        if (!savedUser) {
            alert("Please create an account first.");
            return;
        }

        // Check login details
        if (
            email === savedUser.email &&
            password === savedUser.password
        ) {
            alert("Welcome back to Azulis!");
            window.location.href = "index.php";
        } else {
            alert("Incorrect email or password.");
        }
    });

    // Show or hide password
    document.getElementById("password").insertAdjacentHTML(
        "afterend",
        '<button type="button" id="togglePassword" ' +
        'style="margin-top:8px; background:none; border:none; ' +
        'cursor:pointer; font-family:Georgia;">Show password</button>'
    );

    document.getElementById("togglePassword").addEventListener(
        "click", function() {

            const password = document.getElementById("password");
            const showing = password.type === "text";

            password.type = showing ? "password" : "text";

            this.textContent = showing
                ? "Show password"
                : "Hide password";
        }
    );

    // Forgot password message
    document.getElementById("forgotPassword").addEventListener(
        "click", function(event) {

            event.preventDefault();

            alert(
                "Please contact Azulis support to reset your password."
            );
        }
    );

    // Google sign-in demonstration
    document.getElementById("googleLogin").addEventListener(
        "click", function(event) {

            event.preventDefault();

            alert(
                "Google sign-in needs Google authentication setup."
            );
        }
    );
</script>

</body>
</html>
