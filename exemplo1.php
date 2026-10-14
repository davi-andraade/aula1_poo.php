<?php

// CRIAÇÃO DE CLASSE NO PHP
class Carro{
    // ATRIBUTOS
    public string $modelo;
    public string $cor;
    public string $marca;
    public float $velocidade;
    public bool $temTetoSolar;

    // MÉTODOS
    public function ligar(){
        echo 'O carro ligou...<br>';
    }

    public function acelerar($velocidadeCarro){
        $this -> velocidade += $velocidadeCarro;
        echo '<br>O carro acelerou...<br>';
        echo 'Velocidade atual do carro: <b>' . $this -> velocidade . 'Km/h</b><br>';
    }

    public function frear($frearCarro){
        $this -> velocidade -= $frearCarro;

        // VERIFICAÇÃO PARA O CARRO NÃO RECEBER UMA VELOCIDADE NEGATIVA
        if ($this -> velocidade < 0){
            $this -> velocidade = 0;
        }

        echo '<br>O carro freou...<br>';
        echo 'Velocidade atual do carro: <b>' . $this -> velocidade . 'Km/h</b><br>';
    }

    public function desligar(){
        while($this -> velocidade > 0){
            $this -> frear(10);
        }

        echo '<br>O carro foi desligado!';
    }
}

// CRIAÇÃO DE OBJETO DA class Carro
$carro1 = new Carro();

// COLOCANDO VALORES NO OBJETO $carro1
$carro1 -> modelo = 'Astra';
$carro1 -> cor = 'Preto';
$carro1 -> marca = 'Chevrolet';
$carro1 -> velocidade = 0;
$carro1 -> temTetoSolar = false;

// PRINTAR O VALOR DO OBJETO $carro1
// var_dump($carro1);

// -------------------------------------------------------------------------------------

// CRIANDO OBJETO $carro2
$carro2 = new Carro();

// COLOCANDO ATRIBUTOS NO OBJETO $carro2
$carro2 -> modelo = 'Chevette';
$carro2 -> cor = 'Roxo';
$carro2 -> marca = 'Chevrolet';
$carro2 -> velocidade = '0';
$carro2 -> temTetoSolar = true;

// PRINTAR O VALOR DO OBJETO $carro2
// var_dump($carro2);

// EXIBINDO INFORMAÇÕES DO OBJETO $carro1
echo '<p>Modelo do carro 1: ' . $carro1 -> modelo . '</p>';
echo '<p>Cor do carro 1: ' . $carro1 -> cor . '</p>';
echo '<p>Marca do carro 1: ' . $carro1 -> marca . '</p>';
echo '<p>Velocidade do carro 1:<b> ' . $carro1 -> velocidade . ' Km/h</b></p>';
// ? = if;   : = else
echo '<p>Tem teto solar?: ' . ($carro1 -> temTetoSolar ? 'Sim' : 'Não') . '</p>';

// EXIBIR A SAÍDA DOS MÉTODOS DO $carro1
$carro1 -> ligar();
$carro1 -> acelerar(50);
$carro1 -> acelerar(100);
$carro1 -> frear(50);
$carro1 -> desligar();

echo '<hr>';

//EXIBINDO INFORMAÇÕES DO OBJETO $carro2
echo '<p>Modelo do carro 2: ' . $carro2 -> modelo . '</p>';
echo '<p>Cor do carro 2: ' . $carro2 -> cor . '</p>';
echo '<p>Marca do carro 2: ' . $carro2 -> marca . '</p>';
echo '<p>Velocidade do carro 2:<b> ' . $carro2 -> velocidade . ' Km/h</b></p>';
// ? = if;   : = else
echo '<p>Tem teto solar?: ' . ($carro2 -> temTetoSolar ? 'Sim' : 'Não') . '</p>';

// EXIBIR A SAÍDA DOS MÉTODOS DO $carro2
$carro2 -> ligar();
$carro2 -> acelerar(80);
$carro2 -> acelerar(80);
$carro2 -> frear(60);
$carro2 -> desligar();

?>