<?php
    $persona = [
        "Name" => "Joshua Emmanuel M. Verzosa",
        "Age" => 18,
        "Color" => "Teal",
        "Movie" => "The Tunnel to Summer, the Exit of Goodbyes",
        "PLanguage" => "HTML"
    ];
?>
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="verzosa.css">
    <Head>
        <Title>Verzosa</Title>
        <style>
            body{background: url("verzosa.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
    </Head>
    <Body style = "text-align: center; color: rgb(60, 60, 136);">
        <h1> My Info</h1>
        <h2 >Name: <?= $persona["Name"] ?></h2>
        <h2>Age: 16</h2>
        <h2 style = " color: teal">Favorite Color: <?= $persona["Color"] ?></h2>
        <h2>Proficiency: <?= $persona["PLanguage"] ?></h2>

        <h2>Favorite Movie:</h2>
        <h2><?= $persona["Movie"] ?></h2>
        <img src="https://preview.redd.it/870jqtoki4x81.jpg?width=1080&crop=smart&auto=webp&s=7f30162f93e7751c8705d2d0ad09e670fda12f51" class="t">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/quNGzBv9arI?si=RFOqz6VbeE3M9Qhl" title="YouTube video player">
    </Body>

</html>
