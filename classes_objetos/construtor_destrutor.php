<div class="titulo">Construtor e Destrutor</div>

<?php
/* 
    Forma de apresentar o construtor e o destrutor
*/
class Pessoa {
    public $nome;
    public $idade;

    // construindo objeto forçando o usuário passar os atributos
    function __construct($novoNome, $idade = 18) {
        echo 'Construtor Invocado!<br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    // Objeto destruído
    function __destruct() {
        echo "Objeto destruído! {$this->nome}<br><br>";
    }

    public function apresentar() {
        echo "Nome: {$this->nome}, Idade: {$this->idade} anos<br>";
    }
}

/*
    Ao invocar a classe, deve-se passar os parâmetros dos atributos para que o método
    __construct possa ser criado
*/
$pessoaA = new Pessoa('Arthur Quiessi', 23);
$pessoaA->apresentar();
unset($pessoaA); // Forma de chamar o __destruct para encerrar o objeto

$pessoaB = new Pessoa('Silvio Quiessi', 59);
$pessoaB->apresentar();
$pessoaB = null; // outra forma de chamar o método __destruct

$pessoaC = new Pessoa('Cezar Quiessi');
$pessoaC->apresentar();
unset($pessoaC); // Forma de chamar o __destruct para encerrar o objeto
