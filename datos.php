<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/datos.css">
</head>
<body>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$number = $_POST['number'];
$tel = $_POST['tel'];
$mensaje = $_POST['mensaje'];
?>

<?php
echo "<p>$nombre</p>";
echo "<p>$email</p>";
echo "<p>$number</p>";
echo "<p>$tel</p>";
echo "<p>$mensaje</p>";
?>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>
<br>
<button><a href="contacto.php">Atras</a> </button>
</body>
</html>
