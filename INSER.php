<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "KOMAL";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);  //IMPORTANT

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    
}

$First =$_GET["first"];
$Last =$_GET["naam"];
$Email =$_GET["email"];
$PASSWORD=$_GET["password"];
$Phone=$_GET["number"];

// Sql query to be executed
$sql = "INSERT INTO stud_records  VALUES('$First','$Last','$Email','$PASSWORD','$Phone') ";

$result = mysqli_query($conn, $sql);                                // IMPORTANT

if($result){

    echo "Registration successfully!<br>";
}  
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}

?>