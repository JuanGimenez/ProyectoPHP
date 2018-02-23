<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>Mesa Poker</title>
</head>
<body>
    <div id="contenedor">
        <div id="centrar">
            <?php
                echo "El orden de las manos de mejor a peor es:";
                require('config.php');
                $consulta = "SELECT * FROM manos";
                if($resultado = $mysqli->query($consulta)){
                    while ($fila = $resultado->fetch_assoc()) {
                        $orden = $fila['orden'];
                        $nombreMano = $fila['nombre'];

                        echo  "<br>{$orden}-----{$nombreMano}<br>"; 
                           
                    }
                }else{
                    echo "Erroe al conectar con la base de datos";
                
                }

                echo "<a type='submit' class='btn btn-primary' href='index.php'>Volver</a>";
            ?>
        </div>
    </div>
</body>
</html>