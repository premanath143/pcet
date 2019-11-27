<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();

if(isset($_POST['signup']))
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
     $_SESSION[ 'msg']="Patient Details Updated Successfully" ;

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
<?php $ret=mysqli_query($con, "select * from users where id='".$_GET[ 'uid']."'");
 while($row=mysqli_fetch_array($ret)) { ?>


   <div class="col-md-4 mb-3">
     <label for="validationCustom01">Candidate Name</label>
     <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="cname" value="" required>
     <div class="valid-feedback">
       Looks good!
     </div>
   </div>
   <div class="col-md-4 mb-3">
     <label for="validationCustom02">Father Name</label>
     <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="fname" value="" required>
     <div class="valid-feedback">
       Looks good!
     </div>
   </div>
    <div class="col-md-4 mb-3">
     <label for="validationCustom02">Mother Name</label>
     <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="mname" value="" required>
     <div class="valid-feedback">
       Looks good!
     </div>
   </div>
