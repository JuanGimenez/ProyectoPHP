<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css"  media="all">
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyAnmJX0zoMrHPWWVbXZKjLfLXV7kwO5CPk&sensor=false&language=es&region=ES"></script>
    <script type="text/javascript" src="js/mapa.js"></script>
    <title>Mesa Poker</title>
</head>
<body>
    <div id="contenedor">
        <div id="centrar">
            <h1 id="titulo">Bienvenidos a la aplicacion!</h1>
            <br>
            <a href="crear.php"><button name="Crear" class="btn btn-primary">Crear Partida</button></a></br>
            <br>
            <a href="unirse.php"><button  name="Crear" class="btn btn-primary" href="unirse">Unierse a Partida</button></a></br>
            <div id="map"></div>
            <br>
            <a href="reglas.php"  name="Crear" class="btn btn-primary">Orden Manos</a>
        </div>
    </div>
      
</body>
</html>
<!--api key AIzaSyAnmJX0zoMrHPWWVbXZKjLfLXV7kwO5CPk-->