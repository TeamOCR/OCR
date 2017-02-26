<?php

$file_path = "uploads/";

$file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
$title =$_FILES['title'];
//$descr=$file_path . basename( $_FILES['uploaded_file']['desc']);
if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
    echo "success";
} else{
    echo "fail";
}
/*
$name=$_FILES['uploaded_file']['name'];
$hostname_localhost ="localhost";
$database_localhost ="gcm";
$username_localhost ="root";
$password_localhost ="root";
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)
or
trigger_error(mysql_error(),E_USER_ERROR);
$time_offset ="525"; // Change this to your time zone
$time_a = ($time_offset * 120);
$time = date("h:i:s",time() + $time_a);
$date= date("d.m.y");
mysql_select_db($database_localhost, $localhost);

//$title = $_POST['title'];
//$desc=$_POST['desc'];
//$title = $_POST['title'];
//$desc=$_POST['desc'];

$query_search = "INSERT INTO images (name,title,descr, time, date)
VALUES ('$name','$title','$descr','$time','$date')";
$query_exec = mysql_query($query_search) 
or die(mysql_error());
echo "success";
*/
 ?>