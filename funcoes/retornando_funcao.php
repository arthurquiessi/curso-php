<div class="titulo">Retornando Função</div>

<?php
function soma($a) {
    /* 
    dentro da função anônima a variável $a não está disponível
    por isso tem que usar a função use indicando o parâmetro da função externa
    */
    return function($b) use ($a) {
        return $a + $b;
    };
}

echo soma(3)(3); // o segundo parenteses é o parâmentro da variável $b

$doisMais = soma(2); // a variável fica armazenada como 'padrão'
echo '<br>', $doisMais(10); // passa o parâmetro b depois
echo '<br>', $doisMais(18);