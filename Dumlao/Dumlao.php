<?php
$bio = [
    "John Michael B. Dumlao", //Name
    "October 14, 2006", //Birthday
    "17", //Age
    "Orange", //Favorite Color
    "A silent voice", //Favorite Movie
    "dev_skillset" => [
        "HTML",
        "C++",
        "Java",            //List of languages you're familiar with
        "Basic Python",
        "Oracle",
        "Arduino",
        "Visual Basic",
        "Basic CSS",
        "Filipino",
        "English",
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>~ ༼ つ ◕_◕ ༽つ ~</header>
    <nav>
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../Elgave/gamba.html">Elgave</a>
            </li>
            <li><a href="../Mira/Mira.html">Hillary</a>
            </li>
            <li><a
                    href="../campo.html">Shekinah</a>
            </li>
        </ul>
    </nav>
    <main>
        <h1>About Me</h1>
        <img id="pfp" src="pfp.jpg">

        <section>
            <h2 id="intro">My Name is <?= $bio[0]?></h2>
            <h2>Here is a couple of facts about me:</h2>
            <ul>
                <li>I was born in <?= $bio[1]?>, now at the age of <?= $bio[2]?></li>
                <li>My favorite color is <?= $bio[3]?> because of how versatile it is in coloring and design</li>
                <li>My favorite Movie is <a href="https://www.bing.com/ck/a?!&&p=ab1690772f2208c9JmltdHM9MTcyMjM4NDAwMCZpZ3VpZD0yMGFkNTc3OC02MGIyLTY2MDctMzU2Mi00NGY0NjFhMjY3YjcmaW5zaWQ9NTIwNw&ptn=3&ver=2&hsh=3&fclid=20ad5778-60b2-6607-3562-44f461a267b7&psq=a+silent+voice+mal&u=a1aHR0cHM6Ly9teWFuaW1lbGlzdC5uZXQvYW5pbWUvMjg4NTEva29lX25vX2thdGFjaGk&ntb=1"><?= $bio[4]?></a> as the characters portrayed there shows how human they are as they are not complete evil and good.</li>
            </ul>
            <div class="dev-skillset">
                <h2>I am proficient at the following languages:</h2>
                    <li><?= $bio["dev_skillset"][0]?></li>
                    <li><?= $bio["dev_skillset"][1]?></li>
                    <li><?= $bio["dev_skillset"][2]?></li>
                    <li><?= $bio["dev_skillset"][3]?></li>
                    <li><?= $bio["dev_skillset"][4]?></li>
                    <li><?= $bio["dev_skillset"][5]?></li>
                    <li><?= $bio["dev_skillset"][6]?></li>
                    <li><?= $bio["dev_skillset"][7]?></li>
                    <li><?= $bio["dev_skillset"][8]?></li>
                    <li><?= $bio["dev_skillset"][9]?></li>
                <ul>

                </ul>
            </div>
        </section>

        <img id="pika" src="https://4.bp.blogspot.com/-8TUSCrwfWxc/VgW19qHRTVI/AAAAAAAABVs/eI-WcGSklL8/s1600/tumblr_static_cdri7m2569wgg8ooo8wooc44g.gif">
        <img id="ina1" src="https://walfiegif.wordpress.com/wp-content/uploads/2023/07/out-transparent-15.gif">
        <img id="ina2" src="https://walfiegif.wordpress.com/wp-content/uploads/2023/07/out-transparent-23.gif">
    </main>
</body>

</html>