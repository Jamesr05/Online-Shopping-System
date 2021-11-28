<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>

</head>

<body>
<h1>ONLINE SHOPPING SYSTEM</h1>
  <link rel='stylesheet' type='text/css' href='style.css' />
</section>
<style>

  form{
    text-align: center;
    position: inherit;
  }
  input[type=text], input[type=password] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  text-align: center;
}
  h1{
    text-align: center;
    color:black;
    padding: 20px;
  }
  body{ margin: 10px;
  padding: 10px;
  background: url(2.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  font-family: Arial, Helvetica, sans-serif;
background-image: url("2.jpg");
height: 100%;
background-repeat:no-repeat;
  }
  p{
    color:black;
  }
  button{
    
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 25%;
 text-align: center;

  }
  </style>



<body>

	<form method="POST" action="login.php">
    <p>
	 <input type="text"  name="user" placeholder="Username"class="form-control" required>
    </p>
    <p>
	 <input type="password"  name="password" placeholder="Password" class="form-control" ><br><br>
    </p>
    <p>
	<input type="checkbox" checked="checked" name="remember"> Remember me <br><br>
    </p>
    <button type="submit" class="btn btn-primary">LOGIN</button><br>
	<p>
    <label>Not member yet?<label>
   <a href="http://localhost/inventory/register-form.php">Register</a>
  </p>
</a>
