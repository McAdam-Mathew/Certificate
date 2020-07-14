<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "certificate";

$name = $_POST['name'];
$permit = $_POST['permit'];
$company = $_POST['company'];
$date = $_POST['date'];

    
echo "DB not connected";

$conn = mysqli_connect('$dbServername','$dbUsername','$dbPassword','$dbName') or die("Connection Error: ");
    if(!$conn)
    {
        echo "DB not connected";
    }
    else
    {
        echo "DB connected";
    }
    $sql = "INSERT into registration (name,date,permit,company) VALUES ('$name','$date','$permit','$company')";
    mysqli_query($conn, $sql);


   header ("refresh:2; url=questions.html");

   
?>