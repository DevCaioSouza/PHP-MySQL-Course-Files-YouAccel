<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php 

$x = 50;
$y = 20;

#adição
echo $x + $y;
echo "<hr>";

//subtracão
echo $x - $y;
echo "<hr>";

# multiplicação
echo $x + $y;
echo "<hr>";

#divisão
echo $x / $y;
echo "<hr>"; 

#módulo
echo $x + $y;


?>

<h2>PHP Assignment Operator (Operadores de Tarefas)</h2>
<!-- Usado com valores numéricos para escrever valores para uma variável -->

<?php

#the left operand is assigned to the value on the right
$x = 20;
echo $x;


?>

<h2>Comparison operators (Operadores de comparação)</h2>

<?php

#Igual
$x = 300;
$y = "300";
var_dump($x == $y); //output é verdadiro pq x = y

#não igual
$x = 300;
$y = "300";
var_dump($x === $y); #output é falso pq os tipos são diferentes

#não igual
$x = 300;
$y = "300";
var_dump($x != $y); #output é falso pq os valores são iguais

#não igual
$x = 300;
$y = "300";
var_dump($x <> $y); #output é falso pq os valores são iguais

#não idênticos
$x = 300;
$y = "300";
var_dump($x !== $y); // Falso: tipos diferentes

#MAIOR QUE
$x = 300;
$y = 300;
var_dump($x > $y); // Falso

#MENOR QUE
$x = 300;
$y = 300;
var_dump($x < $y);

#MAIOR OU IGUAL
$x = 300;
$y = 300;
var_dump($x >= $y);

#MENOR OU IGUAL
$x = 300;
$y = 300;
var_dump($x <= $y);

?>

<h2>Operadores lógicos</h2>

<?php

#and = verdadeiro se ambos forem verdadeiros
$x = 200;
$y = 200;

if($x == 200 and $y == 200){
  echo "TRUE";
  echo "<hr>";
}

#or = verdadeiro se um deles for verdadeiro

$x = 200;
$y = 300;

if($x == 200 or $y == 90){
  echo "TRUE";
  echo "<hr>";
}

#AND - && - verdadeiro se ambos forem verdadeiros
$x = 200;
$y = 300;

if($x == 200 && $y==300){
  echo "TRUE";
  echo "<hr>";
}

#OR - ||
$x = 200;
$y = 300;

if($x == 200 || $y==80){
  echo "TRUE";
  echo "<hr>";
}

#NOT !$x - TRUE se $x não for verdadeiro
$x = 200;
$y = 300;

if($x !== 100){
  echo "TRUE";
  echo "<hr>";
}

?>

<h2>Operadores de string no PHP</h2>

<?php

#CONCATENAÇÃO 
$x = "Hello";
$y = " world";
echo $x . $y;
echo "<hr>";

#CONCATENATION ASSIGNMENT 
$x = "John";
$y = " Smith";
$x .= $y;
echo $x;
echo "<hr>";

?>

<h2>Operadores de Array</h2>

<?php

#UNIÃO 
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

print_r($x + $y);
echo "<hr>";

#IGUALDADE 
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

var_dump($x == $y);
echo "<hr>";

#IDENTIDADE 
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

var_dump($x === $y);
echo "<hr>";

#DESIGUALDADE
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

var_dump($x != $y);
echo "<hr>";

#DESIGUALDADE
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

var_dump($x <> $y);
echo "<hr>";

#NÃO-IDENTIDADE
$x = array("a" => "azul", "b" => "vermelho");
$y = array("c" => "rosa", "d" => "marrom");

var_dump($x !== $y);
echo "<hr>";


?>

</body>
</html>