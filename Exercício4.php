<?php

class Pedido{
    // ATRIBUTOS
    public string $numeroPedido;
    public string $cliente;
    public float $valor;
    public string $status;

    // MÉTODOS
    public function adicionarItem($item, $quantidade){
        echo '<p>Item adicionado: ' . $item . ' (Quantidade: ' . $quantidade . ')</p>';
    }

    public function cancelar(){
        $this->status = 'Cancelado';
        echo '<p>Pedido cancelado.</p>';
    }

    public function finalizar(){
        $this->status = 'Finalizado';
        echo '<p>Pedido finalizado.</p>';
    }

    public function exibirResumo(){
        echo '<h3>Resumo do Pedido</h3>';
        echo '<p>Número do Pedido: ' . $this->numeroPedido . '</p>';
        echo '<p>Cliente: ' . $this->cliente . '</p>';
        echo '<p>Valor: R$ ' . number_format($this->valor, 2, ',', '.') . '</p>';
        echo '<p>Status: ' . $this->status . '</p>';
    }
}

// CRIANDO OBJETO
$pedido1 = new Pedido();
$pedido1->numeroPedido = '001';
$pedido1->cliente = 'João';
$pedido1->valor = 100.00;
$pedido1->status = 'Pendente';

$pedido1->adicionarItem('Produto 1', 2);
$pedido1->adicionarItem('Produto 2', 1);
$pedido1->finalizar();

$pedido1->exibirResumo();

echo '<br>';
echo '<hr>';
echo '<br>';

// CRIANDO OBJETO 2
$pedido2 = new Pedido();
$pedido2->numeroPedido = '002';
$pedido2->cliente = 'Maria';
$pedido2->valor = 200.00;
$pedido2->status = 'Pendente';

$pedido2->adicionarItem('Produto 3', 1);
$pedido2->adicionarItem('Produto 4', 2);
$pedido2->finalizar();

$pedido2->exibirResumo();

?>