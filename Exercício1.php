<?php

class Celular{
    // ATRIBUTOS
    public string $marca;
    public string $modelo;
    public string $cor;
    public int $bateria;
    public bool $ligado;
    public int $consumo;
    public int $carga;

    // MÉTODOS
    public function ligar(){
        if($this -> ligado == true){
            echo 'O celular está ligado: Sim!';
        }else{
            echo 'O celular está ligado: Não!';
        }
    }

    public function desligar(){
        while($this -> bateria = 0){
            echo 'O celular está ligado: Não!';
        }
    }

    public function user($consumo){
        while($this -> bateria > 20){
            $this -> bateria -= $consumo;
        }
    }

    public function carregar($carga){
        while($this -> bateria < 100){
            $this -> bateria += $carga;
        }
    }
}

// CRIANDO OBJETO 1
$celular1 = new Celular();

// ADICIONANDO VALORES NO OBJETO 1
$celular1 -> marca = 'Samsung';
$celular1 -> modelo = 'Samsung Galaxy J5 Prime';
$celular1 -> cor = 'Preto';
$celular1 -> bateria = 100;
$celular1 -> ligado = true;
$celular1 -> consumo = 10;
$celular1 -> carga = 1;

// EXIBINDO INFORMAÇÕES SOBRE O OBJETO 1
echo '<p>Marca do celular 1: ' . $celular1 -> marca . '</p>';
echo '<p>Modelo do celular 1: ' . $celular1 -> modelo . '</p>';
echo '<p>Cor do celular 1: ' . $celular1 -> cor . '</p>';
echo '<p>Bateria do celular 1 (%): ' . $celular1 -> bateria . '</p>';

// EXIBIR A SAÍDA DOS MÉTODOS DO OBJETO 1
$celular1 -> ligar();
$celular1 -> desligar();
$celular1 -> user($celular1 -> consumo);
$celular1 -> carregar($celular1 -> carga);

// ---------------------------------------------------------------------
echo '<hr>';

$celular2 = new Celular();

$celular2 -> marca = 'Apple';
$celular2 -> modelo = 'iPhone 12';
$celular2 -> cor = 'Branco';
$celular2 -> bateria = 100;
$celular2 -> ligado = true;
$celular2 -> consumo = 15;
$celular2 -> carga = 2;

echo '<p>Marca do celular 2: ' . $celular2 -> marca . '</p>';
echo '<p>Modelo do celular 2: ' . $celular2 -> modelo . '</p>';
echo '<p>Cor do celular 2: ' . $celular2 -> cor . '</p>';
echo '<p>Bateria do celular 2 (%): ' . $celular2 -> bateria . '</p>';

// EXIBIR A SAÍDA DOS MÉTODOS DO OBJETO 2
$celular2 -> ligar();
$celular2 -> desligar();
$celular2 -> user($celular2 -> consumo);
$celular2 -> carregar($celular2 -> carga);

?>