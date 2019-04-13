<?php

//подключаем классы
include 'classes/db.class.php';
include 'classes/auth.class.php';

//подключаем header
include 'partials/header.php';

if ($_GET["auth"] != '') {
	//подключаем auth
	include 'partials/auth.php';
} else if ($_GET["profile"] != '') {
	//подключаем profile
	include 'partials/profile.php';
} else if ($_GET["new"] != '') {
	//подключаем new
	include 'partials/new.php';
} else if ($_GET["post"] != '') {
	//подключаем posts
	include 'partials/post.php';
} else if ($_GET["post"] == '') {
	//подключаем posts
	include 'partials/posts.php';
}









//подключаем footer
include 'partials/footer.php';

?>