<?php include_once('functions.php'); ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Image Preview and Upload</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">

</head>
  <body class="hm-gradient">
    
    <main>
        
        <!--MDB Tables-->
        <div class="container mt-4">

            <div class="text-center darken-grey-text mb-4">
                <a class="btn btn-danger btn-md" href="upload.php" >Add new user<i class="fa fa-download pl-2"></i></a>
            </div>
            <div class="card ">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="py-3 text-center font-bold font-up blue-text">All profiles</h2>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-hover table-responsive container">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th scope="row">#</th>
                                <th class="th-lg"><a href="">Username</a></th>
                                <th class="th-lg"><a href="">Image</a></th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                           <?php foreach($user as $item): ?>

                           <tr>
                           <td>
                             <?php echo $item['id']; ?>
                           </td>
                           <td>
                             <?php echo $item['name']; ?>
                           </td>
                           <td>
                            <img src="<?php echo 'images/'. $item['image']; ?>" width='90' height='90'> 
                           </td>
                           </tr>
                           
                           <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-4">
        </div>
      
    </main>
  
</body>
