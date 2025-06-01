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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <h1> Bem vindo <?php echo $_SESSION['user']?>!</h1>
        </div>

        <div>
            <h3>Selecione uma opção</h3>
            <button><a href="">Conta</a></button>
            <button><a href="../account/account.php">painel de usuario</a></button>
        </div>
    </main>
</body>
</html>