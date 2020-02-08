<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="assets/css/login.css">

<title>To Do List - Giriş Yap</title>
</head>
<body>

<section class="login-wrapper">
  <form class="login-panel" action="index.php?sayfa=control" method="POST">
    <label for="mail" unselectable="on">Kullanıcı Adı</label>
	<input name="mail" type="email" id="mail" required>
    <label for="password" unselectable="on">Parola</label>
    <input name="password"type="password" id="password" required>
    <input type="submit" value="Giriş Yap">
  </form>
</section>

</body>
</html>