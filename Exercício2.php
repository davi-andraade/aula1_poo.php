<?php

class ContaBancaria{
    // ATRIBUTOS
    public string $titular;
    public int $numero;
    public float $saldo;
    public string $tipoConta;

    // MÉTODOS
    public function depositar($valor){
        $this -> saldo += $valor;
        echo '<p>Depósito realizado com sucesso! Novo saldo: ' . $this -> saldo . '</p>';
    }

    public function sacar($valor){
        if($valor <= $this -> saldo){
            $this -> saldo -= $valor;
            echo '<p>Saque realizado com sucesso! Novo saldo: ' . $this -> saldo . '</p>';
        }else{
            echo '<p>Saldo insuficiente para realizar o saque!</p>';
        }
    }

    public function consultarSaldo(){
        echo '<p>Saldo atual: ' . $this -> saldo . '</p>';
    }
}

// CRIANDO OBJETO
$ContaBancaria1 = new ContaBancaria();

// ADICIONANDO VALORES
$ContaBancaria1 -> titular = 'João';
$ContaBancaria1 -> numero = 12345;
$ContaBancaria1 -> saldo = 100;
$ContaBancaria1 -> tipoConta = 'Corrente';

// EXIBINDO INFORMAÇÕES
echo '<p>Nome do titular da conta: ' . $ContaBancaria1 -> titular . '</p>';
echo '<p>Número da conta: ' . $ContaBancaria1 -> numero . '</p>';
echo '<p>Saldo da conta: ' . $ContaBancaria1 -> saldo . '</p>';
echo '<p>Tipo de conta: ' . $ContaBancaria1 -> tipoConta . '</p>';

// EXIBINDO A SAÍDA DOS MÉTODOS
$ContaBancaria1 -> depositar(50);
$ContaBancaria1 -> sacar(30);
$ContaBancaria1 -> consultarSaldo();

echo '<hr>';

// -------------------------------------------------------------------------------------

$ContaBancaria2 = new ContaBancaria();

// ADICIONANDO VALORES
$ContaBancaria2 -> titular = 'Maria';
$ContaBancaria2 -> numero = 54321;
$ContaBancaria2 -> saldo = 200;
$ContaBancaria2 -> tipoConta = 'Corrente';

// EXIBINDO INFORMAÇÕES
echo '<p>Nome do titular da conta: ' . $ContaBancaria2 -> titular . '</p>';
echo '<p>Número da conta: ' . $ContaBancaria2 -> numero . '</p>';
echo '<p>Saldo da conta: ' . $ContaBancaria2 -> saldo . '</p>';
echo '<p>Tipo de conta: ' . $ContaBancaria2 -> tipoConta . '</p>';

// EXIBINDO A SAÍDA DOS MÉTODOS
$ContaBancaria2 -> depositar(50);
$ContaBancaria2 -> sacar(30);
$ContaBancaria2 -> consultarSaldo();

?>