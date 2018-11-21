<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 15/11/2018
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Final assignment 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body class="final_assignment">
<header class="title-header">
    <h2 class="title-header">Calculate your bus ticket</h2>
</header>
<div class="main">
    <form class="bus_price" id="bus_price" name="form" action="003_final_assignment_01.php" method="POST">
        <label class="label_header" for="age">Enter your age:</label><br>
        <input class="input_age" type="number" name="age" id="age">
    </form>
    <div class="calculate-reset">
        <button form="bus_price" class="calculate-reset" type="submit" name="calculate" id="calculate" value="1">
            Calculate
        </button>
        <button form="bus_price" class="calculate-reset" type="submit" name="reset" id="reset">Reset</button>
    </div>
    <div class="result">
        <?php

        $age = $_POST['age'];
        $costs = 10;
        if ($age <= 3) {
            $costs = 0;
        } else if ($age <= 12 || $age >= 65) {
            $costs = ($costs / 2);
        } else {
            $costs = 10;
        }

        $check_result = false;
        if ($age != '' && $age >= 0) {
            $check_result = true;
        }

        $calculate = $_POST['calculate'];
        if ($calculate && $check_result == true) {
            echo '<br><b>Age  : </b>' . $age . ' years old';
            echo '<br><b>Price: </b>€' . $costs . ',-<br>';
        } else if ($calculate && $check_result == false) {
            echo '<br>Please insert your age!';
        }

        $reset = $_POST['reset'];
        if ($reset && $check_result == true) {
            echo '';
        } elseif ($reset && $check_result == false) {
            echo '';
        }
        ?>
    </div>
</div>
</body>
</html>