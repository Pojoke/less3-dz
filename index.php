<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Прогноз погоди </h1>

<?php
$x = rand(min: -2, max: 10);
$moroz = rand(min: '-20  ', max: '-1 ');
$ne_moroz = rand(min: 0, max: '+10 ');
$teplo = rand(min: '+16  ', max: '+40  ');
if ($x < 0) {
    echo "<button><p>Мороз  $moroz </p> </button>";
} elseif ($x == 0) {
    echo "<button><p>Не мороз +$ne_moroz</p></button>";
} else {echo "<button><p>Тепло +$teplo</p></button>";}
?>


</body>
</html>






<!-- // echo __FILE__;
// echo PHP_VERSION; -->
