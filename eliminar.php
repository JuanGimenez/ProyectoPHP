
<?php
    session_destroy();
    require('config.php');
    $consulta = "DELETE FROM jugador WHERE id_jugador =". $_GET['id'];
    $resultado = $mysqli->query($consulta);
    $codigoPartida = $_GET['cod'];
    
    header("Location:sala.php?cod=".$codigoPartida."&admin=1");
?>
