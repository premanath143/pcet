
<?php session_start();
include("checklogin.php");
check_login();

$uid = $_SESSION['id'];?>

<?php include 'base1.php';?>
<style>
    .first{
  color:red;
  
  background:;

  float:left;

margin:2px;
        border: 2px solid red;
}
    .nb{
        border: 2px solid red;
        
    }
     .third{
        text-align: right;
    }
</style>



<div class="container">
   <table class="table" border="none">
      <tr>
          <td colspan="3"> <div class="head">
      <img src="images/logo.png" alt="" class="logoimg">
      <img src="images/logo2.png" alt="" class="logoimg2">
      <h1 class="cen"> PCET 2020 </h1>
      <p class="shead cen">Power of Student Registartion WebSite</p>
      <p class="shead cen">Student Hallticket</p>
    </div> </td>
      </tr>
       <tr>
           <td>
           <p>Candidate Name  </p>
           <p>Father Name </p>
           <p>Mother Name </p>
           <p>Date of Birth </p>
           <p>Gender </p>
           <p>Aadhar No </p>
            <p>Mobile Number </p>
                              <p>Exam Venue </p>
                              
                      

                      
           </td>
           <td>
    <p>:<?php echo $_SESSION['cname'];?></p>
           <p>:<?php echo $_SESSION['fname'];?></p>
           <p>:<?php echo $_SESSION['mname'];?></p>
                     <p>:<?php echo $_SESSION['dob'];?></p>
          <p>:<?php echo $_SESSION['gender'];?></p>
               <p>:<?php echo $_SESSION['aadhar'];?></p>
               <p>:<?php echo $_SESSION['mobile'];?></p>
               <p><textarea name="" id="" cols="60" rows="7" readonly> :<?php echo $_SESSION['tecenter'];?>
               Tirupathi, SV university MCA Building,
               SVU College of CM and CS
               517502.
               </textarea></p>
           </td>
           <td><p>Your Application Code: </p>
           <p>Application Registration No:
           </p>
           <p>PCET20201430001</p>
           <p><img src="images/barcode.png" alt="" width="200px" height="70px"></p>
           <p> Photo and Signature</p>
           <p><img class="img-thumbnail" src="photos/<?php echo $_SESSION['image'];?>" width="150px" height="150px"></p>
           <p><img class="img" src="signature/<?php echo $_SESSION['signature'];?>" width="150" height="50"></p>
           
           </td>
       </tr>
       <tr>
           <td colspan="3" class="third"><br>
              <p> Student Signature</p>
               
           </td>
       </tr>
     
       <tr>
           <td colspan="3">
               <p><b>Important Note :</b></p>
              <p>&emsp;&emsp;&emsp; &emsp;1.All the Candidates have to Submit this form in the Examination Hall to the Invigilator</p>
               <p>&emsp;&emsp;&emsp; &emsp;2.Candidates are not allowed into the Examination Hall Even if they are LATE BY A Minute</p>
                <p>&emsp;&emsp;&emsp; &emsp;3.This is Computer Generated sheet and Does not require the Signature of the Convenor, PCET2020</p>
              
           </td>
       </tr>
   </table>
    <div class="col-md-4 mb-3">
             <a href="welcome.php" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Back to U r Page</a>
       
     </div>
</div>
<div class="cen">
           <a href="logout.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Logout</a>
      </div>
      
      
      
<?php include 'base2.php';?>
