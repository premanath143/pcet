

<?php session_start();
include("checklogin.php");
check_login();

$uid = $_SESSION['id'];?>

<?php include 'base1.php';?>
       <style>
           .lbutton{
               float: right;
               padding: 5px;
           }
           .whead{
               padding: 15px;
               text-align: center;
               margin-top: 10px;
           }
           .bcolor{
               color: blue;
               font-style: italic;
           }
           .middle{
               margin-left: 125px;
           }
           .suggest{
               text-align: center;
               color: red;
           }
</style>

       <div class="lbutton">
           <a href="logout.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Logout</a>
       </div>       

<div class="whead ">
<h2> Hi! Dear Student : <span class="bcolor text-uppercase"><?php echo $_SESSION['cname'];?></span> </h2>
</div>
 <hr>
      <div class=".d-flex">
         &emsp;&emsp;&emsp; Sri Venkateswara University, Tirupati, is established in 1954 in the world famous holy temple town of Tirupati on the sprawling campus of 375 acres with a panoramic and pleasant hill view. The University stands as a testimony to the wisdom and foresight of great visionaries Late Sri Tanguturi Prakasam Pantulu, the then Chief Minister of Andhra and Late Sri Neelam Sanjiva Reddy, to cater the educational needs and aspirations of the people of Rayalaseema area. <br>
                </div>  
                <div class="form-row middle">
       <div class="col-md-4 mb-3">
             <a href="application.php" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Your Application</a>
       
     </div>
      <div class="col-md-4 mb-3">
             <a href="hallticket.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Hallticket</a>
       
     </div>
      <div class="col-md-4 mb-3">
             <a href="result.php" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Results</a>
       
     </div>

</div>
      <div class="suggest">
         Dear Student - <?php echo $_SESSION['cname'];?> You Have any Edit/Modify in Your Application ... <br>
         Send Your Application ID and EmailId to <span class="bcolor">talamarlapremanath143@gmail.com</span> 
          
      </div>
      <div class="cen">
           <a href="logout.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Logout</a>
      </div>
       <br>

<?php include 'base2.php';?>
