<div class="titulo">Desafio Data</div>

<?php

class Data {
    // atributos
    public $dia = 01;
    public $mes = 01;
    public $ano = 1970;
    
    // método
    public function apresentarData() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$dataPadrao = new Data();

$meuNascimento = new Data();
$meuNascimento->dia = 27;
$meuNascimento->mes = 05;
$meuNascimento->ano = 1998;

echo $dataPadrao->apresentarData(), '<br>';
echo $meuNascimento->apresentarData(), '<br>';