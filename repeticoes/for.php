<div class="titulo">Laço For</div>

<?php
// Laço for tem uma variáveis que controla as repetições
for($cont = 0; $cont <= 5; $cont++) {
    echo "$cont <br>";
}

// pega o for inicializado no contador anterior
for(; $cont <= 10; $cont++) {
    echo "$cont <br>";
}

// variável saiu do laço anterior com o 11 e começa no onze aqui
// o contador deve incluir nesse for so que dentro do bloco pra lógica uma hora ser falsa e parar
for(; $cont <= 15; ) {
    echo "$cont <br>";
    $cont++;
}

$array = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

print_r($array);
echo '<br>';
for ($i = 0; $i < count($array); $i++) { 
    echo "{$array[$i]} <br>";
}

echo '<br>';

$matriz = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

for ($i = 0; $i < count($matriz) ; $i++) { 
    for ($j = 0; $j < count($matriz[$i]); $j++) { 
        echo "{$matriz[$i][$j]} ";
    }
    echo "<br>";
}