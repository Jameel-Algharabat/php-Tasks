<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>PHP Mysql OOP CRUD (Create, Read, Update and Delete)</title>
 </head>
 <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
        
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php
              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);
 
              if (isset($_POST['update'])) {
                if (isset($_POST['name']) &&  isset($_POST['Salary']) && isset($_POST['address'])) {
                  if (!empty($_POST['name']) && !empty($_POST['Salary']) && !empty($_POST['address']) ) {
                     
                    $data['id'] = $id;
                    $data['image'] = $_POST['image'];
                    $data['name'] = $_POST['name'];
                    $data['Salary'] = $_POST['Salary'];
                    $data['address'] = $_POST['address'];
 
                    $update = $model->update($data);
 
                    if($update){
                      echo "<script>alert('record update successfully');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                      echo "<script>alert('record update failed');</script>";
                      echo "<script>window.location.href = 'index.php';</script>";
                    }
 
                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit.php?id=$id");
                  }
                }
              }
          ?>
          <form action="" method="post">
          <div class="form-group">
              <?php  include 'upload.php'; ?>
            </div>
            <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
              </div>
              
              <img src="<?php echo 'images/'. $row['image']; ?>" width='90' height='90' style="border-radius: 50px;"  onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
            
          </div>

            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control">
            </div>
             
            <div class="form-group">
              <label for="">Salary</label>
              <input type="text" name="Salary" value="<?php echo $row['Salary']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <textarea name="address" id="" cols="" rows="3" class="form-control"><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
          </form>
          <div class="row">
        <div class="col-md-12"><a href="index.php" class="btn btn-primary">back</a></div>
        <br><br>
        </div>
      </div>
    </div>
</body>
</html>