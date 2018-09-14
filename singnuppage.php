 <!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		 <link rel="stylesheet" href="singnupage.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
	</head>
	<body >
		<header>
			<title> Sign up</title>
			<h1>Sign up</h1>
		</header>
		<div class="container">
			<div class="row">

				<div class="col-2"></div>
				<div class="col-8" >
					<form action="registration.php" method="get" enctype="multipart/form-data" >
						<p class="opacity"> Please, sign up</p>
						<label>First Name</label><br>
						<input placeholder="First name" type="text" id="f_name" name="f_name" required name="f_name"> <br><br>
						<label>Last Name</label><br>
						<input placeholder="Last name" type="text" id="l_name" name="l_name" required name="l_name"> <br><br>
						<label>Create a Usename</label><br>
						<input placeholder="Username" type="text" id="u_name" required name="u_name"><br>


						<label>UofA email</label><br>
						<input placeholder="CCID@ualberta.ca" type="text" id="emails" required name="emails"> <br><br>
						<label> confirm email</label><br>
						<input placeholder="CCID@ualberta.ca" type="text" required name="convfirm_email"><br><br>
						<label>Create a Password</label><br>
						<input placeholder="Password" type="text" id="password" required name="password"><br><br>
						<label>Confirm password</label><br>
						<input placeholder="password" type="text" required name="confirm_pass" id="confirm_pass"> <br><br>

						<label>Curent ESLclass/University year</label><br>
						<input placeholder="class_y" type="text"  id="class_y" name="class_y"> <br><br>

						<label>Hobbies</label><br>
						<input placeholder="hobbies" type="text"  id="hobbies" name="hobbies"> <br><br>

						 <label>Target degree</label><br>
						<input placeholder="t_degree" type="text"  id="t_degree" name="t_degree"> <br><br>

						<label>Role</label><br>
						<input placeholder="role" type="text"  id="role" name="role"> <br><br>

						<label>Bio</label><br>
						<textarea rows="6"  placeholder="Bio" type="text"  id="Bio" name="Bio"></textarea><br><br>
						<label>Photo</label><br>
						<input  type="file"  id="picture" name="picture" accept="image*/"> <br><br>
						<button type="submit" class="signup"> Sign up</button>
					</form>
			 </div>
			<div class="col-2"></div>
		</div>
	</div>
	</body>

</html>
