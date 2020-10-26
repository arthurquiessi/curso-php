<div class="titulo">Argumentos Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(14, 15) . '<br>';
echo soma(6, 5, 4) . '<br>'; // Convencionalmente, so soma os dois primeiros argumentos e ignora o restante

function somaCompleta(...$numeros) { // argumento variável, traz todos os args em um array para a função
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo '<br>' . somaCompleta(1, 2, 3, 4, 5);

$array = [6, 7 , 8];
echo '<br>' . somaCompleta(...$array); // forma de passar o array para essa função sem transformar ele em outro array

function membros($titular, ...$dependentes) {
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep) {
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
// posicionalmente, o primeiro é o primeiro argumento e o restante são variáveis em dependentes
membros("Arthur Quiessi", "Cezar", "Rosangela", "Silvio");

echo '<br>';
membros("Roberto");

echo '<br>';
membros("Roberto", "Lucas");