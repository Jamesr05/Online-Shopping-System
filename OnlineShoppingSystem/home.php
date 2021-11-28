<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location:login-form.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>ONLINE SHOPPING SYSTEM </title>
</head>
<style>
  h1 {
background-color: black;
text-align: center;
color:white;
font-family: Arial, Helvetica, sans-serif;
}
body {
  font-family: "Lato", sans-serif;
  padding: 0 2rem 0 2rem;
    height: 100%;
    background-image: url("home-background.jpg");
    background-size: cover;
}
h2 {
font-family: Arial, Helvetica, sans-serif;
color: whitesmoke;
box-sizing: border-box;
width: 300px;
height: 30px;
padding: 30px;

}

.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 4px 8px 25px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}


</style>
<body>
<div class="myDiv">
<div class="myDiv">
  <h1> ONLINE SHOPPING SYSTEM </h1>
</div>
<div class="sidenav">
<h2> Welcome <?php echo $_SESSION['username']; ?> </h2>
   <ul>
  <p>
  <a  href="http://localhost/OnlineShoppingSystem/templates/index.php">PRODUCT LIST</a>
  <a href="http://localhost/OnlineShoppingSystem/templates/add.php">ADD PRODUCT</a>
  <a href="http://localhost/OnlineShoppingSystem/templates/search.php">SEARCH FOR PRODUCT</a>
  <a href="http://localhost/OnlineShoppingSystem/templates/cart.php">CART</a>
  <a href="http://localhost/OnlineShoppingSystem/templates/index1.php">SHOP</a>
  <a href="http://localhost/OnlineShoppingSystem/templates/info.php">USER</a>
  <a href="logout.php">LOGOUT</a>
 </p>
 </ul>
</div>


</div></body>
</html>

