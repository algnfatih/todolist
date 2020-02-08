<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<?php

session_start();
session_unset();
session_destroy();
ob_start();
header("Location: index.php?sayfa=login");

?>