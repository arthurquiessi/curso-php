<div class="titulo">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

for ($i=0; $i < count($array); $i++) { 
    if ($i % 2 === 0) {
        echo "{$array[$i]} <br>";
    }
}

echo "<br><hr>";

foreach ($array as $chave => $valor) {
    if ($chave % 2 === 0) {
        echo "$valor <br>";
    }
}