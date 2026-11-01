
<?php

class Carro {

    // Atributos privados
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual;

    // Construtor
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = 0;
    }

    // Método para acelerar
    public function acelerar($valor) {
        $this->velocidadeAtual += $valor;
    }

    // Método para frear
    public function frear($valor) {
        $this->velocidadeAtual -= $valor;

        if ($this->velocidadeAtual < 0) {
            $this->velocidadeAtual = 0;
        }
    }

    // Método para exibir a velocidade
    public function exibirVelocidade() {
        return $this->velocidadeAtual;
    }
}

// Criando um objeto da classe Carro
$carro = new Carro("Toyota", "Corolla", 2025);

// Exibindo informações iniciais
echo "Marca: Toyota<br>";
echo "Modelo: Corolla<br>";
echo "Ano: 2025<br><br>";

// Acelerando
$carro->acelerar(60);

echo "Após acelerar: " . $carro->exibirVelocidade() . " km/h<br>";

// Freando
$carro->frear(20);

echo "Após frear: " . $carro->exibirVelocidade() . " km/h<br>";

// Testando o limite mínimo
$carro->frear(100);

echo "Após frear novamente: " . $carro->exibirVelocidade() . " km/h<br>";

?>
