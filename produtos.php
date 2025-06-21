<?php
    
    class Produtos{
        public $nome;
        public $valor;
        public $qEstoque;

        public function __construct($nome, $valor, $qEstoque){
            $this -> nome = $nome;
            $this -> valor = $valor;
            $this -> qEstoque = $qEstoque;
        }
        public function showInfo(){
            echo "Nome do produto: {$this -> nome}<br> Valor: R$ {$this -> valor}<br> E temos no estoque: {$this -> qEstoque} unidades.<br>";
        }
        public function sale($sale){
            if($this -> qEstoque >= $sale){
                $venda = $this -> qEstoque - $sale;
                $valorTot = $this -> valor * $sale;
                echo "Foi vendido $sale unidades no valor de: R$$valorTot, sobrou $venda no estoque.";
            }else{
                echo "Não temos estoque suficiente pra realizar a venda.<br>";
            }
        }
    }
    $produto = new Produtos("Maça", 3.75, 25);
    echo $produto -> showInfo();
    echo $produto -> sale(24)
?>