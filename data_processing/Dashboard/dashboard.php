<?php
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$currentTheme = "light"; 

if (isset($_COOKIE['site_theme'])) {
    $currentTheme = $_COOKIE['site_theme'];
}

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    $_COOKIE['site_theme'] = '';
    header('Location: ../login/login.php');
}

if (isset($_GET['toggle_theme'])) {
    if ($currentTheme === "light") {
        $newTheme = "dark";
    } else {
        $newTheme = "light";
    }

    setcookie('site_theme', $newTheme, time() + (86400 * 30), "/"); 
    $currentTheme = $newTheme;
    
    header("Location: ./dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="<?php echo $currentTheme; ?>-theme">
    <h1>Bem-vindo <?php echo $_SESSION['user']?></h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>

    <div class="container">
        <form method="get" action="./dashboard.php">
            <input type="hidden" name="toggle_theme" value="1">
            <button type="submit" class="theme-toggle-button">
                <i class="fa-solid fa-moon"></i>
            </button>
        </form>
        <form action="./dashboard.php" method="post">
            <button type="submit" name="logout" class="theme-toggle-button">
                <i class="fa-solid fa-power-off"></i>
            </button>
        </form>
    </div>
</body>
</html>