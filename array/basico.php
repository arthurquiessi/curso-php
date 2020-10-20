<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, 'texto');
echo $lista . '<br>'; // não imprime os elementos
var_dump($lista);
echo '<br>';
print_r($lista); // Forma de printar todos os elementos do array

// acessar cada elemento do array
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[2];
echo '<br>' . $lista[3];
echo '<br>' . $lista[4]; // não existe = null
echo '<br>';
var_dump($lista[4]);
echo '<br>';

$lista[0] = 1234;
print_r($lista);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // comentário na aula de array básico sobre
echo '<br>' . mb_substr($texto, 10, 1); // tira o acento como elemento (comentário na aula)
