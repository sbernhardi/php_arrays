<?php 
    $frameworks = array("CakePhp", "Symfony", "ZendFramework", "CodeIgniter", "Laravel");

    $books = array("CakePhp" => "\"Webentwicklung mit CakePHP\", Dirk Ammelburger",
    "Symfony" => "\"Mastering Symfony\", Sohail Salehi", 
    "ZendFramework" => "\"Webentwicklung mit Zend Framework 2\", Michael Romer", 
    "CodeIgniter" => "\"CodeIgniter 4 Cookbook\", Vincenza Tralice", 
    "Laravel" => "\"Laravel – Die umfassende Einführung\", Matt Stauffer");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Klausur 2021-03-09</title>
</head>
<body>
<h1>Aufgabe 21</h1>
<ol>
    <?php
        $arrlength = count($frameworks);

        for($x = 0; $x < $arrlength; $x++) {
            echo "<li>" . $frameworks[$x] . "</li>";
        }
    ?> 
</ol>
<hr>
<h1>Aufgabe 25</h1>
<ul>
    <?php
        foreach($books as $x => $x_value) {
            echo "<li><strong>" . $x . "</strong>: " . $x_value . "</li>";
        }
    ?>
</ul>


    
</body>
</html>