<?php
    $Input = array();
    $Error = array();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach($_POST as $name=>value){
            if(empty($_POST[$name])){
                $nameErr = $name . "Is verplicht in te vullen!";
                $Error[$name] = $nameErr;
            }
        }else{
            $FormInput = InputTest($_POST[$name]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Alleen letters en spaties zijn toegestaan!";
                $Error[$name] = $nameErr;
              }
            $Input[$name] = $FormInput
        }
    }

    function InputTest($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

?>