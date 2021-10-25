<?php
	$login = $_POST['login'];
	$but = $_POST['butt'];
	$pass = $_POST['pass'];

	if (isset($_POST['butt'])) {
		if ($login === $pass) {
			echo 'ok broooo';
		} else {
			echo "noooo";
		}
	}
?>