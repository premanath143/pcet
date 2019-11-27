<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();

if(isset($_POST['update']))
{
    $email=$_POST['email'];
	$password=$_POST['password'];
    $cname=$_POST['cname'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $aadhar=$_POST['aadhar'];

    $rcard=$_POST['rcard'];
    $mobile=$_POST['mobile'];
    $income=$_POST['income'];
    $cast=$_POST['cast'];
    $scat=$_POST['scat'];
    $coname=$_POST['coname'];
    $codist=$_POST['codist'];
    $costate=$_POST['costate'];
    $hno=$_POST['hno'];
    $village=$_POST['village'];
    $mandal=$_POST['mandal'];
    $dist=$_POST['dist'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $qexam=$_POST['qexam'];
    $tecenter=$_POST['tecenter'];

	$enc_password=md5($password);
	$a=date('Y-m-d');

  if($cname=='' or $fname=='') {
echo "<script>alert('Fill all  fields with out Empty ')</script>"; }
else
{ echo "<script>alert('Updated')</script>"; }

//    echo $query="INSERT INTO `users` (`id`, `fname`, `admnn`, `byear`, `email`, `password`, `contact`, `addr`, `image`, `posting_date`) VALUES ('$fname','$admnn','$byear','$email','$password','$contact','$addr','$file','$a',)";
     echo $query=("update users set
     email='$email',
     password='$password',
     cname='$cname',
     fname='$fname',mname='$mname',
     dob='$dob',gender='$gender',
     aadhar='$aadhar',rcard='$rcard',
     mobile='$mobile',income='$income',
     cast='$cast',scat='$scat',
     coname='$coname',codist='$codist',
     costate='$costate',hno='$hno',
     village='$village',mandal='$mandal',
     dist='$dist',state='$state',
     pincode='$pincode',qexam='$qexam',
     tecenter='$tecenter' where id='".$_GET['uid']."'");
     $_SESSION[ 'msg']="Updated Details  Successfully" ;

    $query_run=mysqli_query($con,$query);
    if($query_run){
        echo '<script> alert("Updated prema") </script>';
    }
    else
    {
        echo '<script> alert("Failure prema") </script>';

    }


}


?>
<?php include 'base1.php';?>
<?php $ret=mysqli_query($con, "select * from users where id='".$_GET['uid']."'");
 while($row=mysqli_fetch_array($ret))
 { ?>

    <form name="update" method="post" action="" enctype="multipart/form-data" onSubmit="return valid();">
      <h4>Login and Basic Details <hr> </h4>
                   <div class="form-row">
          <div class="col-md-6 mb-2">
           <label for="validationCustomUsername">Enter Email Id: </label>
           <div class="input-group">
             <div class="input-group-prepend">
               <span class="input-group-text" id="inputGroupPrepend">@</span>
             </div>
             <input type="text" class="form-control" id="validationCustomUsername" name="email" placeholder="Email Id"
             value="<?php echo $row['email'];?>"
              aria-describedby="inputGroupPrepend" required>
             <div class="invalid-feedback">
               Enter Valid Email.
             </div>
           </div>
         </div>
           <div class="col-md-6 mb-2">
           <label for="validationCustom01">Create Password</label>
           <input type="text" class="form-control" id="validationCustom01" name="password"
           value="<?php echo $row['password'];?>"
             placeholder="Password " value="" required>
           <div class="valid-feedback">
             Valid Password
           </div>
         </div>




         <div class="col-md-4 mb-3">
           <label for="validationCustom01">Candidate Name</label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="cname"
           value="<?php echo $row['cname'];?>"
            required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
         <div class="col-md-4 mb-3">
           <label for="validationCustom02">Father Name</label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="fname"
           value="<?php echo $row['fname'];?>"
            required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
          <div class="col-md-4 mb-3">
           <label for="validationCustom02">Mother Name</label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="mname"
           value="<?php echo $row['mname'];?>"
            required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>

          <div class="col-md-4 mb-3">
           <label for="validationCustom02">Date of Birth</label>
           <input type="date" class="form-control" id="validationCustom02"  placeholder="Last name" name="dob"
           value="<?php echo $row['dob'];?>"
            required>
           <div class="valid-feedback">
             Its Nice !
           </div>
         </div>
            <div class="col-md-4 mb-3">
                   <label for="validationCustom02">Select Your Gender</label><br>&emsp;&emsp;&emsp;&emsp;
           <div class="form-check form-check-inline">
       <input class="form-check-input" type="text" name="gender" id="inlineRadio1" value="<?php echo $row['gender'];?>">
     </div>&emsp;&emsp;&emsp;&emsp;

           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
         <div class="col-md-4 mb-3">
           <label for="validationCustom04">Aadhar Number</label>
           <input type="text" class="form-control" id="validationCustom04" placeholder="Aadhar Number" value="<?php echo $row['aadhar'];?>"  name="aadhar"required>
           <div class="invalid-feedback">
             Enter Correct Aadhar Number.
           </div>
         </div>

         <div class="col-md-6 mb-2">
           <label for="validationCustom03">Ration Card Number</label>
           <input type="text" class="form-control" id="validationCustom03" placeholder="Ration Card Number" value="<?php echo $row['rcard'];?>"  name="rcard"required>
           <div class="invalid-feedback">
             Valid Ration Card Number.
           </div>
         </div>

         <div class="col-md-6 mb-2">
           <label for="validationCustom03">Mobile Number</label>
           <input type="text" class="form-control" id="validationCustom03" placeholder="Mobile Number" value="<?php echo $row['mobile'];?>"  name="mobile" required>
           <div class="invalid-feedback">
             Enter Mobile Number.
           </div>
         </div>
          <div class="col-md-12 mb-4">
                    <h4>Choose Eachone  <hr> </h4>
                   <label for="validationCustom02">Annual Income Of The Student Family :</label><br>
         &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <div class="form-check form-check-inline">
       <input class="form-check-input" type="text" name="income" id="inlineRadio1" value="<?php echo $row['income'];?>" >

     </div>
              <div class="valid-feedback">
             Looks good!
           </div>
         </div>
         <div class="col-md-12 mb-4">
                   <label for="validationCustom02">Category : <hr> </label><br>
         &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <div class="form-check form-check-inline">
       <input class="form-check-input" type="text" name="cast" id="inlineRadio1" value="<?php echo $row['cast'];?>" >

     </div>
              <div class="valid-feedback">
             Looks good!
           </div>
         </div>

         <div class="col-md-12 mb-4">
                   <label for="validationCustom02">Special Category :  <hr></label><br>
                   &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp;
 <div class="form-check form-check-inline">
       <input class="form-check-input" type="text" id="inlineCheckbox1" value="<?php echo $row['scat'];?>"  name="scat">
     </div></div>
     <div class="col-md-12 mb-4">
     <label for="validationCustom02">College Name</label> <hr></label><br>
     <div class="form-check form-check-inline">
     <input class="form-check-input" type="text" id="inlineCheckbox1" value="<?php echo $row['coname'];?>"  name="coname">


   </div> </div>
           <div class="col-md-12 mb-4">
           <label for="validationCustom02">College State</label> <hr></label><br>
           <div class="form-check form-check-inline">
           <input class="form-check-input" type="text" id="inlineCheckbox1" value="<?php echo $row['costate'];?>"  name="costate">


         </div> </div>
            <div class="col-md-12 mb-4">
           <label for="validationCustom02">College District</label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="College District" value="<?php echo $row['codist'];?>" name="codist" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
            <div class="col-md-12 mb-4">
           <label for="validationCustom01">House Number</label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="House No" name="hno" value="<?php echo $row['hno'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
        <div class="col-md-12 mb-4">
           <label for="validationCustom01">Village</label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="Village" name="village"  value="<?php echo $row['village'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
          <div class="col-md-12 mb-4">
           <label for="validationCustom02">Mandal</label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="Mandal" name="mandal" value="<?php echo $row['mandal'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>

          <div class="col-md-12 mb-4">
           <label for="validationCustom01">District</label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="District" name="dist" value="<?php echo $row['dist'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
          <div class="col-md-12 mb-4">
           <label for="validationCustom02">State</label>

           <input class="form-control" type="text" id="inlineCheckbox1" value="<?php echo $row['state'];?>"  name="state">
           <div class="valid-feedback">
             Looks good!
           </div>
           </div>

         </div>
            <div class="col-md-12 mb-4">
           <label for="validationCustom02">Pincode</label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="Pincode" name="pincode" value="<?php echo $row['pincode'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
           <div class="col-md-12">
          <h4>Previous Educational Qualification <hr> </h4>
            <label for="">Qualify Exam  </label><br>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="text" id="inlineCheckbox1" value="<?php echo $row['qexam'];?>"  name="qexam">


         </div>
          <div class="col-md-12">

            <label for="">Choose Exam Center</label><br>
            <input class="form-control" type="text" id="inlineCheckbox1" value="<?php echo $row['tecenter'];?>"  name="tecenter">


           <div class="valid-feedback">
             Looks good!
           </div>
                       </div></div><br>




       <div class="cen">
       <button class="btn btn-primary" type="submit" name="update" value="Sign Up">Update - 2020</button>
       </div><br>
       <div class="cen">
        <a class="btn btn-success" href="manage-users.php"> Back To Page </a>

       </div>
       <br>
     </form>

     <script>
     // Example starter JavaScript for disabling form submissions if there are invalid fields
     (function() {
       'use strict';
       window.addEventListener('load', function() {
         // Fetch all the forms we want to apply custom Bootstrap validation styles to
         var forms = document.getElementsByClassName('needs-validation');
         // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {
           form.addEventListener('submit', function(event) {
             if (form.checkValidity() === false) {
               event.preventDefault();
               event.stopPropagation();
             }
             form.classList.add('was-validated');
           }, false);
         });
       }, false);
     })();
     </script>



    <?php } ?>
