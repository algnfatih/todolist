<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<?php 
if(!isset($_GET['id'])){
	header("Location: index.php?sayfa=home");
	die();
}

$id = $_GET['id'];
$affected = DB::exec('DELETE FROM list WHERE id = ?', array($id));

header("Location: index.php?sayfa=home");
 ?>