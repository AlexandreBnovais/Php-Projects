<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./bank_account.php" method="post">
        Digite um valor: <br>
        <input type="number" name="balance"><br>
        <input type="submit" name="depositar" value="Depositar">
        <input type="submit" name="saque" value="Sacar">
        <input type="submit" name="saldo" value="Saldo" >
        <input type="submit" name="limpar" value="Limpar">
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
                echo "Deposito no valor de R$ " . number_format($dep, 2, ',','.') . " foi efetuado com sucesso";
            }else{
                echo "valor do deposito insulficiente";
            }
        }

        public function Sacar(float $saq) 
        {
            if($saq > 0 && $saq <= $this->saldo) {
                $_SESSION['saldo'] = $this->saldo;
                $_SESSION['saldo'] += $saq;
                echo "Deposito no valor de" . number_format($saq, 2, ',','.') . "foi efetuado com sucesso";
            }else {
                echo "Valor de saque indisponivel";
            }
        }

        public function Saldo()
        {
            $_SESSION['saldo'] = $this->saldo;
            echo "Saldo atual: R$ " . number_format($_SESSION['saldo'], 2, ',','.') . "<br>";
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