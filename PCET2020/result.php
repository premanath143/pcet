<?php session_start();
include("checklogin.php");
check_login();

$uid = $_SESSION['id'];?>

<?php include 'base1.php';?>
<style>
    .first {
        color: blue;
        padding: 5px;


        float: left;

        margin: 5px;
        border: 2px solid black;
    }

    .nb {
        border: 2px solid red;

    }
    .second{
        border: none;
    }
     .third{
        text-align: right;
         color: 
    }


</style>
<div class="container first">
    <div class="head">
      <img src="images/logo.png" alt="" class="logoimg">
      <img src="images/logo2.png" alt="" class="logoimg2">
      <h1 class="cen"> PCET 2020 </h1>
      <p class="shead cen">Power of Student Registartion WebSite</p>
      <p class="shead cen">PCET - 2020 RESULT</p>
    </div>
<div class="col-md-12 mb-3 first second">
    </div>

<div class="col-md-3 mb-3 first second">

    <p>Candidate Name </p>
    <p>Father Name </p>
    <p>Mother Name </p>
    <p>Date of Birth </p>
    <p>Aadhar Number </p>

</div>
<div class="col-md-3 mb-3 first">
    <p>:<?php echo $_SESSION['cname'];?></p>
    <p>:<?php echo $_SESSION['fname'];?></p>
    <p>:<?php echo $_SESSION['mname'];?></p>
    <p>:<?php echo $_SESSION['dob'];?></p>
    <p>:<?php echo $_SESSION['aadhar'];?></p>


</div>
<div class="col-md-2.9 mb-3 first">
    <center>
       
            <p>Category</p>
            <p>&nbsp;<?php echo $_SESSION['cast'];?></p>
            <p>Gender</p>
            <p>&nbsp;<?php echo $_SESSION['gender'];?></p>
            <p>Local Area Status</p>
            <p>SVU</p>
       
    </center>
</div>
<div class="col-md-3 mb-3 first second">
    <p>Hallticket Number</p>
    <p>PCET20201430001</p>
 
    <p><img class="img-thumbnail" src="photos/<?php echo $_SESSION['image'];?>" width="150px" height="150px"></p>
</div>

<div class="col-md-8 mb-3 first second">
    <p>Performance in PCET-2020 Result</p>
</div>
<div class="col-md-4 mb-3 first">
    <p>Analytical Ability - A </p>
</div>

<div class="col-md-4 mb-3 first">
    <p><?php echo $_SESSION['ab'];?></p>
</div>
<div class="col-md-4 mb-3 first">
    <p>Mathematical Ability - B </p>
</div>

<div class="col-md-4 mb-3 first">
    <p><?php echo $_SESSION['mb'];?></p>
</div>
<div class="col-md-4 mb-3 first">
    <p>Communication Ability - C </p>
</div>

<div class="col-md-4 mb-3 first">
    <p><?php echo $_SESSION['cb'];?></p>
</div>
<div class="col-md-4 mb-3 first">
    <p>Total Marks </p>
</div>

<div class="col-md-4 mb-3 first">
    <p><?php echo $_SESSION['bstate'];?></p>
</div>
<div class="col-md-4 mb-3 first">
    <p>Result :  </p>
</div>

<div class="col-md-4 mb-3 first">
    <p>Qualified</p>
</div>
<div class="col-md-12 mb-3 first third second">
   <img src="signature/sign3.png" alt="sign" style="height:50px">&emsp;&emsp;
    <p>&emsp;Convener Signature&emsp;&emsp;</p>
</div>
<div class="col-md-12 mb-3 first cen  second nb ">
  
    <p>&emsp;Your Allotment Order Send to Your Email Id .. Keep In Touch &emsp;&emsp;</p>
</div>

</div>
