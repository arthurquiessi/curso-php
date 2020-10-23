<div class="titulo">Comparação Arrays</div>

<?php
$arr1 = ['nome' => 'Maria', 'idade' => 20];
$arr2 = ['nome' => 'Maria', 'idade' => 20];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

$arr3 = ['idade' => 20, 'nome' => 'Maria'];
echo '<br>';
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3); // ordem influência
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3); // ordem influência

$arr4 = ['idade' => '20', 'nome' => 'Maria']; // valor da chave idade alterada
echo '<br>';
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);