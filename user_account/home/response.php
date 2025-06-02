<?php 
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if(isset($_POST['conta'])) {
        header('Location: ../bk_account/bank_account.php');
    }
    if(isset($_POST['painel'])) {
        header('Location: ../account/account.php');
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
            <form action="response.php" method="post" class="internal-box">
                <button type="submit" name="conta">Conta</button>
                <button type="submit" name="painel">Painel do Usuario</button>
            </form>
        </div>
    </main>
</body>
</html>