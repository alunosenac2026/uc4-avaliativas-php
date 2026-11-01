
<?php

function categorizarIdade($idade) {

    if ($idade >= 0 && $idade <= 11) {
        return "criança";

    } elseif ($idade >= 12 && $idade <= 17) {
        return "adolescente";

    } elseif ($idade >= 18 && $idade <= 59) {
        return "adulto";

    } elseif ($idade >= 60) {
        return "idoso";

    } else {
        return "idade inválida";
    }
}

// Testando a função com várias idades

echo "Idade 8: " . categorizarIdade(8) . "<br>";
echo "Idade 15: " . categorizarIdade(15) . "<br>";
echo "Idade 25: " . categorizarIdade(25) . "<br>";
echo "Idade 65: " . categorizarIdade(65) . "<br>";
echo "Idade -5: " . categorizarIdade(-5) . "<br>";

?>
