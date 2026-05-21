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
    <div class=obdelnik>
        <?php
            $body = 0 ;
            $answers = ["ANO",
                        "NE",
                        "ANO",
                        "ANO",
                        "ANO",
                        "NE",
                        "ANO",
                        "ANO",
                        "NE",
                        "ANO"];

                        $i=1 ;
                foreach ($answers as $answer) {
                    if (isset($_GET["answer$i"]) and (strtoupper($_GET["answer$i"])== $answer)) {
                        $body++;
                        $i++;}}

            if($body>=9)
                {echo "<h1>Jsi génius, máš $body bodů z 10.</h1>";
                    echo"<br>"; 
                    echo "<img class=obr src='sUPER.jpg'>";}
            elseif ($body>=5)
                {echo "<h1>Mohlo by to být lepší, máš $body bodů z 10.</h1>" ;
                    echo"<br>"; 
                    echo "<img class=obr src='CHYBA.jpg'>";}
            elseif ($body>=2)
                {echo "<h1>Jsi hloupej, máš $body bodů z 10.</h1>" ;
                    echo"<br>"; 
                    echo "<img class=obr src='HMMMM.png'>";}
            else 
                {echo "<h1>Jsi zakřiknutej blbec, máš $body bodů z 10.</h1>";
                echo"<br>"; 
                echo "<img class=obr src='NEJHORSI.jpg'>";
                }
        ?>
    </div>
</div>
</body>
</html>