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
<div class="container">
    <div class="form">
        <div class="menu">
        <ul>
            <li><a href="MadLibsMain?MadLibsPaniek">Er heerst paniek...</a></li>
            <li><a href="MadLibsMain?MadLibsOnkunde">Onkunde</a></li>
        </ul>
        </div>

    <?php
    if($_GET[page] == "onkunde"){
        if($_SERVER["REQUEST_METHOD"] == "POST" && [isset($_POST["submit"]) && empty($Error)]){
            include "include_files/ResultaatOnkunde.php";
        }else{
            include "include_files/MadLibsOnkunde.php";
        }

    }else{
        if($_SERVER["REQUEST_METHOD"] == "POST" && [isset($_POST["submit"]) && empty($Error)]){
            include "include_files/ResultaatPaniek.php";
        }else{
            include "include_files/MadLibsPaniek.php";
        }
    ?>
    </div>
</div>

 </body>
</html>
