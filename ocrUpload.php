<?php
	
	
	$file_path = "uploads/";
	$file_path = $file_path . basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$file_path))
	{
		$output = passthru("python OCR_Engine.py $file_path");
		echo $output;
	}
	else
	{
		echo "fail";
	}

?>