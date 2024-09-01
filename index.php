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
    <link rel="stylesheet" href="style.css?v=<?= time(); ?>">
</head>

<style>
    .kel {
        background: url("<?= $michael_pic ?>");
        background-size: cover;
    }

    .shu {
        background: url("<?= $joshua_pic ?>");
        background-size: cover;

    }

    .hillar {
        background: url("<?= $hillary_pic ?>");
        background-size: cover;

    }

    .zoe {
        background: url("<?= $zoe_pic ?>");
        background-size: cover;

    }
</style>

<body>
    <header>

    </header>
    <main>
        <section class="title">
            <h1>Group A</h1>
            <p>Get to know our team behind the website</p>
        </section>
        <div class="new">


            <h2>Current Team Members</h2>
            <p class="recent_date">As of 8/19/24</p>

            <ul class="current_members">
                <section>
                <a href="./Dumlao/Dumlao.php"><div class="pfp kel"></div></a>
                    <li>Michael Dumlao</li>
                </section>
                <section>
                <a href="./Verzosa/Verzosa.php"><div class="pfp shu"></div></a>
                    <li>Joshua Verzosa</li>
                </section>
                <section>
                <a href="./Mira/Mira.php"><div class="pfp"></div></a>
                    <li>Gabriel Evangelista</li>
                </section>
                <section>
                <a href="Zoe/portfolio.php"><div class="pfp"></div></a>
                    <li>Chamuel Escobar</li>
                </section>
            </ul>
        </div>

        <div class="old">
            <h2>Former Team Members</h2>
            <ul class="former_members">
                <section>
                    <a href="./Old Members/Elgave/gamba.html">
                        <div class="pfp five"></div>
                    </a>
                    <li>Elgave Gamba</li>
                </section>
                <section>
                    <a href="./Old Members/Mira/index.php">
                        <div class="pfp hillar"></div>
                    </a>
                    <li>Hillary Mira</li>
                </section>
                <section>
                    <a href="./Old Members/Zoe/index.php">
                        <div class="pfp zoe"></div>
                    </a>
                    <li>Zoe Gabriel</li>
                </section>
                <section>
                    <a href="./Old Members/campo.html">
                        <div class="pfp eight"></div>
                    </a>
                    <li>Shekinah Campo</li>
                </section>
            </ul>
        </div>
    </main>
</body>

</html>