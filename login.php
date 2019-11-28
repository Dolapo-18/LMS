<?php
  require('includes/db.php');
  session_start();

  $error = "username/password incorrect";
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['email'])){

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);

   
    
    
  //Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE email='$email' and password='".md5($password)."'"  ;
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows == 1){
      $_SESSION['email'] = $email;
      
        header("Location: index.php"); // Redirect user to index.php
      
            }else{
             echo "<div class='alert alert-danger' style='text-align: center; width: 400px; margin: 0px auto'>
            <strong>Caution!</strong> Incorrect Username or Password.
          </div>";        
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

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/parsley.css" rel="stylesheet">
  <link href="assets/css/lms.css" rel="stylesheet">

  
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
        
        <div class="myform">
              <form method="post" id="Signin-Form" action="login.php">
               
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-8">
                      <label for="form_email">Official Email *</label>
                    <input name="email" id="email" type="email" class="form-control" placeholder="e.g (dee@linkageassurance.com)" required data-parsley-type="email">
                      </div>
                  </div>
                </div>
                  
                  <br>
                
                  
                <br>
                <div class="row"> 
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="form_name">Password *</label>
                       <input name="password" id="passwd" type="password" class="form-control" placeholder="Enter Password" required data-parsley-length="[6, 15]" data-parsley-trigger="keyup">
                    </div>
                  </div>

                </div>
                
                <p class=""><!--*Please kindly ensure all fields are filled correctly before submitting.--></p>
                <input type="submit" class="btn btn-primary" value="LOGIN">
                <p>Not registered yet? |<a href='registration.php'> Register Here</a></p>
          </form>
              </div>
      </div>

      
    </div> 
    <br>
    
</div>
           



     <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
      <script src="assets/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script> 
        <script src="assets/parsley.min.js"></script>
        <script src="assets/modal.js"></script>
        <!--<script src="assets/jquery-1.11.3.min"></script>-->
  
</body>
</html>
