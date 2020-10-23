<div class="titu">Arrays Constantes</div>

<?php
// todo array constante não é possível fazer a alteração dos elementos, somente visualizar
const FRUTAS = ['laranja', 'abacaxi'];
// FRUTAS[0] = 'banana';
// FRUTAS[] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
echo '<br>'. CARROS["Fiat"];

define('CIDADE', array('Belo Horizonte', 'Recife'));
echo '<br>'. CIDADES[1];
