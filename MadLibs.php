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
        <h1> Onkunde </h1>

        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $Input1 = $_POST["Input1"];
                $Input2 = $_POST["Input2"];
                $Input3 = $_POST["Input3"];
                $Input4 = $_POST["Input4"];
                $Input5 = $_POST["Input5"];
                $Input6 = $_POST["Input6"];
                $Input7 = $_POST["Input7"];

                echo "Er zijn veel mensen die niet kunnen $Input1. Neem nou $Input2 Zelfs met de hulp van een $Input4 of zelfs
                $Input3 kan $Input2 niet $Input1. Dat heeft niet te maken met een gebrek aan $Input5 maar met een te veel aan $Input6. 
                Te veel $Input6 leidt tot $Input7 en dat is niet goed als je wilt $Input1. Helaas voor $Input2";
            }
        ?>

        <p id="Text">Wat zou je graag willen kunnen? <input type="text" required name="Input1"></p> 

        <p  id="Text">Met welke persoon kun je goed opschieten? <input type="text" required name="Input2"></p>

        <p  id="Text">Wat is je favoriete getal? <input type="text" required name="Input3"></p>

        <p  id="Text">Wat heb je altijd bij je als je op vakantie gaat? <input type="text" required name="Input4"></p>

        <p  id="Text">Wat is je beste persoonlijke eigenschap? <input type="text" required name="Input5"></p>

        <p  id="Text">Wat is je slechtste persoonlijke eigenschap? <input type="text" required name="Input6"></p>

        <p  id="Text">Wat is het ergste dat je kan overkomen? <input type="text" required name="Input7"></p>

        <input id="Submit" type="submit" name="submit" value="Versturen">
    </form>

    <footer>
       <p> Deze website is gemaakt door Dewi van der Velden @2021.</p>
    </footer>
</div>

<script src="MadLibs.js"></script>

 </body>
</html>

