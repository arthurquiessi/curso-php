<div class="titulo">Primeira Classe</div>

<?php
class Cliente {
    // cria o objeto com valor padrão
    public $nome = 'Arthur';
    public $idade = 23;
    
    /* 
    cria um método que se faz algo, porém ele é independente do objeto
    para acessar os membros do objeto, precisa especificar apontando com o this obrigatoriamente
    e o objeto precisa estar instânciado como público, para que seja acessado de fora da classe
    */

    public function apresentar() {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente(); // chama a classe para construir o objeto

$c2 = new Cliente();

$c3 = new Cliente();
$c3->nome = 'Silvio'; // altera o valor padão da instância
$c3->idade = 59;

echo $c1->apresentar(), '<br>'; // chama o método que foi atribuído à classe
echo $c2->apresentar(), '<br>';
echo $c3->apresentar(), '<br>';