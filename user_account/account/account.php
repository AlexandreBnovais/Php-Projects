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
    <link rel="stylesheet" href="./style3.css">
</head>
<body>
    
    <main>
        <div>
            <img src="../assets/olena-bohovyk.jpg" alt="olena-bohovyk.jpg">
        </div>
        <ul>
            <h1>Informações da conta</h1>
            <li><strong>Nome: </strong> <?php echo $_SESSION['user']?></li>
            <li><strong>Endereço: </strong><?php echo $_SESSION['adress']?></li>
            <li><strong>Bairro: </strong><?php echo $_SESSION['neighborhood']?></li>
            <li><strong>Telefone: </strong><?php echo $_SESSION['phone']?></li>
            <li><strong>Email: </strong><?php echo $_SESSION['email']?></li>
            <li><strong>Senha: </strong><?php echo $_SESSION['password']?></li>
        </ul>
            
    </main>
</body>
</html>