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
    <title>004 02</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="divide">
        <div id="form-dividing">
            <form action="" method="post">
                <label for="divide">Insert a number that is dividable by 3</label><br>
                <input type="number" id="divide" name="divide">
                <button type="submit" id="submit" name="submit">submit</button>
            </form>
        </div>
        <div id="division">
            <?php
            function division()
            {
                $input = $_POST['divide'];
                if ($input % 3 != 0 || $input == 0 || $input = '') {
                    echo 'false';
                } else {
                    echo 'true';
                }
            }

            division();

            ?>
        </div>
    </div>
</div>
</body>
</html>