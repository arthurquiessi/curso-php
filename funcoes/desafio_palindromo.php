<div class="titulo">Desafio Palindromo</div>

<?php
function palindromo($palavra) {
    $inversao = strrev($palavra);
    return $inversao === $palavra ? 'Palindromo' : "Não Palindromo";
}

$palavra = 'arara';
echo palindromo($palavra);

