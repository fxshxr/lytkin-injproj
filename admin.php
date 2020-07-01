 <?php 


 if (isset($_POST['title']) && isset($_POST['par']) && isset($_POST['section']) && isset($_POST['submit']) and $_FILES ){

	require_once "functions.php";

	$link=mysqli_connect($host,$user,$password,$database)
		or die("error" . mysqli_error($link));

		$lastupdated = date("Y-m-d H:i:s");
		$title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
		$par = htmlentities(mysqli_real_escape_string($link, $_POST['par']));
		$section = htmlentities(mysqli_real_escape_string($link, $_POST['section']));
		move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
   		$path = $_FILES['file']['name'];

	if ( $section == 1){
	$query = " INSERT INTO news VALUES ('$title','$par','$lastupdated','$path')"  ;
	} else if ($section == 2) {
		$query = " INSERT INTO reviews VALUES ('$title','$par','$lastupdated','$path')"  ;
	}
	else if ($section == 3) {
		$query = " INSERT INTO bikes VALUES ('$title','$par','$lastupdated','$path')"  ;
	}
	else if ($section == 4) {
		$query = " INSERT INTO store VALUES ('$title','$par','$lastupdated','$path')"  ;
	}
	
	$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

	if(!$result)
	{
	    echo "Выполнение запроса прошло успешно";
}



	mysqli_close($link);

}
?>
<?php

if(isset($_POST['submit']) and $_FILES){
    
    echo "The file has just uploaded successfully";
} else echo "Error!";

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin-Panel</title>
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
	<div class="container">
	<main class="admin__main">
	<h1>Add article</h1>
	
	<form action="" method="post" enctype="multipart/form-data">
		<label for="">section
			<select name="section" id="">
				<option value="1">News</option>
				<option value="2">Reviews</option>
				<option value="3">Bikes</option>
				<option value="4">Store</option>
			</select>
		</label>
		<br>
	<label for="">Picture (Функция загрузки файлов не работает (возможно из-за ограничений сервера))<input  type="file" name="file"></label>
	<br>
		<label for="">title<input type="text" name="title" required></label>
		<br>
		<label for="">paragraph
			<textarea required  id="" cols="30" rows="10" name="par" ></textarea>
		</label>
		<br>

		<input type="submit" name="submit" value="Add article" class="button">
	</form>
</main>
	</div>
	<footer class="footer">
		<div class="container">
			<p class="footer__text"> Инженерный проект Лыткин И.М. 191-322</p>
			<a href="https://github.com/fxshxr/lytkin-injproj" class="git">GIT</a>
		</div>
	</footer>
</body>
</html>