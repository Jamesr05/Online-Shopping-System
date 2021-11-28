<?php 
    include 'f.php';
    // submit btn 
    
    if(isset($_POST['add_product'])){
        $product= mysqli_real_escape_string($connection, $_POST['product']);
        $stock = mysqli_real_escape_string($connection, $_POST['stock']);
        $SubmitQuery = "INSERT INTO item_list (product, stock) VALUES ('$product', '$stock')";
        if(mysqli_query($connection, $SubmitQuery)){
            header('Location: add.php');
        }else{
            echo mysqli_error($connection);
            die();
        }
    }
?>