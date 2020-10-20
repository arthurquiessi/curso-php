<div class="titulo">Mapa</div>

<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

print_r($dados);

// dessa forma, acessa o elemento a partir da chave, ai retorna o valor
echo '<br>' . $dados["idade"];
echo '<br>' . $dados["cor"];
echo '<br>' . $dados["peso"];
echo '<br>';
var_dump($dados['outra_info']);

// incluir elementos
$teste = array(
    1,
    2,
    3,
    4,
    5
);

$teste[] = 6; // método de inclusão de elemento no array
echo '<br>';
print_r($teste);

$teste['nome'] = 'Arthur'; // incluir elemento chave - valor
echo '<br>';
print_r($teste);

echo '<br>' . $teste['nome'];


