
    <?php
        session_start();
        include ("seguridad.php");
        session_unset();
        session_destroy();
        $_SESSION["cod_mesa"] = "";
        header("Location:index.php");
    ?>
