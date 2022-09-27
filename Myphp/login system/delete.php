<?php 
    include 'model.php';
    $model = new Model();
    $ID = $_REQUEST['ID'];
    $delete = $model->delete($ID);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'admin_page.php';</script>";
    }
 ?>