<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 21/11/2018
 * Time: 13:36
 */
?>
<html>
<head>
    <title>004 01</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="celsius">
        <div id="form-celsius">
            <form action="" method="post">
                <label for="celsius">Insert degrees Celsius</label><br>
                <input type="number" id="celsius" name="celsius">
                <button type="submit" id="submit" name="submit">submit</button>
            </form>
        </div>
        <div id="temperature-conversion">
            <?php
            function refactor()
            {
                $celsius = $_POST['celsius'];
                $fahrenheit = (($celsius * (9 / 5)) + 32);

                if ($celsius != '') {
                    echo $celsius . ' degrees Celsius is ' . $fahrenheit . ' degrees Fahrenheit';
                } else {
                    echo 'Insert number!';
                }
            }

            refactor();

            ?>
        </div>
    </div>
</div>
</body>
</html>

