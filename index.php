<?php

//подключаем классы
include 'classes/db.class.php';

$db_server = 'localhost';
$db_name = 'web-alt';
$db_user = 'web-alt';
$db_password = 'web-alt-test';

$db = new db($db_server, $db_user, $db_password, $db_name);
$db->db_connect();

?>