<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style4.css">
</head>
<body>
    <form action="./bank_account.php" method="post">
        Digite um valor: <br>
        <input type="number" name="balance"><br>
        <input type="submit" name="depositar" value="Depositar" class="button">
        <input type="submit" name="saque" value="Sacar" class="button">
        <input type="submit" name="saldo" value="Saldo"  class="button">
        <input type="submit" name="limpar" value="Limpar" class="button">
    </form>
</body>
</html>
<?php
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }

    if(!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 0;
    }

    class ControllerAccount {
        private float $saldo;

        public function __construct($saldo = 0)
        {
            $this->saldo = $saldo;
             
        }

        public function Depositar(float $dep) 
        {
            if($dep > 0) {
                $_SESSION['saldo'] = $this->saldo;
                $_SESSION['saldo'] += $dep;
                echo "<h1>Deposito no valor de R$ " . number_format($dep, 2, ',','.') . " foi efetuado com sucesso</h1>";
            }else{
                echo "valor do deposito insulficiente";
            }
        }

        public function Sacar(float $saq) 
        {
            if($saq > 0 && $saq <= $this->saldo) {
                $_SESSION['saldo'] = $this->saldo;
                $_SESSION['saldo'] -= $saq;
                echo "<h1>Saque no valor de R$ " . number_format($saq, 2, ',','.') . " foi efetuado com sucesso</h1>";
            }else {
                echo "<h1>Valor de saque indisponivel</h1>";
            }
        }

        public function Saldo()
        {
            $_SESSION['saldo'] = $this->saldo;
            echo "<h1>Saldo atual: R$ </h1>" . number_format($_SESSION['saldo'], 2, ',','.') . "<br>";
        }

        public function Limpar() {
            $_SESSION['saldo'] = 0;
        }
    }

    $action = new ControllerAccount($_SESSION['saldo']);

    if(isset($_POST['depositar'])) {
        $action->Depositar($_POST['balance']);
    }

    if(isset($_POST['saque'])) {
        $action->Sacar($_POST['balance']);
    }
    if(isset($_POST['saldo'])) {
        $action->Saldo();
    }
    if(isset($_POST['limpar'])) {
        $action->Limpar();
    }

?>