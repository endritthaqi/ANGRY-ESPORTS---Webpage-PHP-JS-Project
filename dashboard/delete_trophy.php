<?php 
    include '../modelcontroller/model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->deleteTrophy($id);
 
    if ($delete) {
        echo "<script>alert('delete successfully');</script>";
        echo "<script>window.location.href = 'trofet.php';</script>";
    }
 ?>