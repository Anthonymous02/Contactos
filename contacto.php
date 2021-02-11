<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>
    <link rel="stylesheet" href="assets/css/contacto.css">
</head>
<body>
<form action="datos.php" name="formulario" method="post">
    <h2> Contacto</h2>
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" id="email" name="email" placeholder="Correo">
    <input type="number" name="number" placeholder="Cedula">
    <input type="tel" id="tel" name="tel" placeholder="Telefono">

    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Escribir aqui su mensaje"></textarea>

    <input type="submit" value="Enviar" id="boton1">
</form>
<button><a href="index.php">Atras</a> </button>
</body>
</html>
