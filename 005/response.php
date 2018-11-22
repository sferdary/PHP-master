<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 11:54
 */
?>
<html>
<head>
    <title>Response</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="post">
        <?php

        print_r($_POST);
        echo '<br>';

        $username = $_POST['username'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];

        if ($username == '') {
            echo '<br><a class="error">Please enter your name!</a><br>';
            echo 'Click <a href="form.php">here</a> to enter your name.';
        }
        if ($email == '') {
            echo '<br><a class="error">Please enter your e-mail!</a><br>';
            echo 'Click <a href="form.php">here</a> to enter your email.';
        }
        if ($address == '') {
            echo '<br><a class="error">Please enter your address!</a><br>';
            echo 'Click <a href="form.php">here</a> to enter your address.';
        }
        if ($password == '') {
            echo '<br><a class="error">Please enter your password!</a><br>';
            echo 'Click <a href="form.php">here</a> to enter your password.';
        }

        ?>
    </div>
    <div class="data-table">
        <table class="data-table">
            <?php

            echo '<tr class="data-table"><td class="data-table"><b>Username:</b></td><td class="data-table">' . $username . '</td></tr>';
            echo '<tr class="data-table"><td class="data-table"><b>E-mail:</b></td><td class="data-table">' . $email . '</td></tr>';
            echo '<tr class="data-table"><td class="data-table"><b>Address:</b></td><td class="data-table">' . $address . '</td></tr>';
            echo '<tr class="data-table"><td class="data-table"><b>Password:</b></td><td class="data-table">' . $password . '</td></tr>';

            ?>
        </table>
    </div>
</div>
</body>
</html>
