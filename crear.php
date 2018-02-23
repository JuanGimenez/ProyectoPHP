<?php
if(isset($_POST["enviarSala"])){

    session_start();
    require('config.php');
    
    $fichaInicio = $_POST["fichasInicio"];
    $ciegaGrande = $_POST["ciegaGrande"];
    $tiempo = $_POST["tiempo"];
    $ciegaPeque = $_POST["ciegaPeque"];
    $recompra = $_POST["recompra"];
    $codigoMesa = rand(10000, 99999);
    $nick = $_POST["nick"];
    $numeroJugadores= $_POST["numeroJugadores"];

        
        $_SESSION['codigo_sesion'] = $codigoMesa;
        $_SESSION['fichas_inicio'] = $fichaInicio;
        $_SESSION['ciega_grande'] = $ciegaGrande;
        $_SESSION['tiempo'] = $tiempo;
        $_SESSION['ciega_peque'] = $ciegaPeque;
        $_SESSION['nick'] = $nick;
        $_SESSION['recompra'] = $recompra;

        $_SESSION["ok"] = true;
        $consulta = "INSERT INTO mesa(fichas_ini,ciega_grande,tiempo,ciega_peque,recompra,codigo_mesa,nick,numero_jugadores) VALUES($fichaInicio, $ciegaGrande, $tiempo, $ciegaPeque, $recompra, '$codigoMesa', '$nick', $numeroJugadores)";
        $resultado = $mysqli->query($consulta) || die("Ha ocurrido un error al guardar los datos mesa<br><a href='crear.php'>Volver a configurar partida</a>");

        $consulta2 = "INSERT INTO jugador(nick, fichas, posicion, apuesta, fold, pasar, cod_mesa, ganador, cod_correcto, administrador) VALUES('$nick', $fichaInicio, '0', 0, true, true, '$codigoMesa', true, true, true)";
        $resultado2 = $mysqli->query($consulta2) || die("Ha ocurrido un error al guardar los datos jugador <br><a href='crear.php'>Volver</a>");

        header("Location:sala.php?cod=".$_SESSION['codigo_sesion']."&admin=1");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <title>Document</title>

</head>
<body>

<div id="contenedor">
    <div id="centrar">
        <form action="crear.php" method="POST" >
            <h2 id="titulo">CONFIGURAR PARTIDA</h2>
                <br>
                <input placeholder="Nick" type="text" name="nick" class="form-control" style="width:200px" maxlength="18">
                <br>
                <br>
                <input placeholder="Fichas inicio" type="text" name="fichasInicio" class="form-control" style="width:200px" maxlength="20">
                <br>
                <br>
                    Ciega pequeña <select class="custom-select" name="ciegaPeque" >
                        <option value="15">15</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                <br>
                <br>
                    Ciega Grande <select class="custom-select" name="ciegaGrande" >
                        <option value="30">30</option>
                        <option value="100">100</option>
                        <option value="200">200</option>
                    </select>
                <br>
                <br>
                    Tiempo de aumento de ciegas <select class="custom-select" name="tiempo">
                        <option value="5">5 minutos</option>
                        <option value="10">10 minutos</option>
                        <option value="15">15 minutos</option>
                    </select>
                <br>
                <br>
                    Recompra <select class="custom-select" name="recompra">
                        <option value="true">Si</option>
                        <option value="false">No</option>
                    </select>
                <br>
                <br>
                <input placeholder="Numero jugadores" type="number" value="2" max="9" min="2" name="numeroJugadores" class="form-control" style="width:200px" maxlength="18">
                <br>

                <button type="submit" class="btn btn-primary" name="enviarSala">Crear sala</button>

        </form>
    </div>
</div>    
    
    
</body>
</html>