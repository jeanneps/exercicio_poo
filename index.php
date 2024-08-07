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
$conta ->depositar();
$conta->sacar(10);
echo 'O saldo da conta é:' .($conta-> verificarSaldo() );



?>

<?php
// 2.Criando uma Classe para Gerenciar Produtos




?>