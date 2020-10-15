<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "Nós também" . ' somos'; // ponto para concatenação!!!!!!!!
echo '<br>';
echo "Número é " . 123;
echo '<br>', "Também aceito", " virgulas";
echo '<br>';

echo "'Teste '" . '" Teste"' . '\'Teste\'' . "\"Teste\"" . "\\";

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funções
echo '<br>' . strtoupper('maximizado'); 
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras'); // todas as iniciais de cada palavra da frase
echo '<br>' . strlen('Quantas letras?'); // conta as qtd de letras na str (o acento é um caracter tbm)
echo '<br>' . mb_strlen('Eu também', "utf-8"); // conta tbm mas desconsidera o acento como caracter
echo '<br>' . substr('Só uma parte mesmo', 7, 6); // substr começa no índice zero, corre até o 7 e lê até os próximos 6
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso'); // primeiro índice é pra qual muda, o segundo qual vai mudar e o terceiro é qual a frase que vai ter a alteração