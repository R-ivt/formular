<!DOCTYPE html>
<head>
    <title>Ahoj</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bilbo&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Young+Serif&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class=obdelnik>
    <?php
        echo "<h1 class=nadpis>Ahoj, vyplň tento kvíz </h1>";
        $questions = ["Je pravda, že světlo ze Slunce dorazí na Zemi za méně než 10 minut?",
                    " Může člověk přežít bez spánku déle než bez vody?",
                    "Obsahuje lidské tělo více bakteriálních buněk než lidských buněk?",
                    "Je nula sudé číslo?",
                    "Může být blesk teplejší než povrch Slunce?",
                    "Byli dinosauři a lidé někdy současně na Zemi?",
                    "Dokáže chobotnice otevřít zavařovací sklenici?",
                    "Je diamant vyrobený ze stejného prvku jako tuha v tužce?",
                    "Slyší člověk ve vesmíru zvuk bez skafandru?",
                    "Je pravda, že banány jsou mírně radioaktivní?"];

    ?>
    <form action="vysledek.php">
            <?php
            $i=1 ;
            foreach ($questions as $question) {
                echo "<label><h1> $question </h1></label>";
                echo "<input type='text' name='answer$i'>
                        <br>";
                $i++ ;
                    }
        ?>
        <br>
        <br>

        <button class=odeslat>Odeslat</button>

    </form>
</div>

</body>
</html>
