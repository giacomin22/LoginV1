<?php

    require_once "Database.php";

    class DbLogin {

        function checkLogin($username, $password) {

            $db = new Database();
            $connected = $db->connect();
            $query = "SELECT * FROM users WHERE username='$username'";

            if ($connected) {
                $result = pg_query($connected, $query);
            }

            $db->disconnect();
            return $result;
        }
    }

?>