<?php
//criando a classe sempre em maisculo e mesmo nome que o arquivo.
class Pessoa{
    
    //criando os atributos 
    public $nome;
    private $idade;

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
}

?>