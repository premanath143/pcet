<?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();

if(isset($_POST['update']))
{
    $email=$_POST['email'];
    $cname=$_POST['cname'];
    $fname=$_POST['fname'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $aadhar=$_POST['aadhar'];
    $ab=$_POST['ab'];
    $mb=$_POST['mb'];
    $cb=$_POST['cb'];
    $bstate=$ab+$mb+$cb;
	

  if($cname=='' or $fname=='') {
echo "<script>alert('Fill all  fields with out Empty ')</script>"; }
else
{ echo "<script>alert(' Result Updated Sucessfully ')</script>"; }

//    echo $query="INSERT INTO `users` (`id`, `fname`, `admnn`, `byear`, `email`, `password`, `contact`, `addr`, `image`, `posting_date`) VALUES ('$fname','$admnn','$byear','$email','$password','$contact','$addr','$file','$a',)";
      $query=("update users set
     email='$email',
     cname='$cname',
     fname='$fname',
     dob='$dob',gender='$gender',
     aadhar='$aadhar',
     ab='$ab',mb='$mb',
     cb='$cb',bstate='$bstate' where id='".$_GET['uid']."'");
     $_SESSION[ 'msg']="Result Added  Successfully" ;

    $query_run=mysqli_query($con,$query);
    if($query_run){
        echo '<script> alert("Result Updated prema") </script>';
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
      <h4>Result Uploaded Page <hr> </h4>
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

         

         
      
          <div class="col-md-12 mb-4">
           <label for="validationCustom02">Analytical Ability - A </label>
           <input type="text" class="form-control" id="validationCustom02" placeholder="Analytical Ability" name="ab" value="<?php echo $row['ab'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>

          <div class="col-md-12 mb-4">
           <label for="validationCustom01">Mathematical Ability - B </label>
           <input type="text" class="form-control" id="validationCustom01" placeholder="Mathematical Ability " name="mb" value="<?php echo $row['mb'];?>" required>
           <div class="valid-feedback">
             Looks good!
           </div>
         </div>
          <div class="col-md-12 mb-4">
           <label for="validationCustom02">Communication Ability - C </label>

           <input class="form-control" type="text" id="inlineCheckbox1" value="<?php echo $row['cb'];?>" placeholder="Communication Ability " name="cb">
           <div class="valid-feedback">
             Looks good!
           </div>
           </div>

        <br>




       <div class="cen">
       <button class="btn btn-primary" type="submit" name="update" value="Sign Up">Result  - 2020</button>
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
