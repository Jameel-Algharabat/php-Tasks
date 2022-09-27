<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
    .span{
        
        margin-top: 50px;
        text-align: center;
        
        
         
    }
    .border-danger{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        padding: 20px;
        background-color: #fbd0d9;
        border-radius: 10px;
        
    }
</style>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>super admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an super admin page</p>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

<div class="container">
      <div class="row">
        <div class="col-md-12">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>user_type</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php

                include 'model.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                foreach($rows as $row){ 
            ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password_']; ?></td>
                <td><?php echo $row['user_type']; ?></td>
                <td><?php echo $row['Salary']; ?></td>
                <td>
                
                <a href="delete.php?ID=<?php echo $row['ID']; ?>" class="badge badge-danger">Delete</a>
                <a href="edit.php?ID=<?php echo $row['ID']; ?>" class="badge badge-success">update</a>
                </td>
            </tr>

            <?php
                }
            }else{
                echo "no data";
            }
            ?>
            </tbody>
        </table>
        </div>
        
        <div class="span">
        <span class="border border-danger">
        total salary =
        <?php
                $connn = mysqli_connect( "localhost" , "root" , "" , "user_db") or die(mysqli_error());

                $select = " SELECT AVG(Salary) AS avg FROM `user_form`";
                $r= mysqli_query($connn, $select);
            
                while($row = mysqli_fetch_assoc($r) ){
                    $b = $row['avg'];
                }
                echo $b;
                        
   
                        ?></span>
        
        <span class="border border-danger">
        number of emplyees =
            <?php
        $connn = mysqli_connect( "localhost" , "root" , "" , "user_db");
        $x = mysqli_query ($conn , " SELECT count(id) as id FROM user_form" ) ;
        $s = mysqli_fetch_array($x);
        echo $s ["id"]; 
        ?></span>
        
        <span class="border border-danger">
        highest salary =
            <?php
        $connn = mysqli_connect( "localhost" , "root" , "" , "user_db");
        $x = mysqli_query ($conn , " SELECT max(Salary) as Salary FROM user_form" ) ;
        $s = mysqli_fetch_array($x);
        echo $s ["Salary"]; 
        ?></span>


<span class="border border-danger">
lowest salary =
    <?php
        $connn = mysqli_connect( "localhost" , "root" , "" , "user_db");
        $x = mysqli_query ($conn , " SELECT min(Salary) as Salary FROM user_form" ) ;
        $s = mysqli_fetch_array($x);
        echo $s ["Salary"]; 
        ?>
        </span>

            </div>
    </div>
    </div>
</body>
</html>