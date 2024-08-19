<!DOCTYPE html>
<html lang="en">

<?php
    $michael_pic = "/Pictures/Mikel.jpg";
    $joshua_pic = "/Pictures/Joshua.jpg";
    $hillary_pic = "/Pictures/Hillary.jpg";
    $zoe_pic = "/Pictures/Zoe.jpg";
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css?v=dfdfdf">
</head>

<style>
    .one {
    background: url("<?= $michael_pic?>");
    background-size: cover;
}

.two {
    background: url("<?= $joshua_pic?>");
    background-size: cover;

}

.three {
    background: url("<?= $hillary_pic?>");
    background-size: cover;

}

.four {
    background: url("<?= $zoe_pic?>");
    background-size: cover;

}
</style>

<body>
    <header>
        <h1>Group A</h1>
        <h2>Meet The Members:</h2>
    </header>
    <main>
        <video id="bg" autoplay loop>
            <source src="video.mp4">
        </video>
        <ul>
            <section>
                <div class="pfp one"></div>
                </div>
                <li><a href="./Dumlao/Dumlao.php">Michael Dumlao</a></li>
            </section>
            <section>
                <div class="pfp two">
                </div>
                <li><a href="./Verzosa/Verzosa.php">Joshua Verzosa</a></li>
            </section>
            <section>
                <div class="pfp three">
                </div>
                <li><a href="./Mira/Mira.php">Hillary Mira</a></li>
            </section>
            <section>
                <div class="pfp four">
                </div>
                <li><a href="Zoe/portfolio.php">Zoe Gabriel</a></li>
            </section>
        </ul>
    </main>
</body>

</html>