<?php

@$secure = True;

include ('functions/globalfunct.php');

session_start();
@$sayfa = $_GET['sayfa'];

if ($_GET['sayfa'] == "" || $_GET['sayfa'] = null || !isset($_GET['sayfa'])){
	header("Location: index.php?sayfa=home");
}

if ($sayfa!="login" && $sayfa!="control" && !isset($_SESSION["user"])){
	header("Location: index.php?sayfa=login");
	die();
}



if ($sayfa!="login"){
	include ("pages/header.php");
}

if (file_exists("pages/$sayfa.php")){
	
	include ("pages/$sayfa.php");
}

else {
	header("Location: index.php?sayfa=home");
}


if ($sayfa!="login"){
	include ("pages/footer.php");
}

?>