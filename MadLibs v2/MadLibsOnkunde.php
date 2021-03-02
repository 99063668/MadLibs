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
        <h1> Onkunde </h1>

        <p id="Text">Wat zou je graag willen kunnen? <input type="text" required name="Input1" placeholder="Vul hier uw antwoord in.."></p> 

        <p  id="Text">Met welke persoon kun je goed opschieten? <input type="text" required name="Input2" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat is je favoriete getal? <input type="text" required name="Input3" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat heb je altijd bij je als je op vakantie gaat? <input type="text" required name="Input4" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat is je beste persoonlijke eigenschap? <input type="text" required name="Input5" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat is je slechtste persoonlijke eigenschap? <input type="text" required name="Input6" placeholder="Vul hier uw antwoord in.."></p>

        <p  id="Text">Wat is het ergste dat je kan overkomen? <input type="text" required name="Input7" placeholder="Vul hier uw antwoord in.."></p>

        <input type="submit" name="submit" value="Versturen">
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

