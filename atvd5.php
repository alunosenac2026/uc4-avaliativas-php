
<?php

// Classe base
class Pessoa {

    private $nome;
    private $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Métodos para obter os atributos
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    // Métodos para definir os atributos
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

// Classe Aluno herdando de Pessoa
class Aluno extends Pessoa {

    private $matricula;

    public function __construct($nome, $idade, $matricula) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
}

// Classe Professor herdando de Pessoa
class Professor extends Pessoa {

    private $salario;

    public function __construct($nome, $idade, $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }
}

// Criando um objeto Aluno
$aluno = new Aluno("João", 20, "2026001");

// Criando um objeto Professor
$professor = new Professor("Maria", 35, 4500.00);

// Exibindo os dados do aluno
echo "<h3>Dados do Aluno</h3>";

echo "Nome: " . $aluno->getNome() . "<br>";
echo "Idade: " . $aluno->getIdade() . " anos<br>";
echo "Matrícula: " . $aluno->getMatricula() . "<br>";

// Exibindo os dados do professor
echo "<h3>Dados do Professor</h3>";

echo "Nome: " . $professor->getNome() . "<br>";
echo "Idade: " . $professor->getIdade() . " anos<br>";
echo "Salário: R$ " . number_format($professor->getSalario(), 2, ',', '.') . "<br>";

?>
