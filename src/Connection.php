<?php
    namespace App;
    class Connection {
        public static function getPDO(){
            return new \PDO('mysql:dbname=membres;host=localhost','root','',
            [\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION]);
        }
    }
   

?>