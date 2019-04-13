<?php 
	if ($_COOKIE["ssid"]) {
		$db = new db();
		$db->CheckSsid($_COOKIE["ssid"]); 
	} else if (($_POST['login'] != "") & ($_POST['password'] != "")) {
		$db = new db();
		$db->GetSsid($_POST['login'], $_POST['password']); 
	}
?>