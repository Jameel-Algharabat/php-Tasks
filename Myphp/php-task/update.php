<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>
<body style="margin:50px;">
    
<table class="table border">
  <tr>
    
    <th>first name</th>
    <th>Middle name</th>
    <th>family name</th>
    <th>Date of birth</th>
    <th>age</th>
    <th>Educational level</th>
    
  </tr>
<?php

  $connection =new mysqli("localhost", "root", "", "task");


  if($connection->connect_error){
   die("connection failed: ". $connection->connect_error);
  }

  $sql = "SELECT * FROM students";
  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){

    echo" <tr>
    
    <td>".$row["FirstName"]."</td>
    <td>".$row["Middle_name"]."</td>
    <td>".$row["family_name"]."</td>
    <td>".$row["birth"]."</td>
    <td>".$row["age"]."</td>
    <td>".$row["Educational_level"]."</td>

  </tr>";
  }
  
 ?>
<?php //include 'include2.php'; ?>
<?php
$servername = "localhost";
$username = "root";$password = "";
$dbname = "task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE students SET FirstName='sam' WHERE id=4";

if ($conn->query($sql) === TRUE) {
  echo "Record updated ";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>