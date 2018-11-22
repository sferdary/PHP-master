<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 22/11/2018
 * Time: 20:07
 */
?>
<html>
<head>
    <title>Picture response</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div id="post">

        <?php
        print_r($_POST);

        $bear = $_POST['bear'];
        $gorilla = $_POST['gorilla'];
        $lion = $_POST['lion'];

        if ($bear) {
            echo '<div id="bear"></div>';
        } else if (!$bear) {
            echo '';
        }

        if ($gorilla) {
            echo '<div id="gorilla"></div>';
        } else if (!$gorilla) {
            echo '';
        }

        if ($lion) {
            echo '<div id="lion"></div>';
        } else if (!$lion) {
            echo '';
        }

        ?>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>