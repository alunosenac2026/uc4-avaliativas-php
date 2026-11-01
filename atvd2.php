
<?php

function fibonacci($n) {

    if ($n < 0) {
        return "Número inválido";
    }

    $anterior = 0;
    $atual = 1;

    if ($n == 0) {
        return $anterior;
    }

    if ($n == 1) {
        return $atual;
    }

    for ($i = 2; $i <= $n; $i++) {

        $proximo = $anterior + $atual;

        $anterior = $atual;
        $atual = $proximo;
    }

    return $atual;
}

// Testando a função

echo "Posição 0: " . fibonacci(0) . "<br>";
echo "Posição 1: " . fibonacci(1) . "<br>";
echo "Posição 5: " . fibonacci(5) . "<br>";
echo "Posição 7: " . fibonacci(7) . "<br>";
echo "Posição 9: " . fibonacci(9) . "<br>";

?>
