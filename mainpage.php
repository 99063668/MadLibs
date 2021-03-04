<?php
    include 'include/Validation.php';
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
            <li><a href="mainpage.php?page=paniek">Er heerst paniek...</a></li>
            <li><a href="mainpage.php?page=onkunde">Onkunde</a></li>
        </ul>
    </nav>
    <?php
    if ($_GET["page"] == "onkunde") {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors) && isset($_POST["submit"])) {
            include 'include/resultaat_onkunde.php';
        } else {
            include 'include/onkunde.php';
        }
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors) && isset($_POST["submit"])) {
            include 'include/resultaat_paniek.php';
        } else {
            include 'include/paniek.php';
        }
    }
    
    ?>
    
</div>
 </body>
</html>