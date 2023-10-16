<?php require '../includes/config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoffeeNation | Login</title>
    <link rel="stylesheet" href="../assets/css/loginStyle.css">
</head>

<body>
    <div class="container">
        <!-- code here -->
        <div class="card">
            <div class="card-image">
                <h2 class="card-heading">
                    CoffeeNation
                    <small>Let us create your account</small>
                </h2>
            </div>
            <form class="card-form" action="<?= urlOf('assets/api/insertCustomer.php') ?>" method="post">
                <div class="input">
                    <input type="text" class="input-field" autofocus name="name" />
                    <label class="input-label">Full name</label>
                </div>
                <div class="input">
                    <input type="number" class="input-field" name="number" />
                    <label class="input-label">Number</label>
                </div>
                <div class="input">
                    <input type="email" class="input-field" name="email" />
                    <label class="input-label">Email</label>
                </div>
                <div class="input">
                    <input type="password" class="input-field" name="password" />
                    <label class="input-label">Password</label>
                </div>
                <div class="action">
                    <button class="action-button">Get started</button>
                </div>
            </form>
            <div class="card-info">
                <p>If you have an account<a href="./login.php">Log In</a></p>
            </div>
        </div>
    </div>

</body>

</html>