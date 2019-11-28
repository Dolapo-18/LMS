<?php
include("auth.php"); 
 
 ?>

<?php
      require('includes/db.php');

      // If form submitted, insert values into the database.
      if (isset($_POST['submit'])){

      $email = $_SESSION['email'];

      $rad1 = stripslashes($_REQUEST['rad1']); // removes backslashes
      $rad1 = mysqli_real_escape_string($con,$rad1); //escapes special characters in a string

      $rad2 = stripslashes($_REQUEST['rad2']);
      $rad2 = mysqli_real_escape_string($con,$rad2);

      $rad3 = stripslashes($_REQUEST['rad3']);
      $rad3 = mysqli_real_escape_string($con,$rad3);

      $rad4 = stripslashes($_REQUEST['rad4']);
      $rad4 = mysqli_real_escape_string($con,$rad4);

      $rad5 = stripslashes($_REQUEST['rad5']);
      $rad5 = mysqli_real_escape_string($con,$rad5);

      $rad6 = stripslashes($_REQUEST['rad6']);
      $rad6 = mysqli_real_escape_string($con,$rad6);

      $rad7 = stripslashes($_REQUEST['rad7']);
      $rad7 = mysqli_real_escape_string($con,$rad7);

      $rad8 = stripslashes($_REQUEST['rad8']);
      $rad8 = mysqli_real_escape_string($con,$rad8);

      $rad9 = stripslashes($_REQUEST['rad9']);
      $rad9 = mysqli_real_escape_string($con,$rad9);

      $rad10 = stripslashes($_REQUEST['rad10']);
      $rad10 = mysqli_real_escape_string($con,$rad10);

      $rad11 = stripslashes($_REQUEST['rad11']);
      $rad11 = mysqli_real_escape_string($con,$rad11);

      $rad12 = stripslashes($_REQUEST['rad12']);
      $rad12 = mysqli_real_escape_string($con,$rad12);

      $rad13 = stripslashes($_REQUEST['rad13']);
      $rad13 = mysqli_real_escape_string($con,$rad13);

      $rad14 = stripslashes($_REQUEST['rad14']);
      $rad14 = mysqli_real_escape_string($con,$rad14);

      $rad15 = stripslashes($_REQUEST['rad15']);
      $rad15 = mysqli_real_escape_string($con,$rad15);

      $rad16 = stripslashes($_REQUEST['rad16']);
      $rad16 = mysqli_real_escape_string($con,$rad16);

      $rad17 = stripslashes($_REQUEST['rad17']);
      $rad17 = mysqli_real_escape_string($con,$rad17);

      $rad18 = stripslashes($_REQUEST['rad18']);
      $rad18 = mysqli_real_escape_string($con,$rad18);

      $rad19 = stripslashes($_REQUEST['rad19']);
      $rad19 = mysqli_real_escape_string($con,$rad19);

      $rad20 = stripslashes($_REQUEST['rad20']);
      $rad20 = mysqli_real_escape_string($con,$rad20);

      $total = stripslashes($_REQUEST['mytotal']);
      $total = mysqli_real_escape_string($con,$total);

      $percentage = stripslashes($_REQUEST['mypercentage']);
      $percentage = mysqli_real_escape_string($con,$percentage);

     
          $query = "INSERT into `grades` (email, rad1, rad2, rad3, rad4, rad5, rad6, rad7, rad8, rad9, rad10, rad11, rad12, rad13, rad14, rad15, rad16, rad17, rad18, rad19, rad20, total, percentage) VALUES ('$email', '$rad1', '$rad2','$rad3','$rad4','$rad5','$rad6','$rad7','$rad8','$rad9','$rad10','$rad11','$rad12','$rad13','$rad14','$rad15','$rad16','$rad17','$rad18','$rad19','$rad20', '$total', '$percentage')";
          $result = mysqli_query($con,$query);
          if($result){
            

            header("Location: login.php");
            session_destroy();
              
          }
      }else{}
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
    
    
  </head>
  <body>

   

    
     

    <div class="be-wrapper">


      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header" style="padding-top: 4px">
            <a href="index.php" class="navbar-brand"><img src="img/logo1.png" alt="Linkage's logo"></a>
          </div>
          <div class="be-right-navbar">
            
             


            <div class="page-title"><span>CML 101: (Test Questions).</span></div> 
          </div>
        </div>
      </nav>


      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">CML 101: (Test Questions).</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <p style="font-size: 14px; text-align: center; color: black;" class="page-head-title"><b style="color:DodgerBlue;">Welcome!&nbsp</b><i> <?php echo $_SESSION['email']; ?></i></p>
                  <li class="divider">Menu</li>
                  <li class="parent"><a href="#"><i class="icon mdi mdi-book"></i><span>My Exams</span></a>
                    <ul class="sub-menu">
                      <li class="active"><a href="questions.php">Exam 1</a></li>
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
            <li><a href="questions.php">My Exam</a></li>
            <li class="active">Exam 1</li>
          </ol>
        </div>  -->


        <div class="form-questions" style="margin-top: 20px;">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">INSTRUCTION: Read Carefully and Select Appropriate Answers.<span class="panel-subtitle" style="margin-left: 125px;">(You are provided with <b>20 questions</b> only). <p style="color: #a30310;"><b><i>*Form will submit authomatically once time elapses.</i><b> <p></span></div>
                <div class="panel-body">
                  <form action="" style="border-radius: 0px;" class="form-horizontal group-border-dashed" name="quiz" method="post">

                  <!-- Question 1-->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"><b>Question 1</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          What is the full meaning of AML/CFT? <br>
                          <input type="radio" name="rad1" id="rad2" value="a" onclick="getPercentage()">
                          <label for="rad2">(A) Anti-Money Liability/ Combating the Financing of Terrorism. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad1" id="rad3" value="b" onclick="getPercentage()">
                          <label for="rad3">(B) Anti-Money Laundering/ Combating the Financing of Terrorism.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad1" id="rad4" value="c" onclick="getPercentage()">
                          <label for="rad4">(C) Anti Money Listing/ Countering the Financing of Terrorism.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 2-->
                    <div class="form-group">
                      <label class="col-sm-3 control-label"><b>Question 2</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Which of the following is not true of money laundering? <br>
                          <input type="radio" name="rad2" id="rad5" value="a" onclick="getPercentage()">
                          <label for="rad5">(A) Money laundering is the processing of criminal proceeds to disguise their illegal origin. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad2" id="rad6" value="b" onclick="getPercentage()">
                          <label for="rad6">(B) Money laundering has become more sophisticated and in many cases harder to detect<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspdue to the advancement in communication and transportation systems.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad2" id="rad7" value="c" onclick="getPercentage()">
                          <label for="rad7">(C) Money laundering is not a derivative crime.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 3-->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 3</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          What is Terrorist Financing? <br>
                          <input type="radio" name="rad3" id="rad8" value="a" onclick="getPercentage()">
                          <label for="rad8">(A) Terrorist Financing includes the financing of terrorist acts, of terrorists and terrorist organizations.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad3" id="rad9" value="b" onclick="getPercentage()">
                          <label for="rad9">(B) Terrorist Financing includes financing legitimate businesses.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad3" id="rad10" value="c" onclick="getPercentage()">
                          <label for="rad10">(C) Terrorist Financing Includes financing cultural activities.</label>
                        </div>
                      </div>
                    </div>


                    <!-- Question 4-->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 4</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Identify any two legislations put in place to Combat Money Laundering and Financing of Terrorists of in Nigeria?<br>
                          <input type="radio" name="rad4" id="rad11" value="a" onclick="getPercentage()">
                          <label for="rad11">(A) Pension Reform Act 2014, Land use Act 2004. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad4" id="rad12" value="b" onclick="getPercentage()">
                          <label for="rad12">(B) Money Laundering Prohibition Act 2011 (as amended by Act No 1 of 2012), 1995 Money Laundering Act (amended 2002). </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad4" id="rad13" value="c" onclick="getPercentage()">
                          <label for="rad13">(C) CAMA 2004, National Industrial Court Act 2017.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 5</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          What is the effect of Money Laundering on a Nation?<br>
                          <input type="radio" name="rad5" id="rad14" value="a" onclick="getPercentage()">
                          <label for="rad14">(A) Curtail national development and progress. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad5" id="rad15" value="b" onclick="getPercentage()">
                          <label for="rad15">(B) Brings about development.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad5" id="rad16" value="c" onclick="getPercentage()">
                          <label for="rad16">(C) Enhance foreign investment</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 6 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 6</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                         AML/CFT laws not only designate money laundering and predicate offences but also prescribe?<br>
                          <input type="radio" name="rad6" id="rad17" value="a" onclick="getPercentage()">
                          <label for="rad17">(A) Ways to make money laundering easy to carry out.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad6" id="rad18" value="b" onclick="getPercentage()">
                          <label for="rad18">(B) Criminal sanctions for non-compliance with the relevant laws and regulations. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad6" id="rad19" value="c" onclick="getPercentage()">
                          <label for="rad19">(C) Procedure to aid terrorist financing.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 7 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 7</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          What is the Key attribute of Money Laundering?<br>
                          <input type="radio" name="rad7" id="rad20" value="a" onclick="getPercentage()">
                          <label for="rad20">(A) Forthrightness.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad7" id="rad21" value="b" onclick="getPercentage()">
                          <label for="rad21">(B) Loyalty. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad7" id="rad22" value="c" onclick="getPercentage()">
                          <label for="rad22">(C) Deception.</label>
                        </div>
                      </div>
                    </div>

                     <!-- Question 8 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 8</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Reasons for money laundering includes?<br>
                          <input type="radio" name="rad8" id="rad23" value="a" onclick="getPercentage()">
                          <label for="rad23">(A) To avoid detection and prosecution.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad8" id="rad24" value="b" onclick="getPercentage()">
                          <label for="rad24">(B) Conceal the origin of the illegally obtained money.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad8" id="rad25" value="c" onclick="getPercentage()">
                          <label for="rad25">(C) All of the above.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 9 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 9</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          The Money Laundering Prohibition Act 2011 as amended is divided into how many parts?<br>
                          <input type="radio" name="rad9" id="rad26" value="a" onclick="getPercentage()">
                          <label for="rad26">(A)  Three. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad9" id="rad27" value="b" onclick="getPercentage()">
                          <label for="rad27">(B) One. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad9" id="rad28" value="c" onclick="getPercentage()">
                          <label for="rad28">(C) Ten.</label>
                        </div>
                      </div>
                    </div>


                    <!-- Question 10 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 10</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Part 1 of the MLPA 2011 as amended deals with ...?<br>
                          <input type="radio" name="rad10" id="rad29" value="a" onclick="getPercentage()">
                          <label for="rad29">(A) The miscellaneous part of the law. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad10" id="rad30" value="b" onclick="getPercentage()">
                          <label for="rad30">(B) The day to day operations of institutions </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad10" id="rad31" value="c" onclick="getPercentage()">
                          <label for="rad31">(c) Offenses and penalties.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 11 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 11</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Part 2 of the MLPA 2011 as amended deals with ...?<br>
                          <input type="radio" name="rad11" id="rad32" value="a" onclick="getPercentage()">
                          <label for="rad32">(A) Designation of officials.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad11" id="rad33" value="b" onclick="getPercentage()">
                          <label for="rad33">(B) The resultant offences of not adhering to Part 1.</label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad11" id="rad34" value="c" onclick="getPercentage()">
                          <label for="rad34">(C) The miscellaneous part of the law. </label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 12 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 12</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          Part 3 of the MLPA 2011 as amended deals with ...?<br>
                          <input type="radio" name="rad12" id="rad35" value="a" onclick="getPercentage()">
                          <label for="rad35">(A) The miscellaneous part of the law. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad12" id="rad36" value="b" onclick="getPercentage()">
                          <label for="rad36">(B) The day to day operations of institutions. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad12" id="rad37" value="c" onclick="getPercentage()">
                          <label for="rad37">(C) Regulatory returns.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 13 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 13</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          According to section 1 (a) of the MLPA 2011, No person (individual) shall except in a transaction <br>through a financial institution make or accept cash payment of a sum exceeding?<br>
                          <input type="radio" name="rad13" id="rad38" value="a" onclick="getPercentage()">
                          <label for="rad38">(A) ₦2,000,000 or its equivalent.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad13" id="rad39" value="b" onclick="getPercentage()">
                          <label for="rad39">(B) ₦5,000,000 or its   equivalent. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad13" id="rad40" value="c" onclick="getPercentage()">
                          <label for="rad40">(C) ₦10,000,000 or its equivalent.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 14 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 14</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                          According to section 2 (a) of the MLPA 2011, No corporate body shall except in a transaction<br>
                           through a financial institution make or accept cash payment of a sum exceeding?<br>
                          <input type="radio" name="rad14" id="rad41" value="a" onclick="getPercentage()">
                          <label for="rad41">(A) ₦10, 000, 000 or its equivalent.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad14" id="rad42" value="b" onclick="getPercentage()">
                          <label for="rad42">(B) ₦50,000,000 or its equivalent. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad14" id="rad43" value="c" onclick="getPercentage()">
                          <label for="rad43">(C) ₦15,000 000 or its equivalent.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 15 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 15</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           Before opening an account for, issuing a passbook to, entering into any fiduciary transaction<br>
                          with, renting a safe deposit box to or establishing any other business relationship with the<br> customer a Financial Institution or Designated Non-Financial Institution shall?<br>
                          <input type="radio" name="rad15" id="rad44" value="a" onclick="getPercentage()">
                          <label for="rad44">(A) Verify its customer’s identity and update all relevant information. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad15" id="rad45" value="b" onclick="getPercentage()">
                          <label for="rad45">(B) Collect customers money. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad15" id="rad46" value="c" onclick="getPercentage()">
                          <label for="rad46">(C) Notify the regulators.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 16 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 16</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           For High Risk customers Financial Institutions or Designated Non-Financial Institutions shall?<br>
                          <input type="radio" name="rad16" id="rad47" value="a" onclick="getPercentage()">
                          <label for="rad47">(A) Ignore existing records.  </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad16" id="rad48" value="b" onclick="getPercentage()">
                          <label for="rad48">(B) Undertake reviews of existing records & periodic review of subsequent records. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad16" id="rad49" value="c" onclick="getPercentage()">
                          <label for="rad49">(C) Destroy existing  records.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 17 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 17</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           Full meaning of PEP?<br>
                          <input type="radio" name="rad17" id="rad50" value="a" onclick="getPercentage()">
                          <label for="rad50">(A) Politically Exposed Persons.   </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad17" id="rad51" value="b" onclick="getPercentage()">
                          <label for="rad51">(B) Polite Exceptional Persons. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad17" id="rad52" value="c" onclick="getPercentage()">
                          <label for="rad52">(C) Proud Exposed Persons.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 18 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 18</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           Upon identification of PEP the Financial Institution or Designated Non-Financial Institution shall?<br>
                          <input type="radio" name="rad18" id="rad53" value="a" onclick="getPercentage()">
                          <label for="rad53">(A) Discontinue Relationship with PE.   </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad18" id="rad54" value="b" onclick="getPercentage()">
                          <label for="rad54">(B) Hold a board meeting & Obtain staff approval. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad18" id="rad55" value="c" onclick="getPercentage()">
                          <label for="rad55">(C) Put in place appropriate risk management systems & Obtain senior management approval.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 19 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 19</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           What is the timeline stipulated for reporting Suspicious Transactions to EFCC?<br>
                          <input type="radio" name="rad19" id="rad56" value="a" onclick="getPercentage()">
                          <label for="rad56">(A)  After ten days    </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad19" id="rad57" value="b" onclick="getPercentage()">
                          <label for="rad57">(B) Immediately after the transaction occurred. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad19" id="rad58" value="c" onclick="getPercentage()">
                          <label for="rad58">(C) After 24 hours.</label>
                        </div>
                      </div>
                    </div>

                    <!-- Question 20 -->
                    <div class="form-group"> 
                      <label class="col-sm-3 control-label"><b>Question 20</b></label>
                      <div class="col-sm-9">
                        <div class="be-radio">
                           Failure to render Suspicious Transaction Report immediately by a Financial<br>
                          Institution or Designated Non-Financial Institution is an offence that attracts
                           a fine on conviction of ...?<br>
                          <input type="radio" name="rad20" id="rad59" value="a" onclick="getPercentage()">
                          <label for="rad59">(A) ₦5million for each day during which the offence continues. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad20" id="rad60" value="b" onclick="getPercentage()">
                          <label for="rad60">(B) ₦1million for each day during which the offence continues. </label>
                        </div>
                        <div class="be-radio">
                          <input type="radio" name="rad20" id="rad61" value="c" onclick="getPercentage()">
                          <label for="rad61">(c) ₦12 million for each day during which the offence continues.</label>
                        </div>
                      </div>
                    </div>

                    <input name="mytotal" type="hidden" id="mytotal" readonly=""  >
                    <input name="mypercentage" type="hidden" id="mypercentage" readonly="" >

                      <hr>
                      



                      <div class="submit-form" >
                        <p style="text-align: center; color: #a30310;">*<i>Ensure you have answered completely before submitting.</i></p>
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="CLICK TO SUBMIT" style="display:block;
                           margin: 0 auto;">
                      </div>
                      


                  </form>
                </div>
              </div>
            </div>
          </div>
         
        </div>

      </div>



    </div>
    
     <script type="text/javascript" src="./calculator.js"></script>
     
  





    <script src="asset/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
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