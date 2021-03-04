<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?page=onkunde" method="POST">
<p>Wat zou je graag willen kunnen? <input type="text" name="Input1" placeholder="Vul hier uw antwoord in.."></p> 

<p>Met welke persoon kun je goed opschieten? <input type="text" name="Input2" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat is je favoriete getal? <input type="text" name="Input3" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="Input4" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat is je beste persoonlijke eigenschap? <input type="text" name="Input5" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="Input6" placeholder="Vul hier uw antwoord in.."></p>

<p>Wat is het ergste dat je kan overkomen? <input type="text" name="Input7" placeholder="Vul hier uw antwoord in.."></p>

<input type="submit" name="submit" value="submit">
</form>

<?php 
    foreach ($errors as $inputs => $error) {
        echo"<li>" . $error . "</li>";
    }
?>