<?php 
    if(session_status() !== PHP_SESSION_ACTIVE) 
    {
        session_start();
    }
    
    if(isset($_POST['logoutID'])) 
    {
        session_unset();
        session_destroy();

        header('Location: ../login/login.php');
    }
    if(isset($_POST['back-button']))
    {
        header('Location: ../home/response.php');    
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <form action="./account.php" method="post">
        <div class="tougle-left">
            <button type="submit" name="back-button" class="back-button">
                <i class="fa-solid fa-arrow-left"></i>
            </button>

            <img src="../assets/olena-bohovyk.jpg" alt="olena-bohovyk.jpg">
        </div>

        <div class="tougle-right">
            <h1>Informações da conta</h1>
            <li><strong>Nome: </strong> <?php echo $_SESSION['user']?></li>
            <li><strong>Endereço: </strong><?php echo $_SESSION['adress']?></li>
            <li><strong>Bairro: </strong><?php echo $_SESSION['neighborhood']?></li>
            <li><strong>Telefone: </strong><?php echo $_SESSION['phone']?></li>
            <li><strong>Email: </strong><?php echo $_SESSION['email']?></li>
            
            <button name="logoutID" type="submit" class="logout-button">
                <i class="fa-solid fa-power-off"></i>
                Logout
            </button>
            
        </div>     
    </form>
</body>
</html>