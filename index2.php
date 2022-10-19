<?php

echo "Cambio hecho por Fran";
echo "Cambio hecho por fran en la rama-pollo";
echo "<h1>Tabla de multiplicar</h1>";

for ($i = 0; $i < 10; $i++) {
    echo "7 x " . $i . " = " . 7 * $i;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto flb</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <br />
        <label>Apellido: </label>
        <input type="text" name="apellido">
        <br />
        <input type="submit" value="Crear" class="boton" />
    </form>
</body>

</html>