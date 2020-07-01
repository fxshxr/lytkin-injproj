<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BikeNews - Login</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header class="header">
		<div class="container">
			<a href="index.php" class="header__logo">
				BikeNews
			</a>
		</div>
	</header>
		<main class="main__login">
			<div class="container">
				<h1>Login</h1>
			<form action="" method="post" class="login">
				<label for="">Login
					<input type="" required name="login">
				</label>
				<br>
				<label for="">Password
					<input type="Password" required name="pass">
				</label>
				<br>
				<input type="submit" value="Enter">
			</form>

		<?php 
			if ($_POST['pass'] == 'admin' and $_POST['login'] == 'admin' ) {
				echo '<script>location.replace("admin.php");</script>'; exit;
			}
			else{
				echo "<p class='error'>Invalid Password!!!</p>";
			}
		 ?>
			</div>
		</main>

</body>
</html>