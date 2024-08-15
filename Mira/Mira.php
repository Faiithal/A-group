<?php
    $personal = [
        "f_name" => "Hillary Landoy Mira",
        "n_name" => "Hillary/Hillar",
        "fav_color" => "pink"

    ];

    $pets = [
        "dog" => "Nami",
        "cat" => "Misty"
    ];

    $foods = [
        "Adobo",
        "Sinigang",
        "Jabile",
        "Spag/Carbonara"

    ];

    $pro_in = [
        "html",
        "css",
        "c++",
        "oracle"
    ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>groupport</title>
    <link rel="stylesheet" href="file.css">

</head>
<body>

    <p style="text-align: center; color: blue;">╭──────── · · ୨୧ · · ────────╮</p>
    <h2 style="text-align: center; color: blue;">Get to know me!</h2>
    <p style="text-align: center; color: blue;">╰──────── · · ୨୧ · · ────────╯</p>

    <p style="text-align: center; color: blue; font-family: Helvetica ; font-size: 13px">
        "Teal was the color of your shirt when you were <i>sixteen</i> at the yogurt shop" - <i style="font-family: Ariel">Taylor Swift</i>
    </p>


    <p style="text-align: center; color: blue;font-family: Helvetica ; font-size: 15px">
    ദ്ദി(˵ •̀ ᴗ - ˵ ) ✧ Hello! My name is <i><?=$personal ["f_name"]?></i>, you can call me <i><?=$personal ["n_name"]?></i>
    </p>

    <p style= "text-align: center; color: blue; font-family: Helvetica ; font-size: 15px">
    🩰 My favorite color is <i><?=$personal ["fav_color"]?></i>
    </p>

    <p style="text-align: center; color: blue;font-family: Helvetica ; font-size: 15px">
        My favorite movie and song is <a href="https://www.youtube.com/watch?v=BjJcYdEOI0k">The Notebook</a> and <a href="https://youtu.be/MLV2SJKWk4M?si=cpAJkLqqwydNvGLH">illicit affairs</a>
    </p>

    <p style="text-align: center; color: blue; font-family: Helvetica ; font-size: 15px">
    <b>૮⍝• ᴥ •⍝ა I currently own two pets, and they are: ฅ^•ﻌ•^ฅ</b>
        <br> ೀ <?=$pets ["dog"]?>
        <br> ೀ <?=$pets ["cat"]?>
    </p>

    <p style="text-align: center; color: blue; font-family: Helvetica ; font-size: 15px"> 
    <b>🍨 My favorite foods:</b>
        <br>♡ <?=$foods[2]?>
        <br>♡ <?=$foods[1]?>
        <br>♡ <?=$foods[3]?>
        <br>♡ <?=$foods[0]?>
    </p>
    <p id="lang" style="text-align: center; color: blue; font-family: Helvetica ; font-size: 15px">
    <b>💻 I am proficient in some of the language such as:</b>
        <br>모 <?=$pro_in[3]?>
        <br>모 <?=$pro_in[2]?>
        <br>모 <?=$pro_in[0]?>
        <br>모 <?=$pro_in[1]?>
    </p>
    

</body>
</html>