<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'>Negação lógica</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // ! "not"
var_dump(!!true);

echo "<p class='divisao'>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

var_dump(true && 3 > 2 && 7<=7 && 3 === '3'); // Basta um falso para ser tudo falso

echo "<p class='divisao'>Tabela Verdade 'OR' (OU)</p><hr>";
var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);


echo "<p class='divisao'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>"; // Um dos dois
var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar -> $sexo";
} else if($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
} else {
    echo 'Vai ter que trabalhar mais um pouco';
}
