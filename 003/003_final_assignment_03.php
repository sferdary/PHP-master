<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 20/11/2018
 */
?>
<html>
<head>
    <title>Final assignment 03</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body class="final_assignment03">
<div>
    <?php
    $agenda =array('');

    print ('The following moments are available <ul>');
    foreach ($agenda as $time => $appointment) {
        if ($appointment == '') {
            echo '<li><b>Time: </b>' . $time . '</li>';
        }
        echo '</ul>';
    }
    ?>
</div>
</body>
</html>
