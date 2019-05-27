<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Very best title of site</title>
	<meta charset="utf-8">
</head>
<body>
	<!--Header-->
	<ul class="nav justify-content-center bg-secondary" style="height: 4rem;">
	  <li class="nav-item">
	    <h1 class="h">
			Админ панель
		</h1>
	  </li>
	</ul>
	
	<div class="container">
	<div style="display: none;" class="one">
		<button type="button" class="close c" aria-label="Close">
	  		<span aria-hidden="true">&times;</span>
		</button>
		<form action="new.php" method="GET">
		 	<input type="store" name="name" placeholder="Заголовок игры" class=" form-control">
		 	<input type="store" name="cost" placeholder="цена" class="form-control">
		 	<input type="store" name="img" placeholder="Фото поста" class="form-control">
		 	<div class="row">
		 	<button class="btn offset-6">
		 		Создать
		 	</button>
		 	</div>			
		</form>	 
	</div>

	<!--Content-->
	<div class="row">
	<?php $connect=mysqli_connect('127.0.0.1','root','','magazBD'); 
	 		$query=mysqli_query($connect,'SELECT * FROM store ORDER BY id ASC');
	 		for ($i=0; $i < $query->num_rows; $i++) { 
	 			$avatar=$query->fetch_assoc();
	 		
	?>
	<div class="col-4">

	<div class="">
			<?php echo '<img class="w-100" style="height:500px;" src="' .$avatar['img']  .'">';?>
	</div>
	<div class="">
		<h3>
			<?php
				echo $avatar['name'];
			?>
		</h3>
	</div>
	<div class="">
		<h4>
			<?php
				echo $avatar['cost'];
			?>
		</h4>
	</div>
	<form action="name.php" method="GET">
	 			<?php 
	 			echo '<input name = "id" value = "'.$avatar['id']. '" style="display:none">'; ?>
	 			<button class="btn col align-self-center">удалить</button>
	 </form>
	 <form action="red.php" method="POST">
	 			<?php 
	 			echo '<input name = "id" value = "'.$avatar['id']. '" style="display:none">';
	 			echo '<input name = "name" value = "'.$avatar['name']. '" style="display:none">'; 
	 			echo '<input name = "cost" value = "'.$avatar['cost']. '" style="display:none">';
	 			echo '<input name = "img" value = "'.$avatar['img']. '" style="display:none">';
	 			?>
	 			<button class="btn col align-self-center">
	 				Редактировать
	 			</button>
	 </form>
	 </div>
	 	<?php } ?>
	 
	  </div>

	 	</div>
	 	<script type="text/javascript">
		let btn = document.querySelector('.h');
		let btnC = document.querySelector('.c');
		let one = document.querySelector('.one');
		btn.onclick = function() {
			one.style.display = 'block'
		}

		btnC.onclick = function() {
			one.style.display = 'none'
		}
	</script>
</body>
</html>