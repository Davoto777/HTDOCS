<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$opera = $_POST['opera'];

switch ($opera) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 != 0) {
            $result = $num1 / $num2;
        } else {
            echo "Error: División por cero.";
            exit();
        }
        break;
    default:
        echo "Operación no válida.";
        exit();
    }


echo "El resultado de este calculo es: $num1 $opera $num2 = $result";