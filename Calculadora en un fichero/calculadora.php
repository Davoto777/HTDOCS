<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="Calculadora" />
    <title>Calculadora</title>
  </head>
  <body>
    <form action="" method="POST"> <!-- si se hace dentro del mismo fichero se pone "" donde el action -->
      <label>num 1:</label>
      <input type="number" name="num1" required />

      <label>num 2:</label>
      <input type="number" name="num2" required />

      <label>opera:</label>
      <select name="opera">
        <option value="*">*</option>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
      </select>
      <br /><br />
      <button type="submit">Calcula</button>
    </form>
  </body>
</html>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opera = $_POST['opera'];

$resultado = match($opera) {
    '+' => $num1 + $num2,
    '-' => $num1 - $num2,
    '*' => $num1 * $num2,
    '/' => $num2 != 0 ? $num1 / $num2 : 'Error: No se puede dividir entre cero',
    default => 'Operación inválida',
};

echo "El resultado de la operación es: $resultado";
?>