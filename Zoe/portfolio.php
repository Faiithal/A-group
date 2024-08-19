<?php

$name = "Zoe Darlene R. Gabriel";
$age = 17;
$birthdate = "September 30, 2006";
$zodiac = "Libra";
$gender = "Non-Binary";
$gender_image = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Nonbinary_flag.svg/1200px-Nonbinary_flag.svg.png";
$pronouns = "They/He";
$profile_image = "c:\Users\markg\Documents\zoe\pictures\webcam-toy-photo28.jpg";
$favourite_color = "Lavender";
$favourite_movie = "Carol";
$favourite_movie_image = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.imdb.com%2Ftitle%2Ftt2402927%2F&psig=AOvVaw1wFOZxD8wR3vj4YedOrdSi&ust=1722516704066000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNjFufOo0YcDFQAAAAAdAAAAABAJ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="portfoliostyle.css">
    <title> updated info </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body>
<h1> <?= $name?></h>
<h1> <?= $profile_image?></h1>
<h2> <?= $age ?></h2>
<h2> <?= $birthdate?></h2>
<h3> <?= $zodiac?></h3>
<h4> <?= $gender?></h4>
<h4> <?= $gender_image?></h4>
<h4> <?= $pronouns?></h4>
<h5> <?= $favourite_color?></h5>
<h5> <?= $favourite_movie?></h5>
<h5> <?= $favourite_movie_image?></h5>

</body>   
</html>

