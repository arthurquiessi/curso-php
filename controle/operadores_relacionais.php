<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(4 < 23);
var_dump(1 >= 1);
var_dump(1 <= 7);
var_dump(1 <> 1);
var_dump(1 != 1);

var_dump(111 == '111');
var_dump(111 === '111'); // extritamente iguais
var_dump(111 != '111');
var_dump(111 !== '111'); // extritamente diferentes

echo "<p class='divisao'>Relacionais no If/Else</p><hr>";
$idade = 22;
if($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif ($idade < 65) {
    echo "Adulto  = $idade anos<br>";
} else {
    echo "Tercera idade = $idade!";
}

echo "<p class='divisao'>Spaceship</p><hr>";
var_dump(5 <=> 3); //esquerda maior, retorna 1
var_dump(50 <=> 50); //iguais, retorna 0
var_dump(3 <=> 5); // direita maior, retorna -1

echo "<p class='divisao'>Valores podem ser V ou F</p><hr>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
