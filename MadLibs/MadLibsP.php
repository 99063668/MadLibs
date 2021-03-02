<!DOCTYPE html>
<html lang="nl">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   <title>Mad Libs</title>
   <link rel="stylesheet" type="text/css" href="MadLibs.css">
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
</head>
<body>
<h1 class="text">Mad Libs</h1>
<div class="container">
    <nav>
        <ul>
            <li><a href="MadLibsP.php">Er heerst paniek...</a></li>
            <li><a href="MadLibs.php">Onkunde</a></li>
        </ul>
    </nav>

    <form action="" method="POST">
        <h1> Er heerst paniek... </h1>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Input1 = $_POST["Input1"];
                $Input2 = $_POST["Input2"];
                $Input3 = $_POST["Input3"];
                $Input4 = $_POST["Input4"];
                $Input5 = $_POST["Input5"];
                $Input6 = $_POST["Input6"];
                $Input7 = $_POST["Input7"];
                $Input8 = $_POST["Input8"];

                echo "Er heerst paniek in het koningkrijk $Input3 Koning $Input2 is ten einde raad en als koning $Input2 ten einde raad is, dan roept hij zijn ten-einde-raadsheer $Input6";
                echo "<br>";
                echo "<br> $Input6! Het is een ramp! Het is een schande!";
                echo "<br>";
                echo "<br> Sire, Majesteit, Uwe luidruchtigheid, wat is er aan de hand?";
                echo "<br>";
                echo "<br> Mijn $Input1 is verdwenen! Zo maar, zonder waarschuwing. En ik had net $Input5 voor hem gekocht!";
                echo "<br>";
                echo "<br> Majesteit, uw $Input1 komt vast vanzelf weer terug?";
                echo "<br>";
                echo "<br> Ja, da's leuk en aardig, maar hoe moet in in de tussentijd $Input8 leren?";
                echo "<br>";
                echo "<br> Maar Sire, daar kunt u toch uw $Input7 voor gebruiken.";
                echo "<br>";
                echo "<br> $Input2, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.";
                echo "<br>";
                echo "<br> $Input4, Sire.";
            
        ?>

        <?php }else{ ?>
        <p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" required name="Input1" placeholder="Vul hier uw antwoord in.."></p> 

        <p>Wie is de belangrijkste persoon in je leven? <input type="text" required name="Input2" placeholder="Vul hier uw antwoord in.."></p>

        <p>In welk land zou je graag willen wonen? <input type="text" required name="Input3" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat doe je als je je verveelt? <input type="text" required name="Input4" placeholder="Vul hier uw antwoord in.."></p>

        <p>Met welk speelgoed speelde je als kunt het meest? <input type="text" required name="Input5" placeholder="Vul hier uw antwoord in.."></p>

        <p>Bij welke docent spijbel je het liefst? <input type="text" required name="Input6" placeholder="Vul hier uw antwoord in.."></p>

        <p>Als je €100.000 had wat zou je dan kopen? <input type="text" required name="Input7" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat is je favoriete bezigheid? <input type="text" required name="Input8" placeholder="Vul hier uw antwoord in.."></p>

        <input type="submit" name="submit" value="Versturen">
    </form>
    <?php } ?>

    <footer>
       <p> Deze website is gemaakt door Dewi van der Velden @2021.</p>
    </footer>
</div>
 </body>
</html>

