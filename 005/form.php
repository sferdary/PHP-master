<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 19:40
 */
?>
<html>
<head>
    <title>Log in form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="data-form">
        <form class="data-form" action="response.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" id="submit" name="submit" value="true">Log in</button>
        </form>
    </div>
</div>
</body>
</html>
