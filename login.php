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
                if (isset($_SESSION['error_msg'])) {
                    echo $_SESSION['error_msg'];
                }
            ?>
        </div>
        <div>
            <form action='checkLogin.php' method='post'>
                <div>
                    <div>
                        <div><label>Usuário:</label></div>
                        <div><input name='username' type='text' size=10></div>
                    </div>
                    <div>
                        <div><label>Senha:</label></div>
                        <div><input name='password' type='password' size=10></div>
                    </div>
                </div>
                <br>
                <div>
                    <input name='enviar' type='submit' value='Enviar'>
                </div>
            </form>

        </div>      
    </body>
</html>



