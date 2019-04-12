<?php

//подключаем классы
include 'classes/db.class.php';

        var $db_server = 'localhost';
        var $db_name = 'web-alt';
        var $db_user = 'web-alt';
        var $db_password = 'web-alt-test';
        
$db = new db($db_server, $db_user, $db_password, $db_name);
$db->db_connect();

?>