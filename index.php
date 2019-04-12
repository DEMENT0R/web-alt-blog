<?php

//подключаем классы
include 'classes/db.class.php';

//Вызываем функцию init
db::init();

//Так же обращаемся к другим функциям. К примеру.
db::fetch_assoc();

?>