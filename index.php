<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2 PHP</title>
</head>
<body>
<h2>Conversor de Decimal a Binario, Octal y Hexadecimal</h2>
    <form method="post" action="">
        <label for="numero">Ingrese un número decimal:</label>
        <input type="text" id="numero" name="numero">
        <br><br>
        <label for="opcion">Seleccione la base a la que desea convertir:</label>
        <select id="opcion" name="opcion">
            <option value="binario">Binario</option>
            <option value="octal">Octal</option>
            <option value="hexadecimal">Hexadecimal</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $opcion = $_POST["opcion"];

    switch ($opcion) {
        case "binario":
            $resultado = decbin($numero);
            echo "<p>El número decimal $numero en binario es: $resultado</p>";
            break;
        case "octal":
            $resultado = decoct($numero);
            echo "<p>El número decimal $numero en octal es: $resultado</p>";
            break;
        case "hexadecimal":
            $resultado = dechex($numero);
            echo "<p>El número decimal $numero en hexadecimal es: $resultado</p>";
            break;
        default:
            echo "<p>Seleccione una opción válida.</p>";
    }
}
?>
