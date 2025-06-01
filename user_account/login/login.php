<?php 
    session_cache_expire(20);
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./login.php" method="post">
        Nome: <br>
        <input type="text" name="userID"><br>
        
        Email: <br>
        <input type="email" name="emailID"><br>
        
        Senha: <br>
        <input type="password" name="passwordID"><br>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 

    if(isset($_POST['login'])) {
        $_SESSION['user'] = $_POST['userID'];   
        $_SESSION['email'] = $_POST['emailID'];
        $_SESSION['password'] = $_POST['passwordID'];

        header('Location: ../home/response.php');
    }
?>