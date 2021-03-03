<?php
$Input1 = $Input2 = $Input3 = $Input4 = $Input5 = $Input6 = $Input7 = "";
$Input1Err = $Input2Err = $Input3Err = $Input4Err = $Input5Err = $Input6Err = $Input7Err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty($_POST["Input1"])){
    $Input1Err = "Vul iets in.";
  }else{
    $Input1 = test_input($_POST["Input1"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input1)){
      $Input1Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input2"])){
    $Input3Err = "Vul iets in.";
  }else{
    $Input2 = test_input($_POST["Input2"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input2)){
      $Input2Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input3"])){
    $Input3Err = "Vul iets in.";
  }else{
    $Input3 = test_input($_POST["Input3"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input3)){
      $Input3Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input4"])){
    $Input4Err = "Vul iets in.";
  }else{
    $Input4 = test_input($_POST["Input4"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input4)){
      $Input4Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input5"])){
    $Input5Err = "Vul iets in.";
  }else{
    $Input5 = test_input($_POST["Input5"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input5)){
      $Input5Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input6"])){
    $Input6Err = "Vul iets in.";
  }else{
    $Input6 = test_input($_POST["Input6"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input6)){
      $Input6Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }

  if(empty($_POST["Input7"])){
    $Input7Err = "Vul iets in.";
  }else{
    $Input7 = test_input($_POST["Input7"]);
    if(!preg_match("/[^a-z0-9 _]+$/i", $Input7)){
      $Input7Err = "Alleen letters en spaties zijn toegestaan.";
    }
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
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
            
        ?>

        <?php }else{ ?>
        <p>Wat zou je graag willen kunnen? <input type="text" required name="Input1" placeholder="Vul hier uw antwoord in.."></p> 
        <!--<span class="error">*<?php echo $Input1Err;?></span>-->

        <p>Met welke persoon kun je goed opschieten? <input type="text" required name="Input2" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat is je favoriete getal? <input type="text" required name="Input3" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" required name="Input4" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat is je beste persoonlijke eigenschap? <input type="text" required name="Input5" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat is je slechtste persoonlijke eigenschap? <input type="text" required name="Input6" placeholder="Vul hier uw antwoord in.."></p>

        <p>Wat is het ergste dat je kan overkomen? <input type="text" required name="Input7" placeholder="Vul hier uw antwoord in.."></p>

        <input type="submit" name="submit" value="Versturen">
    </form>
    <?php } ?>

    <footer>
       <p> Deze website is gemaakt door Dewi van der Velden @2021.</p>
    </footer>
</div>
 </body>
</html>

