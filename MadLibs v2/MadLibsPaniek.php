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
            <li><a href="MadLibsPaniek.php">Er heerst paniek...</a></li>
            <li><a href="MadLibsOnkunde.php">Onkunde</a></li>
        </ul>
    </nav>

    <form action="" method="POST">
        <h1> Er heerst paniek... </h1>

        <p  id="Text">Welk dier zou je nooit als huisdier willen hebben? <input type="text" required name="Input1" placeholder="Vul hier uw antwoord in.."></p> 

        <p  id="Text">Wie is de belangrijkste persoon in je leven? <input type="text" required name="Input2" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">In welk land zou je graag willen wonen? <input type="text" required name="Input3" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat doe je als je je verveelt? <input type="text" required name="Input4" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Met welk speelgoed speelde je als kunt het meest? <input type="text" required name="Input5" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Bij welke docent spijbel je het liefst? <input type="text" required name="Input6" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Als je €100.000 had wat zou je dan kopen? <input type="text" required name="Input7" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat is je favoriete bezigheid? <input type="text" required name="Input8" placeholder="Vul hier uw antwoord in.."></p>

        <input name="submit" value="Versturen">
    </form>

    <?php
        foreach($Error as $name => $value){
            echo "<li class="test">" . $Error[$name]. "</li>";
        }
    ?>







    <footer>
       <p> Deze website is gemaakt door Dewi van der Velden @2021.</p>
    </footer>
</div>
 </body>
</html>

