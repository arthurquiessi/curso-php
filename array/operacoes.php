<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dados2["endereço"] = "Rua A";

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);
var_dump($dadosCompletos);

echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos) . ' Elementos';

echo '<br>';
$indice = array_rand($dadosCompletos); // Aqui so pega o índice
echo $indice . '<br>';
echo "$indice  = $dadosCompletos[$indice]"; // Depois traz o valor do índice referente
echo '<br>';
echo "{$dadosCompletos['indice']}";
echo "${dadosCompletos['indice']}";

unset($dadosCompletos["nome"]);
echo '<br>';
print_r($dadosCompletos);

unset($dadosCompletos);
echo '<br>';
print_r($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais);
echo '<br>';
print_r($decimais);