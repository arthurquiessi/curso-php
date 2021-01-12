<div class="titulo">Herança</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa criada! <br>';
    }

    function __destruct() {
        echo 'Pessoa diz: Tchau!!! <br>';
    }

    public function apresentar() {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "Usuário criado! <br>";
    }

    function __destruct() {
        echo "Usuário diz: Tchau!!! <br>";
    }

    public function apresentar() {
        echo "@{$this->login}: ";
        parent::apresentar();
    }
}

$pessoaA = new Usuario('Arthur Quiessi', 22, 'ttuco_');
$pessoaA->apresentar();
unset($pessoaA);