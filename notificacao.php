<?php

    interface Notification{
        public function sendNotification($mensagem);
    }
    class Cliente implements Notification{
        private $email;
        public function __construct(string $email){
            $this -> email = $email;
        }
        public function sendNotification($mensagem){
            return "A mensagem: '$mensagem' foi enviada para o email: {$this -> email}";
        }
    }
    class TechSuporte implements Notification{
        public function sendNotification($mensagem){
            return $this -> openTicket($mensagem);
        }
        private function openTicket($mensagem){
            return "O Ticket foi aberto com a seguinte Mensagem: $mensagem <br>";
        }
    }
    class NotificationService{
        public function triggerNotification(Notification $notifier, string $message){
            echo "Iniciando serviço de notificação.<br>";
            $result = $notifier -> sendNotification($message);

            echo "Resultado: $result <br>";
            echo "Serviço Finalizado.<br>";
        }
    }

    $mensagem = "Ola mundo!";
    $email = "enzokasma@gmail.com";
    $cliente = new Cliente($email);
    echo $cliente -> sendNotification($mensagem); 
    echo "<hr>";
    $suporte = new TechSuporte();
    echo $suporte -> sendNotification("Criar email corporativo.");
    echo "<hr>";
    $emailNotifier = new Cliente($email);
    $ticketNotifier = new TechSuporte();
    $notificationService = new NotificationService();
    $notificationService -> triggerNotification($emailNotifier, $mensagem)
?>