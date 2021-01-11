<div class="titulo">Argumentos Padrões</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    return "Bem vindo, $nome $sobrenome! <br>";
}

echo saudacao();
echo saudacao(null); // forçando so um argumento
echo saudacao(null, null); // forçando os dois argumentos
echo saudacao('Mestre', 'Supremo');

echo '<br><hr>';

// **** Sempre colocar o valor padrão por último ****
function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');