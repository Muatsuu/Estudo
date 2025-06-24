<?php

    trait Contador{
        private static int $contador = 0;
        public static function getTotalInstancias(): int{
            return self::$contador;
        }
        public function inicializarContador(): void{
            self::$contador++;
        }
    }
    class Post{
        use Contador;
        private string $post;
        public function __construct(string $post){
            $this -> post = $post;
            $this -> inicializarContador();
        }
    }
    class Comentario{
        use Contador;
        private string $comentario;
        public function __construct(string $comentario){
            $this -> comentario = $comentario;
            $this -> inicializarContador();
        }
    }
    $post1 = new Post("Eu gosto de programar em PHP.");
    $post2 = new Post("Acho que estou evoluindo bem.");
    $post3 = new Post("UHU!.");
    echo "<hr>";
    $comentario1 = new Comentario("Sim sim!");
    $comentario2 = new Comentario("Gosto mais dela do que de JS.");

    echo "Foi feito um post no total de: ".Post::getTotalInstancias();
    echo "<br>";
    echo "Foi feito um post no total de: ".Comentario::getTotalInstancias();
?>