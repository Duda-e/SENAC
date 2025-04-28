<?php
 
 $nota1 = $_POST ['nota1'];
 $nota2 = $_POST ['nota2'];
 $nota3 = $_POST ['nota3'];
 $nome  = $_POST ['nome'];
 
 // Calcula a média
 
 $media = ($nota1 + $nota2 + $nota3) / 3;
 
 //Exibe a média formatada com duas casas decimais


 echo"Olá, " .htmlspecialchars(string: $nome) . "!<br>";
 echo "A média das notas é: " . number_format(num: $media, decimals: 2, decimal_separator: ',');
 ?>