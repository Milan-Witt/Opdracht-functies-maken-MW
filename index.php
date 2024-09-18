<?php

function getNumber($prompt) {
    return (float)readline($prompt);
}

function getOperation() {
    $operation = readline("enter operation (+, -, *, /): ");
return $operation;
}

function Calculate($num1, $num2, $operation) {
    switch ($operation) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
             if ($num2 != 0)    {
                return $num1 / $num2;
            } else { 
                return "Fout, getal is niet gedifinieerd";
            }
    }
    return "Error";
}

function runCalculator() {
    while (true) {
        $num1 = getNumber("vul eerste getal in: ");
        $operation = getOperation();
        $num2 = getNumber("vul tweede getal in: ");

        $result = Calculate($num1, $num2, $operation);

        echo "Result: $result\n";
    }
}
?>