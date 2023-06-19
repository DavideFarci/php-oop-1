<?php

include __DIR__ . '/classes/movie.php';

$theDiparted = new Movie("The Diparted", "Martin Scorsese", "2006", "thriller", "151 min");
$soldatoRyan = new Movie("Salvate il soldato Ryan", "Steven Spielberg", "1998", "war", "169 min");

// $theDiparted->getMovieData();
// $soldatoRyan->getMovieData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <ul>
        <li>
            <h1>MOVIES</h1>
        </li>
        <li>
            <?php echo $theDiparted->getMovieData() ?>
        </li>
        <li>
            <?php echo $soldatoRyan->getMovieData() ?>
        </li>
    </ul>
</body>

</html>