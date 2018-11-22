<?php
/**
 * Created by S. Ferdary
 * Date: 22/11/2018
 */
?>
<html>
<head>
    <title>Log in check</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">

    <?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    $welcome = '<br>Welcome!<br>';
    $reject = '<br>Access denied!';

    if ($email == '') {
        echo '<br><a class="error">Please enter your e-mail!</a><br>';
        echo 'Click <a href="form.php">here</a> to enter your email.';
    }

    if ($password == '') {
        echo '<br><a class="error">Please enter your password!</a><br>';
        echo 'Click <a href="form.php">here</a> to enter your password.';
    }


    if ($email == 'piet@worldonline.nl' && $password == 'doetje123') {
        print_r($_POST);
        echo '<br>';
        echo $welcome;
        echo '<table class="data-table">';
        echo '<tr class="data-table"><td class="data-table"><b>E-mail:</b></td><td class="data-table">' . $email . '</td></tr>';
        echo '<tr class="data-table"><td class="data-table"><b>Password:</b></td><td class="data-table">' . $password . '</td></tr>';
        echo '</table>';
    } else if ($email == 'klaas@carpets.nl' && $password == 'snoepje777') {
        print_r($_POST);
        echo '<br>';
        echo $welcome;
        echo '<table class="data-table">';
        echo '<tr class="data-table"><td class="data-table"><b>E-mail:</b></td><td class="data-table">' . $email . '</td></tr>';
        echo '<tr class="data-table"><td class="data-table"><b>Password:</b></td><td class="data-table">' . $password . '</td></tr>';
        echo '</table>';
    } else if ($email == 'truushendriks@wegweg.nl' && $password == 'arkiearkie201') {
        print_r($_POST);
        echo '<br>';
        echo $welcome;
        echo '<table class="data-table">';
        echo '<tr class="data-table"><td class="data-table"><b>E-mail:</b></td><td class="data-table">' . $email . '</td></tr>';
        echo '<tr class="data-table"><td class="data-table"><b>Password:</b></td><td class="data-table">' . $password . '</td></tr>';
        echo '</table>';
    } else {
        echo $reject;
    }

    ?>

</div>
</body>