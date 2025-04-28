<?php

    // conceitos básicos do PHP// Este é um comentário de uma linha

echo "Meu primeiro código PHP "; // imagine que isso é um comentário
echo "<br> "; // quebra de linha
echo "Hello World!";
echo "<br> ";
echo "Aula 01 - PHP  ";
echo " <hr>" ."<br>";
    
    // Aprendendo os tipos de variáveis
    
$NomeFilme = "Barbie"; // variável string
$AnoLancamento = 2023; // variável inteiro
$PrecoIng = 12.5; // variável float
$Disponivel = true; // variável booleana (true ou false)
 
     // Exibindo os valores das variáveis

echo "Nome do filme:" .$NomeFilme; // variável string
echo "<br> "; 
echo "Ano de Lançamento:" .$AnoLancamento; // variável inteiro
echo "<br> "; 
echo "Preço do ingresso:" .$PrecoIng; // variável float
echo "<br> "; 
echo "Disponível:" .$Disponivel; // variável booleana (true ou false)
echo " <hr>" ."<br>"; // quebra de linha e linha horizontal

     // Exibindo os valores das variáveis com formatação
echo "Nome do filme: $NomeFilme, Ano de Lançamento: $AnoLancamento, Preço do ingresso: $PrecoIng"; // variável string, inteiro e float     
echo " <hr>" ."<br>";

     //calculo com variáveis

$numero1 = 10; // variável inteira
$numero2 = 15; 
$numero3 = 6;

$media = ($numero1 + $numero2 + $numero3) / 3; // média aritmética

echo "A média dos valores " . $numero1 . " . $numero2 " . $numero3 . " é igual é: " .$media; // exibe a média
echo " <hr>" ."<br>"; // quebra de linha e linha horizontal





?>