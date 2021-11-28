<!DOCTYPE html>
<html>
<body>
<title>Register Page</title>

<h1>Register Here</h1>
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
  background: url(1.png);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  font-family: Arial, Helvetica, sans-serif;
background-image: url("1.png");
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

	<form method="POST" action="registration.php">
    <p>
	<label>Username:</label> <input type="text"  name="user" class="form-control" required>
    </p>
    <p>
	<label>Password:</label> <input type="password"  name="password" class="form-control" ><br><br>
    
	<label>Contact:</label> <input type="contact"  name="contact" class="form-control" ><br><br>
    <label>Email: </label> <input type="email"  name="email" class="form-control" ><br><br>
 
    <label>Gender:</label><input type="radio" name="gender"
  <?php if (isset($gender)&& $gender=="female") echo"checked";?>value="female">Female
  <input type="radio" name="gender"
  <?php if (isset($gender)&& $gender=="male") echo"checked";?>value="male">Male
</p>
    <button type="submit" class="btn btn-primary">submit</button><br>
	<p>
  <label>Already have an account?</label>
<a href=http://localhost/inventory/login-form.php>Click Here</a>
</p>

</form>
</div>
</body>
</center>
</html>