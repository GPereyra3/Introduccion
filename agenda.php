<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    //<ul><li>hola</li><li>como estas</li></ul>
    $agenda = [
        "Dentista a las 12h",
        "Peluquero a las 14h"
    ];
    var_dump ($agenda);
?>
<?php
    echo "<br>";
    $agenda[0]= "Dentista a las 16h";
    var_dump ($agenda);
    ?>
<ul>
<?php
foreach ($agenda as $desordenada){
    echo "<li>$desordenada</li>";
}
?>
</ul>
</body>
</html>