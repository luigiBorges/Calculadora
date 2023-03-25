<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="aula" style="font-family: Arial, Helvetica, sans-serif;">
<center>
    <div class="aulas">
<?php
  

$nome= $_POST ['nome'];
$numero1 = $_POST ['numero1'];
$numero2 = $_POST ['numero2'];



$soma = $numero1 + $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;
$subtracao = $numero1 - $numero2;


echo"Nome: $nome <br>";
echo"Soma: $soma<br>"; 
echo"Multiplicação: $multiplicacao <br>";
echo"Divisão: $divisao <br>"; 
echo"Subtração: $subtracao <br>";


?>
</div>
</center>


</main>
</body>
</html>
