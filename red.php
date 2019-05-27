<meta charset="utf-8">
<form method="POST" action="red1.php">
	<?php 
	 			echo '<input name = "id" value = "'.$_POST['id']. '" style="display:none">';
	 			echo '<input name = "name" value = "'.$_POST['name']. '">';
	 			echo '<input name = "cost" value = "'.$_POST['cost']. '">'; 
	 			echo '<input name = "img" value = "'.$_POST['img']. '">'; ?>
	 			<button>Сделать</button>

</form>
