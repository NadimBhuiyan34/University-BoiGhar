<?php

session_start();
require_once '../config.php';

function getLoggedID() {
	return isset($_SESSION['id']) && $_SESSION['id'] ? true : false;
}

function needLogged() {
	$check = getLoggedID();
	if (!$check) {
		header('Location: login.php');
	}
}
function checkAndGoto($val, $location) {
	if (!$val) {
		header("Location: $location.php");
	}
}
