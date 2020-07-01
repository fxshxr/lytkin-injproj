

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<header class="header">
		<div class="container">
		
		<div class="logo">
			<a href="" class="header__logo">BikeNews</a>
		</div>

		<nav class="header__nav">
			<ul class="header__nav__list">
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
	<main class="main">
		<div class="container">
			 <?php 
	require_once "functions.php";

	$link=mysqli_connect($host,$user,$password,$database)
		or die("error" . mysqli_error($link));


		$query = " SELECT * FROM bikes ORDER BY date DESC;" ;

		

		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		while ($row = mysqli_fetch_assoc($result)){
			
			echo "<div class='news__card'><h1 class='news__card__title'>"; 
			echo $row ['title'] ."</h1>";
			echo "<p>" .$row ['par'] ."</p>" ;
			echo "<p>" .$row ['date'] ." added by admin</p>" ;
			echo "<img src='uploads/". $row ['path'] . "'>";
			echo "</div>";
			
		}
		
	
?>

		</div>
		
	</main>
</body>
</html>