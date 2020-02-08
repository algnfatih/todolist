<?php if(!isset($secure)) { die("İzinsiz bağlantı!");} ?>

<div id="myDIV" class="header">
  <h2 style="margin:5px">To Do List</h2>
  <form action="index.php?sayfa=add" method="POST">
	<input type="text" name="todo" id="todo" placeholder="Ne yapıyoruz usta ?">
	<button class="addBtn">Ekle</span>
  </form>
</div>


  <?php 
  $todos= DB::get("SELECT * FROM list");
  if ($todos == [] or $todos == "" or $todos==null){
	  echo '<hr><center><h2 style="margin:5px">Yapılacaklar listeniz boş efendim.</h2>';
  }
  else {
	  
	  echo '
	<table class="table table-bordered">
	<thead>
		<tr>
		  <th scope="col">To Do</th>
		  <th scope="col">Sil</th>

		</tr>
	</thead>
	<tbody>';
  
	  foreach($todos as $todo){
		   echo  '<tr>
			  <td>'. $todo -> todo .'</td>
			  <td><a class="btn btn-outline-danger" href="index.php?sayfa=delete&id='. $todo -> id  .'" >Sil</a></td>
	  </tr>'; } 
  }
   ?>
	
  </tbody>
</table>