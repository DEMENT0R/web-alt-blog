<?php
    class db {
        var $db_server = 'localhost';
        var $db_user = 'root';
        var $db_password = 'password';

        static protected $connection = null;
        //Подключение к БД    
        static function init () {
            self::$connection = mysql_connect('localhost', 'root', '');
                    if (self::$connection) {
                        return mysql_select_db('lp', self::$connection);
                    }
                    return false;
        }
        //Запрос к БД    
        static function query ($query) {
            return mysql_query($query, self::$connection);
        }
        //Получаем ассоциативный массив    
        static function fetch_assoc ($result) {
            return mysql_fetch_assoc($result);
        }
        //Экранируем строки при запросах
        static function escape_string ($str) {
            return mysql_escape_string($str);
        }
    }
?>