<div class="titulo">Operador Ternário</div>

<?php

// Operação convencional
$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status<br>";

// Operação ternária

$idade = 17;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade'; // lógica ? se for verdadeiro faz algo : se for falso faz outra;
echo "$status<br>";

$idade = 35;
$status = $idade >= 18 ? $idade >= 65 ? 'Aposentado' : 'Maior de idade' : 'Menor de idade';
echo "$status<br>";

