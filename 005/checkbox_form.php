<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 19:58
 */
?>
<html>
<head>
    <title>Checkbox form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="animal-form">
        <form class="animal-form" action="picture_response.php" method="post">
            <label for="bear">Bear</label>
            <input type="checkbox" id="bear" name="bear" value=true>
            <label for="gorilla">Gorilla</label>
            <input type="checkbox" id="gorilla" name="gorilla" value=true>
            <label for="lion">Lion</label>
            <input type="checkbox" id="lion" name="lion" value=true>
            <button type="submit" id="submit" name="submit">See result</button>
        </form>
    </div>
</div>
</body>
</html>