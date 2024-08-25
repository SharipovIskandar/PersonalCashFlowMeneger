<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Personal Cash Flow Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body class="grey lighten-4">
<!-- Header -->
<header class="blue-grey darken-3 white-text center-align">
    <div class="container">
        <h1 class="header">Login</h1>
    </div>
</header>

<!-- Login Form -->
<main class="container">
    <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Login to Your Account</span>
                    <form action="/login" method="POST">
                        <div class="input-field">
                            <input type="email" id="login-email" name="email" class="validate" required>
                            <label for="login-email">Email Address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="login-password" name="password" class="validate" required>
                            <label for="login-password">Password</label>
                        </div>
                        <button type="submit" class="btn-large waves-effect waves-light blue">Login</button>
                        <p class="center mt-2">Don't have an account? <a href="/signup" class="blue-text">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="blue-grey darken-3 white-text center-align">
    <div class="container">
        <p>&copy; 2024 Personal Cash Flow Manager. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>
