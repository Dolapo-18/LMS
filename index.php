<?php
include("auth.php"); 
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="https://linkageassuranceplc.com/sites/default/files/favicon%20resized_2.png" type="image/png">

    <title>Learning Mgt. Sys.</title>
    <link rel="stylesheet" type="text/css" href="asset/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="asset/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="asset/css/styles.css" type="text/css"/>

    <script type="text/javascript">
  window.history.forward();
  function noBack() { window.history.forward(); }
  </script>
  </head>
  <body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
    <div class="be-wrapper">


      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header" style="padding-top: 4px">
            <a href="index.php" class="navbar-brand"><img src="img/logo1.png" alt="Linkage's logo"></a>
          </div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="asset/img/avatar4.png" alt="Avatar"><span class="user-name"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                      <div class="user-name"><?php echo $_SESSION['email']; ?></div>
                      <div class="user-position online">Available</div>
                    </div>
                  </li>
                  
                  <li><a href="logout.php"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>CML 101: OVERVIEW OF MONEY LAUNDERING ACT.</span></div> 
          </div>
        </div>
      </nav>


      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">CML 101: OVERVIEW OF MONEY LAUNDERING ACT.</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <p style="font-size: 14px; text-align: center; color: black;" class="page-head-title"><b style="color:DodgerBlue;">Welcome! &nbsp</b><i> <?php echo $_SESSION['email']; ?></i></p>
                  <li class="divider">Menu</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-book"></i><span>My Courses</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="index.php">CML 101</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
      </div>


      <div class="be-content">
         <!-- <div class="page-head">  
          <ol class="breadcrumb page-head-nav">
                <li><a href="index.php">My Courses</a></li> 
                <li class="active"><b> </b></li>
          </ol> 
                 </div>  -->
        <div class="main-content container-fluid">
          <h3 class="text-center" style="top: 0px">
          <iframe src="courses/CML 101_OVERVIEW OF MONEY LAUNDERING ACT.pdf" pluginspage="index.php" width="1050px" height="550px" /></iframe>

          <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary" style="margin-left:850px;">Click For Questions</button>
        </div>
       

        

      <div id="md-custom" tabindex="-1" role="dialog" class="modal fade">
          <div style="width: 700px;" class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
              </div>
              <div class="modal-body">
                <div class="text-center">
                  <div class="text-primary"><span class="modal-main-icon mdi mdi-check"></span></div>
                  <h3>Awesome!</h3>
                  <p>Ensure that you have revised your course carefully before proceeding.<br><b>(You won't be able to go back once you proceed.)</b></p>
                  <div class="xs-mt-50"> 
                    <button type="button" data-dismiss="modal" class="btn btn-space btn-danger">Cancel</button>
                    <a href="questions.php" type="button" data-dismiss="" class="btn btn-space btn-primary" >Proceed</a>
                  </div>
                </div>
              </div>
              <div class="modal-footer"></div>
            </div>
          </div>
    </div>

      </div>



    </div>






    <script src="asset/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="asset/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="asset/js/main.js" type="text/javascript"></script>
    <script src="asset/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });
      
    </script>
  </body>
</html>