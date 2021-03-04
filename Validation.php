<?php
$inputs = array();
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  foreach ($_POST as $name => $value) {
    if(empty($_POST[$name])){
      $error = "Je had ergens een leeg veld en dit is niet toegestaan.";
      $errors[$name] = $error;
    }else{
      $Input_form = test_input($value);
      if(!preg_match("/^[a-zA-Z'_]*$/", $Input_form)){
        $error = "Alleen letters en spaties zijn toegestaan.";
        $errors[$name] = $error;
      }

      $inputs[$name] = $Input_form;
    }
  }
}

function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//dewi controle versie
// if(!preg_match("/[^a-z0-9 _]+$/i", $Input_form)){
//   $error = "Alleen letters en spaties zijn toegestaan.";
//   $errors[$name] = $error;
// }