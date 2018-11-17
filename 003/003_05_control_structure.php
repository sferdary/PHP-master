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
    <meta charset="UTF-8">
    <title>003_05</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="centered_text">
<?php
for ($i = 1; $i <=9 ;$i++){
    if($i == 3){
        $red_border = "class='red_border'";
    }else{
        $red_border = "";
    }
    echo "<img $red_border  src='img/monkeys/aap$i.jpg'>";
}
 ?>
</body>
=======
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
    <meta charset="UTF-8">
    <title>003_05</title>
    <link href="style.css" rel="stylesheet">
</head>
<body class="centered_text">
<?php
for ($i = 1; $i <=9 ;$i++){
    if($i == 3){
        $red_border = "class='red_border'";
    }else{
        $red_border = "";
    }
    echo "<img $red_border  src='img/monkeys/aap$i.jpg'>";
}
 ?>
</body>
</html>