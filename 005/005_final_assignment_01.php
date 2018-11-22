<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 21:42
 */
?>
<html>
<head>
    <title>005 Final assignment</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="data-form">
        <form class="data-form" action="login_check.php" method="POST">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" id="submit" name="submit">Log in</button>
        </form>
        <p>
            piet@worldonline.nl - doetje123<br>
            klaas@carpets.nl - snoepje777<br>
            truushendriks@wegweg.nl - arkiearkie201
        </p>
    </div>
</div>
</body>
</html>