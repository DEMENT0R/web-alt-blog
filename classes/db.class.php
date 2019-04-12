<?php
    class db {
        var $db_server = 'localhost';
        var $db_name = 'web-alt';
        var $db_user = 'web-alt';
        var $db_password = 'web-alt-test';

    $link = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    //$link = mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Соединение с MySQL установлено!" . PHP_EOL;
    echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

    mysqli_close($link);
?>