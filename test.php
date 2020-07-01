<?php

if(isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);
    echo "The file has just uploaded successfully";
} else echo "Error!";

?>

<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="submit" name="submit" value="Upload">
</form>

<?php $path = scandir("uploads");
foreach($path as $f){
    if($f != '.' and $f != '..'){
    	echo $f;
    echo "<img src='uploads/$f'>" ;
    }
}

?>
