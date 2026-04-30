<!DOCTYPE html>
<head>
    <title>Ahoj</title>
</head>
<body>


<?php
$body = 0 ;
echo "<h1>Ahoj, vyplň tento kvíz </h1>";
?>

<form>
    <label>Jméno:</label>
    <input type="text" name="jmeno">

    <br>

    <label> Štěká pes ? :</label>
    <input type="text" name="answer1">

    <br>
    
    <label> Žije kočka ve vodě ? :</label>
    <input type="text" name="answer2">

    <br>

    <label> Je králík masožravec? :</label>
    <input type="text" name="answer3">

    <br>

    <button>Odeslat</button>
</form>

<?php 
if (isset($_GET["answer1"]) and (strtoupper($_GET["answer1"]) == "ANO")) {
    $body++ ;
}
 
if (isset($_GET["answer2"]) and (strtoupper($_GET["answer2"])  == "NE")) {
    $body++ ;
}

if (isset($_GET["answer3"]) and (strtoupper($_GET["answer3"]) == "NE")) {
    $body++ ;
}

if (isset($_GET["jmeno"]))
    {echo "<h1> ". $_GET["jmeno"] ." měl si $body  bodů. </h1> ";
    if ($body == 0)
        {echo "<h2>Takhle hrozný výsledek jsem ještě neviděl.</h2>" ;
        echo "<img src='NEJHORSI.jpg'>";}
    elseif ($body == 1)
        {echo "<h2>Hmmm tak tohle jse asi radši neviděla.</h2>" ;
        echo "<img src='HMMMM.jpg'>";}
    elseif ($body == 2)
        {echo "<h2>Chybí ti jeden bod!!!</h2>" ;
        echo "<img src='CHYBA.jpg'>";}
    elseif ($body == 3)
        {echo "<h2>Super!</h2>" ;
        echo "<img src='sUPER.jpg'>";}
}  

?>


</body>
</html>
