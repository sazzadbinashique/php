<?php
 echo @$name = $_FILES['file']['name'];
 $extension = strtolower(substr($name, strpos($name, '.') +1));
echo @$size = $_FILES['file']['size'];
echo @$type = $_FILES['file']['type'];
echo @$tmp_name = $_FILES['file']['tmp_name'];
//$max_size = 100000;
//$error = $_FILES['file']['error'];
if(isset($name))
{
	if(!empty($name) &&$extension=='png')
	{
		if(($extension=='png')&&$type=='image/png')
		{
		$location = 'uploads/';
		if(move_uploaded_file($tmp_name, $location.$name))
		{
			echo 'file uploaded!';
		}
		else
		{
			echo 'file not uploaded';
		}
		}
	}
	else
	{
		echo 'please choose a file';
	}
}
?>

<form action="file_upload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br><br>
	<input type="submit" value="submit">
</form> 