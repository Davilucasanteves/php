<?php

    class Pessoa
    {
        public $nome;
        public $idade;
    
        public function __construct($nome,$idade)
        {
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function atg(){
            echo $this->nome;
            echo $this->idade;
        }
    }

    /*
        $nome = 'ou';
        echo 'kkk';
        echo '<br>';
        echo $nome;
    */

    $pessoa = new Pessoa('f', '56');
    $pessoa->atg();

?>