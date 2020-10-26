<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagem() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
}

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;

function trocaValor() {
    $variavel = 2; // Essa variável é diferente da que está fora da função, é definida somente para dentro da função
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValor();
echo "Depois: $variavel <br>";

function trocaValorDeVerdade() {
    global $variavel; // global = está disponível no script como um todo, mas aponta essa para dentro da function
    $variavel = 3;
    echo "Durante a função: $variavel <br>";
}

echo "Antes: $variavel <br>";
trocaValorDeVerdade();
echo "Depois: $variavel <br>";

var_dump(trocaValorDeVerdade());