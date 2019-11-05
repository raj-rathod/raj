 <?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$address_1= "";
	$address_2= "";
	$mobile   = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$con = mysqli_connect('localhost', 'root', '', 'fts');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$address_1 = mysqli_real_escape_string($con, $_POST['address_1']);
		$address_2 = mysqli_real_escape_string($con, $_POST['address_2']);
		$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
		$password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO user_info (user_id, username, email, mobile, address1, address2, password) 
					  VALUES(NULL,'$username', '$email','$mobile','$address_1', '$address_2',  '$password')";
			$run_query=mysqli_query($con, $query);
			$_SESSION["uid"] = mysqli_insert_id($con);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in ";
			header('location:../profile.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
			$results = mysqli_query($con, $query);
			if (mysqli_num_rows($results) == 1) {
				$row = mysqli_fetch_array($results);
		        $_SESSION["uid"] = $row["user_id"];
		        $_SESSION["username"] = $row["username"];
				$_SESSION['success'] = "You are now logged in";
				header('location: ../profile.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	if (isset($_POST["forgot"])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$mobile = mysqli_real_escape_string($con, $_POST['mobile']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($mobile)) {
			array_push($errors, "Mobile number  is required");
		}if (count($errors) == 0) {
			$query = "SELECT * FROM user_info WHERE username='$username' OR mobile='$mobile'";
			$results = mysqli_query($con, $query);
			if (mysqli_num_rows($results) == 1) {
				$row = mysqli_fetch_array($results);
		        $_SESSION["uid"]= $row["user_id"];
		        $_SESSION["username"]= $row["username"];
				$_SESSION['success'] = "Please reset your password";
				header('location:password.php');
			}else {
				array_push($errors, "Wrong username/ Mobile combination");
			}
		}
		
	}
	if (isset($_POST["reset"])) {
		$user_id=$_SESSION["uid"];
		$username=$_SESSION["username"];
		$password_1 = mysqli_real_escape_string($con, $_POST['password1']);
		$password_2 = mysqli_real_escape_string($con, $_POST['password2']);

		if (empty($password_1)) {
			array_push($errors, "Please Enter new password is required");
		}
		if (empty($password_2)) {
			array_push($errors, "Re-enter password is required");
		}if ($password_1!=$password_2) {
			array_push($errors, "password not match Please Enter password");
		}
		if (count($errors) == 0) {
			$query = "SELECT * FROM user_info WHERE username='$username' AND user_id='$user_id' ";
			$results = mysqli_query($con, $query);
			if (mysqli_num_rows($results) == 1) {
				$password= md5($password_1);
				 $sql="UPDATE  user_info SET password='$password' WHERE user_id='$user_id'AND username='$username'";
                 $run_query=mysqli_query($con,$sql);
                 if ($run_query) {
                 }
			}else {
				array_push($errors, "Wrong username/ Mobile combination");
			}
		}
		
	}

?> 