
<!DOCTYPE html>
<html lang="en">
<head>
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
        session_start();

            require('config.php');
            $consulta2 = "SELECT * FROM jugador where cod_mesa=".$_GET['cod'];
            if($resultado2 = $mysqli->query($consulta2)){
                while ($fila2 = $resultado2->fetch_assoc()) {
                    
                    $id = $fila2["id_jugador"];
                    $nick = $fila2["nick"];
                    $fichas = $fila2["fichas"];
                    $posicion = $fila2["posicion"];
                    $apuesta = $fila2["apuesta"];
                    $fold = $fila2["fold"];
                    $pasar = $fila2["pasar"];
                    $cod = $fila2["cod_mesa"];
                    $ganador = $fila2["ganador"];
                    $admin = $fila2["administrador"];
                    $info = "Bienvenido! El codigo de la sala es {$_GET['cod']}<br><br><hr><hr>";
                    if($_GET['admin'] == 1) {
        
                        $out = "<hr style='size=3px;'><h4 style='color:red'>{$nick}<h4><br>Fichas: {$fichas}<br>Posicion: {$posicion}<br> Admin: {$admin}<br>
                        <a href='eliminar.php?id={$id}&cod={$cod}' class='btn btn-primary'>Eliminar</a><hr><hr>";
                    } else {
                        $out = "<h4 style='color:red'>{$nick}</h4><br>Fichas: {$fichas}<br><hr>";
                    }
                ?>
                <div class="panel panel-primary">
                    <div >
                        <?php
                            
                            if(isset($out)){
                                echo "<h2>BIENVENIDOS A LA MESA DE POKER</h2>";
                                echo "{$out}";
                            }
                        ?>
                    </div>
                </div>
                <?php
                    
                }
                
            }
    ?>
        <div id="info">
            <?php
                if(isset($info)){
                    echo "{$info}";
                }
            ?>

        </div>
    </div>
</div>
</body>
</html>


