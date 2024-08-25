<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Personal Cash Flow Manager</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body class="grey lighten-4">
<!-- Header -->
<header class="blue-grey darken-3 white-text center-align">
    <div class="container">
        <h1 class="header">Sign Up</h1>
        <nav>
            <a href="/login" class="white-text">Login</a>
        </nav>
    </div>
</header>

<!-- Sign Up Form -->
<main class="container">
    <div class="row">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Create Your Account</span>
                    <form action="/signup" method="POST">
                        <div class="input-field">
                            <input type="text" id="name" name="name" class="validate" required>
                            <label for="name">Full Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="lastName" name="lastName" class="validate" required>
                            <label for="lastName">Last Name</label>
                        </div>
                        <label>Gender</label>
                        <div class="input-field">
                            <p>
                                <label>
                                    <input name="gender" type="radio" value="male" required />
                                    <span>Male</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <input name="gender" type="radio" value="female" required />
                                    <span>Female</span>
                                </label>
                            </p>
                        </div>
                        <div class="input-field">
                            <input type="email" id="email" name="email" class="validate" required>
                            <label for="email">Email Address</label>
                        </div>
                        <div class="input-field">
                            <input type="password" id="password" name="password" class="validate" required>
                            <label for="password">Password</label>
                        </div>

                        <button type="submit" class="btn-large waves-effect waves-light blue">Sign Up</button>
                        <p class="center">Already have an account? <a href="/login" class="blue-text">Login</a></p>
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
</body>
</html>
