<?php

    class Database {

        var $host = 'localhost';
        var $port = 5432;
        var $dbname = 'login_v1';
        var $user = 'postgres';
        var $password = '';

        function connect() {
            return pg_connect("host=$this->host port=$this->port dbname=$this->dbname user=$this->user password=$this->password");
        }

        function disconnect() {
            pg_close();
        }
    
    }

?>