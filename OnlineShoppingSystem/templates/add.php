<?php
include("submit.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<style>

    body{
    font-family: Arial, Helvetica, sans-serif;    
    padding: 0 2rem 0 2rem;
    background-image:url("backgroundadd1.jpg");
    background-size: cover;

    }
    form {
  padding-top: 100px;
  text-align: center;
  font-size: 25px;
  }
  

  input[type=text], input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  h1{
    text-align: center;
    margin: unset;
    padding: inherit20px;
    font-size: 55px;
    color: black;
}

  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
   
   text-align: center;
  }

  button:hover {
    opacity: 0.8;
  }

    </style>
<body>
    <h1>Add A Product</h1>
    <form action="" method="POST">
    <p>
        <label for="product">Product Name:</label>
        <input type="text" name="product" id="product">
        <label for="price">Price:</label>
        <input type="text" name="price" id="price">
        <p>
        <label for="stock">Stock:</label>
        <input type="text" name="stock" id="stock">
        <select name="category" id="category">
            <option value="Fruits/Vegetables">Fruits/Vegetables</option>
            <option value="Bread/Bakery">Bread/Bakery</option>
            <option value="Beverages">Beverages</option>
            <option value="Condiments/Spices">Personal Care</option>
            <option value="Meat">Meat</option>
            <option value="Snacks">Snacks</option>
        </select>
</p>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    </p>
    <?php
include("submit.php");
?>

    <?php
    if(isset($_POST['submit']))
    {
        $product=$_POST['product'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $category=$_POST['category'];


        $result=mysqli_query($mysqli,"INSERT into item_list values('','$product','$price','$stock','$category')");

        if($result)
        {
            echo "SUCCESS";
        }
        else
        {
            echo "FAILED";
        }
    }
?>

