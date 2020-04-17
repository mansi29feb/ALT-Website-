<?php
$servername = 'localhost';
$dbuser = 'root';
$dbpass = '';
$database = 'altcoar_alt-commerce';

$dbCons =  mysqli_connect($servername, $dbuser, $dbpass, $database) or die('Could not connect: ' . mysql_error());

$name =  mysqli_real_escape_string($dbCons,$_POST['name']);
$email =  mysqli_real_escape_string($dbCons,$_POST['email']);
$subject =  mysqli_real_escape_string($dbCons,$_POST['subject']);
$msg =  mysqli_real_escape_string($dbCons,$_POST['msg']);

$sql = "INSERT INTO user_comment(name, email,subject,msg)values('".$name."','".$email."','".$subject."','".$msg."')";
mysqli_query($dbCons,$sql);
?>