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
    <form action="comprobar_codigo2.php" method="POST" >
            <h2 id="titulo">UNIRSE A PARTIDA!</h2>
                <br>
                <input placeholder="Nombre" type="text" name="nick" class="form-control" style="width:200px" maxlength="18" required>
                <br>
                <br>
                <p>Introducir codigo, preguntar al administrador</p>
                <input placeholder="Codigo sala" type="text" name="codigoPartida" class="form-control" style="width:200px" maxlength="18" required>
                <br>
                <button type="submit" class="btn btn-primary" name="enviarSala">Unirse a la sala</button>
    </form>
    </div>
</div>    
    
    
</body>
</html>