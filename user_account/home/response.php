<?php 
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
    <main>
        <h1> Bem vindo <?php echo $_SESSION['user']?>!</h1>

        <div class="external-box">
            <h3>Selecione uma opção</h3>
            <div class="internal-box">
                <button><a href="../bk_account/bank_account.php">Conta</a></button>
                <button><a href="../account/account.php">painel de usuario</a></button>
            </div>
        </div>
    </main>
</body>
</html>