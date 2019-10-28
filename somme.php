<?php 
	if (isset($_POST['a']) && !empty($_POST['a']) && isset($_POST['b']) && !empty($_POST['b'])) {
		$a = $_POST['a'];
		$b = $_POST['b'];
		$somme = $a + $b;
		echo "La somme de deux nombres est :" .$somme;
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Somme de deux nombre</title>
</head>
<body>
	<form action="" method="post">
		a: <input type="text" name="a"><br><br>
		b: <input type="text" name="b"><br><br>
		<input type="submit" name="" value="Calculer">
	</form>
</body>
</html>