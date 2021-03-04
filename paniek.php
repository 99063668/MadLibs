<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=paniek" method="POST">
<p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="Input1" placeholder="Vul hier uw antwoord in.."></p> 

<p>Wie is de belangrijkste persoon in je leven? <input type="text" name="Input2" placeholder="Vul hier uw antwoord in.."></p>

<p>In welk land zou je graag willen wonen? <input type="text" name="Input3" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat doe je als je je verveelt? <input type="text" name="Input4" placeholder="Vul hier uw antwoord in.."></p>

<p>Met welk speelgoed speelde je als kunt het meest? <input type="text" name="Input5" placeholder="Vul hier uw antwoord in.."></p>

<p>Bij welke docent spijbel je het liefst? <input type="text" name="Input6" placeholder="Vul hier uw antwoord in.."></p>

<p>Als je €100.000 had wat zou je dan kopen? <input type="text" name="Input7" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat is je favoriete bezigheid? <input type="text" name="Input8" placeholder="Vul hier uw antwoord in.."></p>

<input type="submit" name="submit" value="submit">
</form>

<?php 
    foreach ($errors as $inputs => $error) {
        echo"<li>" . $error . "</li>";
    }
?>