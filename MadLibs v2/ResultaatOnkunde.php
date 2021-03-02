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