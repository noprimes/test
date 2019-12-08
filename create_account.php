<!DOCTYPE html>
<html>
<head>
    
    <title>Users</title>
    
</head>
<body>
    Create an account
    <form action='push_account.php' method = 'post'>
  First Name:<input type='text' name='FirstName'><br>
  Last Name:<input type='text' name='LastName'><br>
  Username:<input type='text' name='username'><br>
  Password:<input type='password' name='password'><br>
  House:<input type='text' name='House'><br>
  Year Group:<input type='text' name='YearGroup'><br>

  <br>

  <!--Creates a drop down list-->
  Sandwich choice:<select name="prefered_sandwich">
		<option value="cheese">cheese</option>
		<option value="ham">ham</option>
	</select>
  <br>
  Sandwich choice:<select name="prefered_crisp">
		<option value="cheese">cheese</option>
		<option value="ham">ham</option>
	</select>
  <br>
  Sandwich choice:<select name="prefered_drink">
		<option value="cheese">cheese</option>
		<option value="ham">ham</option>
	</select>
  <br>
  Sandwich choice:<select name="prefered_bar">
		<option value="cheese">cheese</option>
		<option value="ham">ham</option>
	</select>
  <br>
  Sandwich choice:<select name="prefered_fruit">
		<option value="cheese">cheese</option>
		<option value="ham">ham</option>
	</select>
  <br>
  <!--Next 3 lines create a radio button which we can use to select the user role-->
  <input type='radio' name='role' value='Pupil' checked> Pupil<br>
  <input type='radio' name='role' value='Teacher'> Teacher<br>
  <input type='radio' name='role' value='Admin'> Admin<br>
  <input type='submit' value='Add User'>
</form>

       
</body>
</html>
