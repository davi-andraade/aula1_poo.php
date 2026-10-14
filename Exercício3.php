<?php

class Aula{
    // ATRIBUTOS
    public string $disciplina;
    public string $professor;
    public string $duracao;
    public string $numeroSala;
    public string $bloco;

    // MÉTODOS
    public function exibirInformacoes(){
        echo '<p>Disciplina: ' . $this -> disciplina . '</p>';
        echo '<p>Professor: ' . $this -> professor . '</p>';
        echo '<p>Duração: ' . $this -> duracao . '</p>';
        echo '<p>Número da Sala: ' . $this -> numeroSala . '</p>';
        echo '<p>Bloco: ' . $this -> bloco . '</p>';
    }

    public function trocarProfessor($novoProfessor){
        $this -> professor = $novoProfessor;
        echo '<p>O professor da aula foi trocado para: ' . $this -> professor . '</p>';
    }

    public function alterarLocal($numeroSala, $bloco){
        $this -> numeroSala = $numeroSala;
        $this -> bloco = $bloco;
        echo '<p>O local da aula foi alterado para: Sala ' . $this -> numeroSala . ', Bloco ' . $this -> bloco . '</p>';
    }
}

// CRIANDO OBJETO
$aula1 = new Aula();

// ADICIONANDO VALORES
$aula1 -> disciplina = 'Programação Orientada a Objetos';
$aula1 -> professor = 'Prof. João';
$aula1 -> duracao = '2 horas';
$aula1 -> numeroSala = '101';
$aula1 -> bloco = 'A';

// EXIBINDO INFORMAÇÕES
$aula1 -> exibirInformacoes();
$aula1 -> trocarProfessor('Prof. Maria');
$aula1 -> alterarLocal('202', 'B');

echo '<hr>';

// ----------------------------------------------------------------------------------------------------------------------------------

$aula2 = new Aula();
$aula2 -> disciplina = 'Banco de Dados';
$aula2 -> professor = 'Prof. Pedro';
$aula2 -> duracao = '2 horas';
$aula2 -> numeroSala = '303';
$aula2 -> bloco = 'C';

$aula2 -> exibirInformacoes();
$aula2 -> trocarProfessor('Prof. Ana');
$aula2 -> alterarLocal('404', 'D');

?>