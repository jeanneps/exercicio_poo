<?php
//1. Criando uma Classe para Gerenciar Contas Bancárias

class ContaBancaria
{
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo = 0)
    {
        $this->titular = $titular;
        $this->saldo = $saldo = 0;
    }
    public function depositar($valor)
    {
        echo $this->saldo += $valor;
    }

    public function sacar($valor)
    {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor; // o saldo atual menos o novo valor
        } else {
            echo "Saldo insuficiente<br><br>";
        }
    }

    public function verificarSaldo()
    {
        return $this->saldo;
    }
}
$conta = new ContaBancaria("fulano", 100);
echo "<pre>";
var_dump($conta);
echo "</pre>";
$conta ->depositar(10);
$conta->sacar(10);
echo 'O saldo da conta é:' .($conta-> verificarSaldo() );



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
$carro = new Carro("Toyota", "Corolla", 2022, "V6");
$moto = new Moto("Honda", "CB500F", 2023, 500);

// Exibindo as informações de cada veículo
echo $carro->informacoes() . "<br>";
echo $moto->informacoes() . "<br>";
?>

<?php
//Questão 4
// Definindo a classe Calculadora com métodos estáticos
class Calculadora {
    // Método estático para somar dois números
    public static function somar($a, $b) {
        return $a + $b;
    }

    // Método estático para subtrair dois números
    public static function subtrair($a, $b) {
        return $a - $b;
    }
}

// Usando os métodos estáticos da classe Calculadora
$num1 = 10;
$num2 = 5;

$soma = Calculadora::somar($num1, $num2);
$subtracao = Calculadora::subtrair($num1, $num2);

// Exibindo os resultados
echo "A soma de {$num1} e {$num2} é: {$soma}<br>";
echo "A subtração de {$num1} e {$num2} é: {$subtracao}<br>";
?>
<?php
//questão 5 
//Crie uma interface chamada TransportInterface com os seguintes métodos:
//andar()
//parar()
//Implemente essa interface em uma classe chamada Carro e em uma classe chamada Bicicleta. 
//Cada implementação deve exibir uma mensagem apropriada para o método correspondente.

namespace questão5

interface transportInterface {
    public function andar ();
    public function parar ();
}
class carro implements transportInterface {

}

class bicicleta implements transportInterface {

}
?>
