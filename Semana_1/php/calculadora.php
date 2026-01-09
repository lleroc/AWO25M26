<?php

$resultado = 0;
$error="";

// Procesar el formulario
if (isset($_POST['calcular'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    // Validar números
    if (is_numeric($num1) && is_numeric($num2)) {

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;

            case 'resta':
                $resultado = $num1 - $num2;
                break;

            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;

            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $error = "No se puede dividir entre cero";
                }
                break;
        }

    } else {
        $error = "Ingresa valores numéricos válidos";
    }
}
?>


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora PHP</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="calculadora">
    <h2>Calculadora</h2>

    <form method="post">
        <input type="number" name="num1" step="any" placeholder="Número 1" required>
        <input type="number" name="num2" step="any" placeholder="Número 2" required>

        <select name="operacion">
            <option value="suma">Suma (+)</option>
            <option value="resta">Resta (-)</option>
            <option value="multiplicacion">Multiplicación (×)</option>
            <option value="division">División (÷)</option>
        </select>

        <button type="submit" name="calcular">Calcular</button>
    </form>
    


    <?php if ($resultado !== ""): ?>
        <div class="resultado">
            Resultado: <?php echo $resultado; ?>
        </div>
    <?php endif; ?>

    <?php if ($error !== ""): ?>
        <div class="error">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>