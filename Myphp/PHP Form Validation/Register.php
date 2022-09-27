<?php
session_start ( ) ;

    include ( "connection.php" ) ; 
    include ( "functions.php" ) ;
    



    if ($_SERVER['REQUEST_METHOD'] =="POST")
    {
    // something was posted
    $FirstName = $_POST ['FirstName'];
    $MiddleName = $_POST ['MiddleName'];
    $FamilyName	 = $_POST ['FamilyName	'];
    $Email = $_POST ['Email'];
    $Phone = $_POST ['Phone'];
    $Password = $_POST ['Password'];
    $user_id = $_POST ['user_id'];
    if(!empty($user_name ) && !empty($password ) && !is_numeric($user_name ) )
    {

   
        // save to database
        $user_id = random_num(20);
        $query = " insert into user (user_id, FirstName, MiddleName, FamilyName, Email, Phone, Password, ) values ( $user_id, $FirstName, $MiddleName, $FamilyName, $Email, $Phone, $Password, ) " ;
    
        mysqli_query($query);
        header ( "Location: login.php");
        die;
    } else
   {
    
        echo "Please enter some valid information!" ;
    }
    }
?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
<title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Form-sty.css" />
    
</head>

<body>
    
 
    <div class="col">
       
        <div id="signup" class="row ">
            <div class="container ">
                <h1 class="h1 text-center mt-5 mb-4"><b>Register</b></h1>
                <div class="border-Register w-50 register-section" >
                    <form action="" class="mt-0" id="sign-up" onsubmit="registerSubmit()">
                        <!--  -->
                        <div>
                            <label for="name" class="form-label "><b>First name:</b></label>
                            <br />
                            <input type="text" class="form-control mb-0 py-2" name="name" id="name" />
                            <small id="name-error" class="md-4"></small><br/>
                            <br>
                        </div>
                        <div>
                            <label for="name" class="form-label "><b>Middle name:</b></label>
                            <br />
                            <input type="text" class="form-control mb-0 py-2" name="name" id="name" />
                            <small id="name-error" class="md-4"></small><br/>
                            <br>
                        </div>
                        <div>
                            <label for="name" class="form-label "><b>Family name:</b></label>
                            <br />
                            <input type="text" class="form-control mb-0 py-2" name="name" id="name" />
                            <small id="name-error" class="md-4"></small><br/>
                            <br>
                        </div>
                        <div>
                            <label for="email" class="form-label mt-0"><b>Email:</b></label>
                            <input name="email" id="email" class="form-control mb-0 py-2" />
                        </div>
                        <small id="email-error" class="md-4"></small><br/>
                        <br>
                        <div>

                        <label for="phone" class="form-label"><b>Phone:</b></label>
                        <input type="number" name="phone" id="phone" class="form-control mb-0 py-2" />
                        <small id="tel-error" class="md-4"></small><br /><br></div>
                        <label for="pass" class="form-label"><b>Password:</b></label>
                        <div class="input-group col-12">
                            <input type="password" class="form-control py-2" aria-describedby="button-addon2" id="pass" />

                            <br>
                        </div>
                        <small id="pass-error" class="md-4"> </small><br />
                        <div class="mb-3">

                        </div>

                        <div class="d-grid gap-2">
                            <input class="btn btn-primary sign-up btn-lg mt-2 mb-2" id="signUp" type="submit" value="Sign up" />

                          <!-- <a href="pages/log in.html ">
                                <input id="loginReg" class="btn btn-outline-secondary btn-lg container-fluid g-0" type="button"
                                    value="Already have an account?login" />
                            </a> -->
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <br><br>
    <script src="js.js"></script>
</body>

</html>