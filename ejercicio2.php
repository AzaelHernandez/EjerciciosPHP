<?php

if ($_POST) {//Si existe un envio
    //recibir informacion del formulario HTML ((Metodo POST))
    $nombre = $_POST['txt_nombre'];
    $correo = $_POST['txt_correo'];
    $edad = $_POST['txt_edad'];

    echo "Nombre: ".$nombre . " Correo: ". $correo . " Edad ". $edad;
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio2.php" method="post">
        <label for="">Nombre</label>
        <input type="text" name="txt_nombre" id="">
        <br>
        <label for="">Correo</label>
        <input type="email" name="txt_correo" id="">
        <br>
        <label for="">Edad</label>
        <input type="number" name="txt_edad" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>