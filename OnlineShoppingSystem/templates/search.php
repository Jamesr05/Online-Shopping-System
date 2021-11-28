
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `item_list` WHERE CONCAT(`id`, `product`, `price`, `stock`,`category`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `item_list`";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "1234", "inventory");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
//showing the table database 'item_list'
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search A Product</title>
        <h1>Search A Product</h1>
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
    background-image:url("searchbg2.jpg");
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
    background-color: #00fbff;
}
  
tr:hover {
    background-color: #ddd;
}
  
th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color: white;
  }
  table.center {
  margin-left: auto; 
  margin-right: auto;
}
input{ background-color:black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
   
   text-align: center;

}

</style>

    </head>
    <body>
        
        <form action="" method="Post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Search"><br><br>
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Stock</th>
                </tr>

      
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['price'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['stock'];?></td>
                    
                </tr>
                <?php endwhile;?>
            </table>
        
        </form>
        
    </body>
</html>



