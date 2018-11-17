<?php

//INITIALIZED VARIABLES
$var_a = '\'This is $var_a\' ';
$var_b = ' \'This is $var_b\'';
$var_c = $var_a . $var_b;

//PRINTED VARIABLES
echo '<b>Structure of 3 variables:</b><br>';
echo '$var_c = $var_a . $var_b;<br>';
echo 'Result: <br>';
echo '$var_c = ';
echo $var_c . '<br>';


//INITIALIZED ARRAYS
$array_a = array('zero', 'one', 'two');
$array_b = array();
$array_b['number'] = 1;
$array_b['letter'] = 'A';

//PRINTED ARRAYS
echo '<br><b>Structure of an array:</b><br>';
echo '$array_a = array(zero, one, two);<br>';
echo '$array_a[0] = ';
echo $array_a[0] . '<br>';
echo '$array_a[1] = ';
echo $array_a[1] . '<br>';
echo '$array_a[2] = ';
echo $array_a[2] . '<br><br>';

echo '$array_b = ();<br>';
echo '$array_b["number"] = 1;<br>';
echo '$array_b["letter"] = "A";<br>';
echo '$array_b["number"] = ';
echo $array_b['number'] . '<br>';
echo 'array_b["letter"] = ';
echo $array_b['letter'] . '<br>';


//INITIALIZED ARRAYS - FOREACH STATEMENT
$array_info['name'] = 'John Johnson';
$array_info['age'] = 44;
$array_info['phone'] = '06-12345678';

//PRINTED ARRAYS - FOREACH STATEMENT
echo '<br><b>Foreach statement with arrays:</b><br>';
foreach ($array_info as $label => $value) {
    echo 'The ' . $label . ' is: ' . $value . '<br>';
}


//INITIALIZED VARIABLES - IF-STATEMENTS
$var_value_a = 10;
$var_value_b = 2;

//PRINTED VARIABLES - IF-STATEMENTS
echo '<br><b>If-statements with variables:</b><br>';
if ($var_value_a < $var_value_b) {
    echo 'var_a is smaller then var_b. <br>';
} else {
    echo 'var_a is larger then var_b. <br>';
}


//INITIALIZED VARIABLES - CONTROL STRUCTURE
$var_hour = date("H");
$var_minute = date("i");
$var_seconds = date("s");

//PRINTED VARIABLES - CONTROL STRUCTURE
echo '<br><b>Control structure with time:</b><br>';
if ($var_hour < 6) {
    echo 'It is night. <br>';
} else if ($var_hour < 12) {
    echo 'It is morning. <br>';
} else if ($var_hour < 18) {
    echo 'It is afternoon. <br>';
} else if ($var_hour < 24) {
    echo 'It is evening. <br>';
}
echo 'Exact time: ' . $var_hour . ':' . $var_minute . '.' . $var_seconds . '<br>';


//INITIALIZED VARIABLES - LOOP STRUCTURE
$var_age = 6;
$var_candles = 0;

//PRINTED VARIABLES - LOOP STRUCTURE
echo '<br><b>Loop structure with variables:</b><br>';
while ($var_candles < $var_age) {
    echo ' |*| '; //This is an emoticon candle.
    $var_candles++;
}
echo ' // Made with an while statement <br>';

for ($var_candles = 0; $var_candles < $var_age; $var_candles++) {
    echo ' |*| '; //This is an emoticon candle.
}
echo ' // Made with an for statement <br>';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cheat sheet</title>
    <link href="003/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <p>Test written in html</p>
    <p><?php echo 'Test written in php'; ?></p>
</div>
</body>
</html>
