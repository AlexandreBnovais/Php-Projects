<?php 
    if(session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
    if(isset($_POST['btn'])) {
        $_SESSION['user'] = $_POST['userID'];
        $_SESSION['password'] = $_POST['passwordID'];
        
        header('Location: ../Dashboard/dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="./login.php" method="post">
        Usuario: <input type="text" name="userID" id="userID"><br>
        Senha: <input type="password" name="passwordID" id="passwordID"><br>
        <input type="submit" name="btn" value="Continue">
    </form>
</body>
</html>