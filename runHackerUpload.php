<?php

	$file_path = "uploads/";
	$file_path = $file_path . basename($_FILES['uploaded_file']['name']);
	if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$file_path))
	{

		$myfile = fopen($file_path, "r") or die("Unable to open file!");
    	$input = fread($myfile,filesize($file_path));		
    	
    	$fileName = "temp.txt";
    	$inFile = fopen($fileName, "w");
    	fwrite($inFile, $input);
    	fclose($inFile);
		
		$PWD = shell_exec('pwd');
		$PYTHONPATH = '/usr/bin/python';
		$lang = "CPP11";
		switch($lang){
			case "C":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt C');
				break;
			case "CPP11":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt CPP11');
				break;
			case "JAVA":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt JAVA');
				break;
			case "JAVASCRIPT":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt JAVASCRIPT');
				break;
			case "HASKELL":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt HASKELL');
				break;
			case "PYTHON":
				$output = shell_exec('$PYTHONPATH $PWD/hacker.py temp.txt PYTHON');
				break;
		}
		echo $output;
	}
	else
	{
		echo "fail";
	}
	
	

?>
