

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet"> 
</head>
<body>
		<header class="header">
		<div class="container">

		<nav class="header__nav">
			<ul class="header__nav__list">
				<li class="link"><a class="logo" href="index.php">BikeNews</a></li>
				<li class="link"><a href="index.php">News</a></li>
				<li class="link"><a href="revs.php">Reviews</a></li>
				<li class="link"><a href="bikes.php">Bikes</a></li>
				<li class="link"><a href="store.php">Store</a></li>
			
			</ul>
		</nav>
		<a href="login.php" class="header__login">
			Login
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
				<input type="submit" value="Enter" class="button">
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
		<footer class="footer">
		<div class="container">
			<p class="footer__text"> Инженерный проект Лыткин И.М. 191-322</p>
			<a href="https://github.com/fxshxr/lytkin-injproj" class="git">GIT</a>
		</div>
	</footer>
</body>
</html>