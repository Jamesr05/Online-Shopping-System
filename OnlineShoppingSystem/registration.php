<?php
session_start();
header('location: register-form.php');
$con=mysqli_connect('localhost','root','1234');
mysqli_select_db($con, 'inventory');

$name =$_POST['user'];
$pass=$_POST['password'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$s="select * from user where name='$name' ";
$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken";
} else{
    $reg="insert into user(name,password,contact,email,gender)values('$name','$pass','$contact','$email','$gender')";
    mysqli_query($con,$reg);
    echo "Register Successful";
}
?>