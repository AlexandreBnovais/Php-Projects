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
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Preencha as infomações</h1>
    <form action="./login.php" method="post" autocomplete="off">
        Nome: <br>
        <input type="text" name="userID" required><br>

        Endereco: <br>
        <input type="text" name="adressID" required><br>

        Bairro: <br>
        <input type="text" name="neighborhoodID" required><br>
        
        Telefone: <br>
        <input type="text" name="phoneID" required><br>
        
        Email: <br>
        <input type="email" name="emailID" required><br>
        
        Senha: <br>
        <input type="password" name="passwordID" required><br>

        <input type="submit" name="login" value="login" id="button">
    </form>
</body>
</html>

<?php 

    if(isset($_POST['login'])) {
        $_SESSION['user'] = $_POST['userID'];   
        $_SESSION['email'] = $_POST['emailID'];
        $_SESSION['password'] = $_POST['passwordID'];
        $_SESSION['neighborhood'] = $_POST['neighborhoodID'];
        $_SESSION['adress'] = $_POST['adressID'];
        $_SESSION['phone'] = $_POST['phoneID'];

        header('Location: ../home/response.php');
    }
?>