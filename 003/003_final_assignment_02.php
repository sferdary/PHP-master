<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 19/11/2018
 */
?>
<html>
<head>
    <title>Final assignment 02</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">

</head>
<body class="final_assignment02">

<h2>Swim club statistics:</h2>
<table class="club-table">
    <?php
    $swimming_clubs = array("De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje");
    $club_members = array(25, 32, 11, 23);

    for($j = 0; $j < count($club_members); $j++){
        echo '<tr class="club-table"><td class="club-table">'.$swimming_clubs[$j].'</td><td class="club-table">'.$club_members[$j].'</td><td>';
        $amount = floor($club_members[$j]/5);
        for($i = 0; $i < $amount; $i++){
            echo '<img class="swimmer" src="img/swimmer.png">';
        }
        echo'</td></tr>';
    }
    ?>
</table>
</body>
</html>