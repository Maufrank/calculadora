<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones con Números</title>
</head>
<body>
    <h1>Formulario para Sumar y Restar Números</h1>
    <form method="post">
        <label for="number1">Número 1:</label>
        <input type="number" id="number1" name="number1" required>
        <br>
        <label for="number2">Número 2:</label>
        <input type="number" id="number2" name="number2" required>
        <br>
        <button type="submit" name="operation" value="sum">Sumar</button>
        <button type="submit" name="operation" value="subtract">Restar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = floatval($_POST["number1"]);
        $number2 = floatval($_POST["number2"]);
        $operation = $_POST["operation"];

        if (is_nan($number1) || is_nan($number2)) {
            echo "<p>Por favor, ingresa dos números válidos.</p>";
        } else {
            if ($operation == "sum") {
                $result = $number1 + $number2;
                echo "<p>La suma de $number1 y $number2 es $result.</p>";
            } elseif ($operation == "subtract") {
                $result = $number1 - $number2;
                echo "<p>La diferencia entre $number1 y $number2 es $result.</p>";
            }
        }
    }
    ?>
</body>
</html>
