<?php 

include_once("h1.php");
$con = connection();

$sql = "SELECT * FROM `user` ORDER BY `name` ASC";
$names = $con->query($sql) or die ($con->error);
$row = $names->fetch_assoc();
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Users Account</title>
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
    background-image: url("3.jpg");
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

</style>




 <body>
     <h1> Users Account</h1>
</br>
</br>
<table class= "center">
 <thead>
<tr>
<th>NAME</th>
<th>PASSWORD</th>
  <th>CONTACT</th>
  <th>EMAIL</th>
  <th>GENDER</th>
   </tr>
  </thead>
  <tbody>
 <?php do{ ?>
<tr>
<td><?php echo $row['name']; ?> </td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['gender']; ?></td>
</tr>
<?php }while($row = $names->fetch_assoc()) ?>

</tbody>
</table>
 </body>
 </html>
 
