<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $Middle_name = mysqli_real_escape_string($conn, $_POST['Middle_name']);
   $Family_name = mysqli_real_escape_string($conn, $_POST['Family_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, Middle_name, Family_name, email, password, user_type) VALUES('$name','$Middle_name', '$Family_name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <label for="name" class="form-label "><b>First name:</b></label>
      <input type="text" name="name" required placeholder="enter your name">
      <label for="name" class="form-label "><b>Middle name:</b></label>
      <input type="text" name="Middle_name" required placeholder="enter your Middle name">
      <label for="name" class="form-label "><b>Family name:</b></label>
      <input type="text" name="Family_name" required placeholder="enter your Family name">
      <label for="email" class="form-label mt-0"><b>Email:</b></label>
      <input type="email" name="email" required placeholder="enter your email">
      <label for="pass" class="form-label"><b>Password:</b></label>
      <input type="password" name="password" required placeholder="enter your password">
      <label for="pass" class="form-label"><b>Password:</b></label>
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>