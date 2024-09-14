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
if ($x < 0) {
    echo "<button><p>Мороз</p></button>";
} elseif ($x == 0) {
    echo "<button><p>Не мороз</p></button>";
} else {echo "<button><p>Тепло</p></button>";}
?>


</body>
</html>






<!-- // echo __FILE__;
// echo PHP_VERSION; -->
