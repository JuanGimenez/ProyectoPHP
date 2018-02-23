<?php session_start();
// error_reporting(E_ALL);
// ini_set("display_errors", 1);

if(isset($_POST["enviarSala"])){

    require('config.php');

    $codigoPartida = $_POST["codigoPartida"];
    $nickJugador = $_POST["nick"];

    $consulta = "SELECT * FROM mesa where codigo_mesa={$codigoPartida}";
    
    if ($resultado = $mysqli->query($consulta)) {

        $fila=$resultado->fetch_assoc();
        $fichaini = $fila["fichas_ini"];
        echo "{$codigoPartida} -{$nickJugador}- {$fichaini}  ";

        $consulta2 = "INSERT INTO jugador(nick, fichas, posicion, apuesta, fold, pasar, cod_mesa, ganador, cod_correcto, administrador) VALUES('$nickJugador', $fichaini, '0', 0, true, true, '$codigoPartida', true, true, false)";
        $mysqli->query($consulta2) || die("Ha ocurrido un error al guardar los datos <br><a href='unirse.php'>Volver</a>");

        header("Location:sala.php?cod=".$codigoPartida."&admin=0");
        
    } else {
        echo "el codigo no existe";
    }

}else{
    header("Location:unirse.php");
}



?>