<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 10:58
 */
?>
<html>
<head>
    <title>004 03</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="reverse-form">
        <form action="" method="post">
            <label for="textfield"></label>
            <input type="text" id="textfield" name="textfield">
            <button type="submit" id="submit" name="submit">submit</button>
        </form>
    </div>
    <div id="reverse">
        <?php

        function reverse()
        {
            $string = $_POST['textfield'];
            return strrev($string);
        }
        echo reverse();
        ?>
    </div>
</div>
</body>
</html>