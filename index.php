<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>LoginV1</title>
        <meta charset="utf-8">
    </head>
    <body>
        <div>
            <?php
                session_start();
                if (!isset($_SESSION['name'])) {
                    header("Location:login.php");
                }
                echo "Olá, " . $_SESSION['name'] . "!";
            ?>
        </div>
        <div>
            <a href='logout.php'>Sair</a>
        <div>
    </body>
</html>