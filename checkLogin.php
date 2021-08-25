<?php
    session_start();

    require_once 'DbLogin.php';

    if (($_POST['username'] != '') && ($_POST['password'] != '')) {

        $dbLogin = new DbLogin();
        $result = $dbLogin->checkLogin($_POST['username'], md5($_POST['password']));
        
        $row = pg_fetch_assoc($result);
        
        if ($_POST['username'] == $row['username'] && md5($_POST['password']) == $row['password']) {
            
            $_SESSION['name'] = $row['name'];
            header("Location: index.php");
        }
        
        else {
            $_SESSION['error_msg'] = "Login inválido!";
            header("Location: login.php");
        }
    }

    else {
        $_SESSION['error_msg'] = "Login vazio!";
        header("Location: login.php");
    }
    
?>