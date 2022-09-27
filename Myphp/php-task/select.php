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
  include 'include1.php';

  if($connection->connect_error){
   die("connection failed: ". $connection->connect_error);
  }

//Select
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "task";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// $sql = "SELECT 	ID , FirstName, age FROM students";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["age"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();





//
  $sql = "SELECT * FROM students";
  $result =$connection->query($sql);
  if(!$result){
    die("Invalid query: ". $connection->error);
  }
  while($row=$result->fetch_assoc()){

    echo" <tr>
    <td>".$row["FirstName"]."</td>
    <td>".$row["Middle-name"]."</td>
    <td>".$row["family-name"]."</td>
    <td>".$row["birth"]."</td>
    <td>".$row["age"]."</td>
    <td>".$row["Educational-level"]."</td>

  </tr>";
  }
  
 ?>
