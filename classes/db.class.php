<?php
    class db {
        var $db_server = 'localhost';
        var $db_name = 'web-alt';
        var $db_user = 'web-alt';
        var $db_password = 'web-alt-test';


        function db_connect () {
            $db_server = 'localhost';
            $db_name = 'u5055967_web-alt';
            $db_user = 'u5055967_web-alt';
            $db_password = 'web-alt-test';
            $link = mysqli_connect($db_server, $db_user, $db_password, $db_name);
            //$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

            if (!$link) {
                echo "<br>Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
                echo "<br>Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "<br>Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            echo "<br>Соединение с MySQL установлено!" . PHP_EOL;
            echo "<br>Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

            mysqli_close($link);
        }
    }
?>