<?php
    class db {
        var $db_server = 'localhost';
        var $db_user = 'web-alt';
        var $db_password = 'web-alt-test';

    $link = mysql_connect($db_server, $db_user, $db_password);
    if (!$link) {
        die('Ошибка соединения: ' . mysql_error());
    }
    echo 'Успешно соединились';
    mysql_close($link);
?>