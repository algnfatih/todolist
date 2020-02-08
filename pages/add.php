<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<?php if(!isset($_POST['todo'])){
	header("Location: index.php?sayfa=home");
	die();
}

$todo = $_POST['todo'];

 
$id = DB::insert(
    'INSERT INTO list (todo) VALUES (?)',
    array($todo)
);
 

header("Location: index.php?sayfa=home");

?>