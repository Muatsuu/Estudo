<?php

    trait Serializavel{
        public function paraJson(): string{
            $dados = get_object_vars($this);
            return json_encode($dados, JSON_PRETTY_PRINT);
        }
    }
    class Configuracao{
        use Serializavel;
        public string $urlBase;
        public string $bancoDeDados;
        public string $usuario;
        private string $apiKey;

        public function __construct($urlBase, $bancoDeDados, $usuario, $apiKey){
            $this -> urlBase = $urlBase;
            $this -> bancoDeDados = $bancoDeDados;
            $this -> usuario = $usuario;
            $this -> apiKey = $apiKey;
        }
    }
    $config = new Configuracao("viacep.com.br", "My-Sql-Producao", "Enzo Kasma Moro", "viacep.com.br");
    echo $config -> paraJson();
?>  