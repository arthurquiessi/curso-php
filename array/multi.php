<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo",
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia",
    ]
];

print_r($dados);
echo '<br>';
// acessar o índice nessa forma
echo '<br>' . $dados[0]['idade']; // Acessa o array de posição 0 e pega o valor da chave idade
echo '<br>' . $dados[1]['idade']; 
echo '<br>';

// Incluir novo índice
$dados[] = [
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México",
];

echo '<br>' . $dados[2]['idade']; // acessando a idade do novo índice adicionado
echo '<br>';
print_r($dados[2]);

// incluindo mais uma chave valor
$dados[2]["vizinho"] = "Chaves";
echo '<br>';
print_r($dados);

// desfazendo um elemento
unset($dados[1]); // ao excluir, o php não refatora os índices, continuam na sequÊncia que estava, nesse caso continua [0, 2, etc...]
echo '<br>';
print_r($dados);

// OUTRA FORMA DE ACESSAR O ÍNDICE
$dados = [
    "pessoa1" => [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo",
    ],
    [ // Aqui será índice 0
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia",
    ]
];

echo '<br>' . $dados["pessoa1"]['idade'];
echo '<br>' . $dados[0]['idade'];