<?php


$nome = $_GET['a'];
$numero = (int)$_GET['b'];
$ip = $_SERVER['REMOTE_ADDR'];

echo var_dump($nome);
echo "<br>";
echo var_dump($numero);
echo "<br>";
echo var_dump($ip);
echo "<br>";
echo "Operador Espaceship";
echo "<br>";
$x = 65;
$y = 35;
echo var_dump($x <=> $y);


?>