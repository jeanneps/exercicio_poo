<?php
//1. Criando uma Classe para Gerenciar Contas Bancárias

<?php

    class ContaBancaria
    {
        private $nome_titular;
        private $saldo;

        public function __construct($nome, $saldo = 0)
        {
            $this->nome_titular = $nome;
            $this->saldo = $saldo;
        }

        public function depositar($valor)
        {
            $this->saldo += $valor;
        }

        public function sacar($valor)
        {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
            } else {
                echo "$this->nome_titular seu saldo é insuficiente<br>";
            }
        }

        public function verificarSaldo()
        {
            echo "$this->nome_titular, sua conta tem: R$ " . $this->saldo . "<br>";
        }
    }

    $conta1 = new ContaBancaria('Fulano');
    $conta2 = new ContaBancaria('Maria', 500);

    $conta1->verificarSaldo();
    $conta2->verificarSaldo();
    echo "<br>";
    $conta1->depositar(100);
    $conta2->depositar(50);
    echo "<br>";
    $conta1->verificarSaldo();
    $conta2->verificarSaldo();
    echo "<br>";
    $conta1->sacar(5000);
    $conta2->sacar(10);
    echo "<br>";
    $conta1->verificarSaldo();
    $conta2->verificarSaldo();

    



?>


<?php
//Questão 2
// Definindo a classe Produto com atributos públicos
class Produto {
    // Atributos públicos da classe
    public $nome;
    public $preco;
    public $descricao;

    // Construtor da classe para inicializar os atributos
    public function __construct($nome, $preco, $descricao) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }

    // Método para exibir informações do produto
    public function exibirInformacoes() {
        return "O Produto {$this->nome}, custa R$ {$this->preco}: Descrição {$this->descricao}";
    }
}

// Criando três instâncias da classe Produto
$produto1 = new Produto("Cadeira", 150.00, "Cadeira de escritório ergonômica.");
$produto2 = new Produto("Mesa", 300.00, "Mesa de madeira com acabamento em verniz.");
$produto3 = new Produto("Luminária", 75.00, "Luminária de LED com ajuste de intensidade.");

// Exibindo informações de cada produto
echo $produto1->exibirInformacoes() . "<br>";
echo $produto2->exibirInformacoes() . "<br>";
echo $produto3->exibirInformacoes() . "<br>";

// Acessando e modificando os atributos diretamente
$produto1->preco = 160.00;
echo "Novo preço da Cadeira: R$ " . $produto1->preco . "<br>";
echo "<br>";
?>

<?php
//Questão 3
// Definindo a classe base Veiculo
class Veiculo {
    // Atributos públicos da classe Veiculo
    public $marca;
    public $modelo;
    public $ano;

    // Construtor da classe Veiculo
    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    // Método para exibir informações do veículo
    public function informacoes() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Ano: {$this->ano}";
    }
}

// Definindo a classe derivada Carro
class Carro extends Veiculo {
    // Atributo específico da classe Carro
    public $tipoMotor;

    // Construtor da classe Carro
    public function __construct($marca, $modelo, $ano, $tipoMotor) {
        // Chamando o construtor da classe base
        parent::__construct($marca, $modelo, $ano);
        $this->tipoMotor = $tipoMotor;
    }

    // Sobrescrevendo o método informacoes
    public function informacoes() {
        return parent::informacoes() . ", Tipo de Motor: {$this->tipoMotor}";
    }
}

// Definindo a classe derivada Moto
class Moto extends Veiculo {
    // Atributo específico da classe Moto
    public $cilindradas;

    // Construtor da classe Moto
    public function __construct($marca, $modelo, $ano, $cilindradas) {
        // Chamando o construtor da classe base
        parent::__construct($marca, $modelo, $ano);
        $this->cilindradas = $cilindradas;
    }

    // Sobrescrevendo o método informacoes
    public function informacoes() {
        return parent::informacoes() . ", Cilindradas: {$this->cilindradas}";
    }
}

// Criando instâncias das classes Carro e Moto
echo "<br>";
$carro = new Carro("Toyota", "Corolla", 2022, "V6");
echo "<br>";
$moto = new Moto("Honda", "CB500F", 2023, 500);
echo "<br>";

// Exibindo as informações de cada veículo
echo $carro->informacoes() . "<br>";
echo $moto->informacoes() . "<br>";
echo "<br>";
?>

<?php
//Questão 4
// Definindo a classe Calculadora com métodos estáticos
class Calculadora {
    // Método estático para somar dois números
    public static function somar($a, $b) {
        return $a + $b. "<br>";
    }

    // Método estático para subtrair dois números
    public static function subtrair($a, $b) {
        return $a - $b. "<br>";
    }
}

// Usando os métodos estáticos da classe Calculadora
$num1 = 10;
$num2 = 5;
echo "<br>";
$soma = Calculadora::somar($num1, $num2);
$subtracao = Calculadora::subtrair($num1, $num2);
echo "<br>";
// Exibindo os resultados
echo "A soma de {$num1} e {$num2} é: {$soma}<br>";
echo "<br>";
echo "A subtração de {$num1} e {$num2} é: {$subtracao}<br>";
echo "<br>";
?>

<?php
namespace questão5;
//questao 5

   interface TransportInterface {
    public function andar();
    public function parar();
   }

   class Carro implements TransportInterface {
    public function andar()
    {
        echo "Acelerando Vrum Vrum<br>";
    }

    public function parar(){
        echo "Freada<br>";
    }
   }

   class Bicicleta implements TransportInterface {
    public function andar()
    {
        echo "Pedalando<br>";
    }

    public function parar(){
        echo "Cavalo de Pau<br>";
    }
   }

   $carro = new Carro();
   $carro->andar();
   $carro->parar();
   echo "<hr>";
   $bici = new Bicicleta();
   $bici->andar();
   $bici->parar();

   ?>