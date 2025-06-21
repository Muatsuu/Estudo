<?php
    class Book{
        public $tittle;
        public $author;
        private $isbn;
        private $readPags;

        public function __construct($tittle, $author, $isbn){
            $this -> readPags = 0;
            $this -> tittle = $tittle;
            $this -> author = $author;
            $this -> isbn = $isbn;
        }
        public function getIsbn($tittle){
            echo "O Isbn do livro é: ".$this -> isbn;
        }
        public function infoBook(){
            echo "Nome do livro: {$this -> tittle}<br>Autor: {$this -> author}<br>ISBN: {$this -> isbn}";
        }
        public function readPags($pags){
            if(!is_numeric($pags)){
                echo "Digite um numero válido.";
            }

            $pags = (int)$pags;

            if($pags < 0){
                echo "Não é possivel ler paginas negativas, digite um valor positivo.";
            }
            else if($pags == 0){
                echo "Você não leu nenhum página.";
            }
            else{
                $this -> readPags += $pags;
                echo "Você leu $pags paginas.<br>";
            }
        }
        public function getReadProgression(){
            return "Você leu ".$this -> readPags." paginas no total do livro: {$this -> tittle}.<br>";
        }
    }
    $book1 = new Book("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 1);
    //echo $book1 -> getIsbn("O Pequeno Príncipe");
    echo $book1 -> readPags(10);
    echo $book1 -> getReadProgression();
    echo "<br>";
    $book2 = new Book("Senhor dos Anéis", "J. R. R Tolkien", 2);
    echo $book2 -> readPags(150);
    echo "<br>";
    echo $book2 -> getReadProgression();
    echo $book2 -> infoBook();
?>