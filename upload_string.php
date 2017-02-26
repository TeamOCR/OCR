<?php

$file_path = "uploads/";

$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
$title =$_FILES['title'];
//$descr=$file_path . basename( $_FILES['uploaded_file']['desc']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
    echo "Success, File received\n";
    $myfile = fopen($file_path, "r") or die("Unable to open file!");
    echo fread($myfile,filesize($file_path));
} else{
    echo "fail";
}
