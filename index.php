<?php

require 'Pessoa.php';

$pessoa = new Pessoa(); 
$pessoa->nome="José"; //String precisa colocar entre "
$pessoa->setIdade(20); // numero por ser INT não precisa colocar entre "

echo "O nome: ".$pessoa->nome."<br>";
echo "A idade: ".$pessoa->getIdade()."<br>";


?>