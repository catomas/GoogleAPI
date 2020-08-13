<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>API de Google</title>
</head>
<body>
<header><h1>Tutorial API Google</h1></header>
    <form class="" action="" method="get">
        <label for="direccion"></label>
        <input type="text" name="direccion" value="">
        <button type="submit" name="button">Enviar</button>
    <?php

    if (isset($_GET['direccion']))
    {
    $direccion = $_GET['direccion'];
    
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$direccion ."&key=AIzaSyAOAj_z7Zjrr6dv6RuT54wMbLJxsF6kJK0";
    $json = file_get_contents($url);
    $datos = json_decode($json,true);
    $lat = $datos["results"][0]["geometry"]["location"]["lat"];
    $lng = $datos["results"][0]["geometry"]["location"]["lng"];
    
    echo "<br>";
    echo $direccion;
    echo "<br>";
    echo "La longitud es : " .$lng;
    echo "<br>";
    echo "La latitud es : " .$lat;
    
    }


    ?>
    </form>


</body>
</html>



