<?php
  require('includes/db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['firstname'])){
    $firstname = stripslashes($_REQUEST['firstname']); // removes backslashes
    $firstname = mysqli_real_escape_string($con,$firstname); //escapes special characters in a string
    $lastname = stripslashes($_REQUEST['lastname']);
    $lastname = mysqli_real_escape_string($con,$lastname);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $department = stripslashes($_REQUEST['department']);
    $department = mysqli_real_escape_string($con,$department);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $confirmpass = stripslashes($_REQUEST['password']);
    $confirmpass = mysqli_real_escape_string($con,$password);

   
        $query = "INSERT into `users` (firstname, lastname, email, department, password) VALUES ('$firstname', '$lastname','$email','$department','".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
        	
        	//$msg = "You are registered successfully, kindly login to continue";
        	header("Location: login.php");
			
        	
        	
            echo "<div class='myForm'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }    

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Learning Mgt. Sys.</title>

	<!-- favicon -->
	<link rel="shortcut icon" href="https://linkageassuranceplc.com/sites/default/files/favicon%20resized_2.png" type="image/png">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

 	<!-- Libraries CSS Files -->
	<!--<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
	<link href="lib/animate-css/animate.min.css" rel="stylesheet">


 	<!-- Main Stylesheet File -->
  <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/parsley.css" rel="stylesheet">
    <link href="assets/css/lms.css" rel="stylesheet">

    <style>
    	
    </style>

</head>
<body>



<div class="container">

	<div class="row">
		<div id="logo">
			<img src="img/logo1.png" alt="Linkage's logo">
			<hr>
		</div>

	<br>
	</div>



		<div class="row">
			<div class="col-md-6 ">
				<div class="bodyImage">
			        <img src="img/image.png" alt="body's image">

	            </div>
			</div>

			<div class="col-md-6 ">
				
				<div class="myForm">
			        <form method="post" id="Signin-Form" role="form" action="">
		            
		            <div class="row">
		              <div class="col-md-4">
		                <div class="form-group">
		                  <label for="form_name">Firstname *</label>
		                   <input type="text" id="firstname" name="firstname" class="form-control" placeholder="firstname" required data-parsley-pattern="^[a-zA-Z ]+$">
		                  
		                </div>
		              </div>

		              <div class="form-group">
		                  <div class="col-md-4">
		                    <label for="form_lastname">Lastname *</label>
		                      <input type="text" id="lastname" name="lastname" class="form-control" placeholder="lastname" required data-parsley-pattern="^[a-zA-Z ]+$">
		                      
		                   </div>
		              </div>
		            </div>

		            <div class="row">
		              <div class="form-group">
		                <div class="col-md-8">
		                  <label for="form_email">Official Email *</label>
		                <input name="email" id="email" type="email" class="form-control" placeholder="e.g (dee@linkageassurance.com)" required data-parsley-type="email">
		                  </div>
		              </div>
		            </div>
		              
		              <br>
		            <div class="row">
		            <div class="form-group">
		                <div class="col-md-8">
		                  <label for="form_department">Department *</label>
		                    <select class="form-control" id="department" name="department" required>
		                      <option value="" selected="selected"> - Click to Select - </option>
		                      <option value="Administrator">Administrator</option>
		                      <option value="Audit">Audit</option>
		                      <option value="Claims">Claims</option>
		                      <option value="Compliance">Compliance</option>
		                      <option value="Corporate-Affairs">Corporate Affairs</option>
		                      <option value="ERM">ERM</option>
		                      <option value="Finance">Finance</option>
		                      <option value="HSE">HSE</option>
		                      <option value="Human-Resourses">Human Resourses</option>
		                      <option value="Investment">Investment</option>
		                      <option value="IT">IT</option>
		                      <option value="Legal">Legal</option>
		                      <option value="Marketing">Marketing</option>
		                      <option value="Re-Insurance">Re-Insurance</option>
		                      <option value="Strategy">Strategy</option>
		                      <option value="Technical">Technical</option>
		                   </select>  
		                  </div>
		              </div>
		            </div>
		              
		            <br>
		            <div class="row">
		              <div class="col-md-4">
		                <div class="form-group">
		                  <label for="form_name">Password *</label>
		                   <input name="password" id="passwd" type="password" class="form-control" placeholder="Enter Password" required data-parsley-length="[6, 15]" data-parsley-trigger="keyup">
		                </div>
		              </div>

		              <div class="form-group">
		                  <div class="col-md-4">
		                    <label for="form_lastname">Confirm Password *</label>
		                      <input name="password" id="confirm-passwd" type="password" class="form-control" placeholder="Retype Password" required data-parsley-equalto="#passwd" data-parsley-trigger="keyup">
		                   </div>
		              </div>

		            </div>
		            
		            <p>*Please kindly ensure all fields are filled correctly before submitting.</p>
		            <input type="submit" class="btn btn-primary" value="REGISTER ME!">
		            <p> Want to LogIn? |<a href='login.php'> Login Here</a></p>
          </form>
	            </div>
			</div>

			
		</div> 
		<br>

		
			
	
</div>




	  <script src="assets/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/parsley.min.js"></script>
        <script src="assets/modal.js"></script> 
	
</body>
</html>