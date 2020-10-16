<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero'; // aspas simples resolve como string e não variável
echo "<br> $numero"; // aspas duplas resolve a variável

$texto = "Sua nota é: $numero"; 
echo "<br>$texto";

$objeto = 'caneta';
echo "<br>Eu tenho 5 $objetos";
echo "<br>Eu tenho 5 {$objeto}s.";
