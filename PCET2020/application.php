
<?php session_start();
include("checklogin.php");
check_login();

$uid = $_SESSION['id'];?>

<?php include 'base1.php';?>
<style>
    .first {
        color: red;
        padding: 5px;


        float: left;

        margin: 5px;
        border: 2px solid red;
    }

    .nb {
        border: 2px solid red;

    }
    .second{
        border: none;
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
      <p class="shead cen">Student Application</p>
    </div> </td>
      </tr>
       <tr>
           <td>
           <p>Candidate Name  </p>
           <p>Qualifing Exam </p>
           <p>Passing Year </p>
           <p>Father Name </p>
           <p>Mother Name </p>
           <p>Date of Birth </p>
           <p>Gender </p>
           <p>Ration Card No </p>
           <p>Aadhar No </p>
            <p>Mobile Number </p>
            <p>Your Family Income Range</p>
                      <p>Caste </p>
                      <p>Special Category </p>
                      <p>House Numer </p>
                       <p>Village </p>
                        <p>Mandal </p>
                         <p>District </p>
                          <p>State </p>
                           <p>Pincode</p>
                            <p>Studying College Name</p>
                             <p>Collge District </p>
                              <p>College State </p>
                              
                      

                      
           </td>
           <td>
    <p>:<?php echo $_SESSION['cname'];?></p>
           <p>:<?php echo $_SESSION['qexam'];?></p>
           <p>:2020</p>
           <p>:<?php echo $_SESSION['fname'];?></p>
           <p>:<?php echo $_SESSION['mname'];?></p>
                     <p>:<?php echo $_SESSION['dob'];?></p>
          <p>:<?php echo $_SESSION['gender'];?></p>
                    <p>:<?php echo $_SESSION['rcard'];?></p>
               <p>:<?php echo $_SESSION['aadhar'];?></p>
               <p>:<?php echo $_SESSION['mobile'];?></p>
   <p>:<?php echo $_SESSION['income'];?></p>
          <p>:<?php echo $_SESSION['cast'];?></p>  
               <p>:<?php echo $_SESSION['scat'];?></p>  
                 <p>:<?php echo $_SESSION['hno'];?></p>
                   <p>:<?php echo $_SESSION['village'];?></p>      
                     <p>:<?php echo $_SESSION['mandal'];?></p>  
              <p>:<?php echo $_SESSION['dist'];?></p> 
                <p>:<?php echo $_SESSION['state'];?></p> 
              <p>:<?php echo $_SESSION['pincode'];?></p>
             <p>:<?php echo $_SESSION['coname'];?></p>
              <p>:<?php echo $_SESSION['codist'];?></p>
               <p>:<?php echo $_SESSION['costate'];?></p>
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
           <td colspan="2">
               <p><b>Fee Payment :</b></p>
              <p>&emsp;&emsp;&emsp; &emsp;Fee Amount : 1200.00 Rupees</p>
               <p>&emsp;&emsp;&emsp; &emsp;Pay through Your Mobile Payment Methods</p>
                <p>&emsp;&emsp;&emsp; &emsp;Send Screnshot to Convenor Email Id:</p>
              
           </td>
           <td class="cen">
              <p></p>
               <p>Paste Your Latest</p>
               <p>Photo</p>
               <p>Along with Date</p>
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
