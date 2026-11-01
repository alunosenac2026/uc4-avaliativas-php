
<?php

function somaQuadrados($n) {

    if ($n < 1) {
        return "Número inválido";
    }

    $soma = 0;

    for ($i = 1; $i <= $n; $i++) {

        $quadrado = $i * $i;

        $soma = $soma + $quadrado;
    }

    return $soma;
}

// Testando a função

echo "Soma dos quadrados até 2: " . somaQuadrados(2) . "<br>";
echo "Soma dos quadrados até 3: " . somaQuadrados(3) . "<br>";
echo "Soma dos quadrados até 4: " . somaQuadrados(4) . "<br>";
echo "Soma dos quadrados até 5: " . somaQuadrados(5) . "<br>";

?>
