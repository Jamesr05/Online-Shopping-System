<?php 

include_once("h1.php");
$con = connection();

$sql = "SELECT * FROM `item_list` ORDER BY `id` ASC";
$products = $con->query($sql) or die ($con->error);
$row = $products->fetch_assoc();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product List</title>
 </head>
 <style>
  h1 {
background-color: black;
text-align: center;
color:white;
font-family: Arial, Helvetica, sans-serif;
}
    body{
    font-family: Arial, Helvetica, sans-serif;    
    padding: 0 2rem 0 2rem;
    background-image: url("productlist1.jpg");
    background-size: cover;

    
}

table,td,th {
    border: 1px solid #ddd;
    padding: 8px;
    background-color: black;
    border: 5px outset white;
color:white;
  }
  
tr:nth-child(even){
    background-color: black;
}
  
tr:hover {
    background-color: #ddd;
}
  
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black ;
    color: white;
  }
  table.center {
  margin-left: auto; 
  margin-right: auto;
}

</style>

 <body>
     <h1> ONLINE SHOPPING SYSTEM </h1>
</br>
</br>
<table class= "center">
 <thead>
<tr>
<th>PRODUCT</th>
  <th>STOCK</th>
  <th>CATEGORY</th>
  <th>PRICE</th>
   </tr>
  </thead>
  <tbody>
 <?php do{ ?>
<tr>
<td><?php echo $row['product']; ?> </td>
<td><?php echo $row['stock']; ?></td>
<td><?php echo $row['category']; ?></td>
<td><?php echo $row['price']; ?></td>
</tr>
<?php }while($row = $products->fetch_assoc()) ?>
					

</tbody>
</table>
 </body>
 </html>
 
