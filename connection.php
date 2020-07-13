<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sample';

$name = $_POST['username'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

    $conn = new mysqli( 'localhost','root','',"sample") or die("Connection Error: ");
	$sql = "INSERT into contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
    mysqli_query($conn, $sql);


   header ("refresh:2; url=contact.html");

    require_once "contact.html";
?>