<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<?php
$user = DB::getRow('SELECT * FROM user WHERE id = 1 LIMIT 1');

$mail = $_POST["mail"];
$pass = $_POST["password"];

if ($mail ==  $user -> mail and $pass ==  $user -> pass){
	session_start();
	$_SESSION["user"] = "root";
	header("Location: index.php?sayfa=home	");
}

else {
	header("Location: index.php?sayfa=login");
}
?>