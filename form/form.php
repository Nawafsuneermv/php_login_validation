<?php

$host ="localhost";
$user = "root";
$pass ="";
$database ="form";

$connection = mysqli_connect($host, $user, $pass, $database);

//collecting data

$username = $_POST['_user'];
$email = $_POST['_email'];
//insert data into database

$sql = "INSERT INTO FORM (Username, Email) VALUES ('$username', '$email')";
if(mysqli_query($connection,$sql)){
    echo "submitted sucessfully <br> <br>";
}
// check whether  the connection is proper

if($connection){
    echo "sucessfully connected";
}
else{
    die("couldnot connect");
}
mysqli_close($connection);


?>