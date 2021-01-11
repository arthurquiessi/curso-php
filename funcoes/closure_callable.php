<div class="titulo">Closure e Callable</div>

<?php

//callable = algo que pode ser chamado
//closure = callable
//todo closure é um processo de uma função anonima em que é colocado dentro de uma classe

$soma1 = function ($a , $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', soma2);

function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar2(2, 3, '+', $soma1);
executar2(2, 3, '+', soma2); // não executa pelo fato de a função soma2 não ser closure