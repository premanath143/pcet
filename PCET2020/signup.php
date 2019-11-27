<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'pcetdb');
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
    $agree=$_POST['agree'];
    $image_name=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_size=$_FILES['image']['size'];
    $image_tmp=$_FILES['image']['tmp_name'];
     $signature_name=$_FILES['signature']['name'];
    $signature_type=$_FILES['signature']['type'];
    $signature_size=$_FILES['signature']['size'];
    $signature_tmp=$_FILES['signature']['tmp_name'];
	$enc_password=md5($password);
	$a=date('Y-m-d');

  if($cname=='' or $fname=='') {
echo "<script>alert('Fill all  fields with out Empty ')</script>"; }
else
{ if($image_type=="image/jpeg" or $image_type=="image/png" or $image_type="image/gif" ) {
      if($image_size<=1500000) { move_uploaded_file($image_tmp, "photos/$image_name");
  }   else { echo "<script>alert('Image is larger, only 150kb size is allowed')</script>"; }
} else { echo "<script>alert('image type is invalid')</script>"; }
 
 if($signature_type=="image/jpeg" or $signature_type=="image/png" or $signature_type="image/gif" ) {
      if($signature_size<=1500000) { move_uploaded_file($signature_tmp, "signature/$signature_name");
  }   else { echo "<script>alert('Image is larger, only 150kb size is allowed')</script>"; }
} else { echo "<script>alert('image type is invalid')</script>"; }

//    echo $query="INSERT INTO `users` (`id`, `fname`, `admnn`, `byear`, `email`, `password`, `contact`, `addr`, `image`, `posting_date`) VALUES ('$fname','$admnn','$byear','$email','$password','$contact','$addr','$file','$a',)";
      $query="INSERT INTO `users` (`email`, `password`, `cname`, `fname`, `mname`, `dob`, `gender`, `aadhar`, `rcard`, `mobile`, `income`, `cast`, `scat`, `coname`, `codist`, `costate`, `hno`, `village`, `mandal`, `dist`, `state`, `pincode`, `qexam`, `tecenter`, `agree`, `image`, `signature`, `posting_date`) VALUES
    
    ('$email', '$password', '$cname', '$fname', '$mname', '$dob', '$gender', '$aadhar', '$rcard', '$mobile', '$income', '$cast', '$scat', '$coname', '$codist', '$costate', '$hno', '$village', '$mandal', '$dist', '$state', '$pincode', '$qexam', '$tecenter', '$agree','$image_name','$signature_name','$a')";

    $query_run=mysqli_query($connection,$query);
    if($query_run){
        echo '<script> alert("Sucess prema") </script>';
    }
    else
    {
        echo '<script> alert("Failure prema") </script>';

    }


}}

?>
<!DOCTYPE html>
<?php include 'base1.php';?>


<h1 class="cen"> Application For PCET-2020 </h1>

<form name="registration" method="post" action="signup.php" enctype="multipart/form-data" class="needs-validation" novalidate>

    <h4>Login and Basic Details
        <hr>
    </h4>
    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label for="validationCustomUsername">Enter Email Id: </label>
            <div class="input-group">
                <div class="input-group-<p>You can use the mark tag to <mark>highlight</mark> text.</p>
repend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="email" class="form-control" id="validationCustomUsername" name="email" placeholder="Email Id" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Enter Valid Email.
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <label for="validationCustom01">Create Password</label>
            <input type="password" class="form-control" id="validationCustom01" name="password" minlength="6" placeholder="Password " value="" required>
            <div class="valid-feedback">
                Valid Password
            </div>
        </div>




        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Candidate Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="cname" value=""minlength="8" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Father Name</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Father name" name="fname" value="" minlength="8"   required title="5 characters minimum" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Mother Name</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Mother name" name="mname" value="" minlength="8"required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Date of Birth</label>
            <input type="date" class="form-control" id="validationCustom02" placeholder="DOB" name="dob" value="" required>
            <div class="valid-feedback">
                Its Nice !
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Select Your Gender</label><br>&emsp;&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" checked="checked">
                <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>&emsp;&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" >
                <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom04">Aadhar Number</label>
            <input type="text" class="form-control" id="validationCustom04" minlength="12" maxlength="12" pattern="[0-9]*"placeholder="Aadhar Number" name="aadhar" required>
            <div class="invalid-feedback">
                Enter Correct Aadhar Number.
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <label for="validationCustom03">Ration Card Number</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Ration Card Number" minlength="12" name="rcard" required>
            <div class="invalid-feedback">
                Valid Ration Card Number.
            </div>
        </div>

        <div class="col-md-6 mb-2">
            <label for="validationCustom03">Mobile Number</label>
            <input type="text" class="form-control" id="validationCustom03" minlength="10" maxlength="10" pattern="[0-9]*" placeholder="Mobile Number" name="mobile" required>
            <div class="invalid-feedback">
                Enter Mobile Number.
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <h4>Choose Eachone
                <hr>
            </h4>
            <label for="validationCustom02">Annual Income Of The Student Family :</label><br>
            &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="income" id="inlineRadio1" value="Below One Lakh" checked="checked">
                <label class="form-check-label" for="inlineRadio1">Below One Lakh</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="income" id="inlineRadio2" value="Above One Lakh">
                <label class="form-check-label" for="inlineRadio2">Above One Lakh</label>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="income" id="inlineRadio2" value="Above Two Lakh">
                <label class="form-check-label" for="inlineRadio2">Above Two Lakhs</label>
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12 mb-4">
            <label for="validationCustom02">Category :
                <hr> </label><br>
            &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="OC">
                <label class="form-check-label" for="inlineRadio1">OC</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="BC-A">
                <label class="form-check-label" for="inlineRadio1">BC-A</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="BC-B" checked="checked">
                <label class="form-check-label" for="inlineRadio1">BC-B</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="BC-C">
                <label class="form-check-label" for="inlineRadio1">BC-C</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="BC-D">
                <label class="form-check-label" for="inlineRadio1">BC-D</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="BC-E">
                <label class="form-check-label" for="inlineRadio1">BC-E</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="SC">
                <label class="form-check-label" for="inlineRadio1">SC</label>
            </div>&emsp;&emsp;&emsp;
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="cast" id="inlineRadio1" value="ST">
                <label class="form-check-label" for="inlineRadio1">ST</label>
            </div>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-12 mb-4">
            <label for="validationCustom02">Special Category :
                <hr></label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="NCC" name="scat" checked="checked">
                <label class="form-check-label" for="inlineCheckbox1">NCC</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="SPORTS" name="scat">
                <label class="form-check-label" for="inlineCheckbox2">SPORTS</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="PH" name="scat">
                <label class="form-check-label" for="inlineCheckbox3">PH </label>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationCustom01">College Name</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="College Name" name="coname"minlength="8" value="" required>
            <div class="valid-feedback">
               Good Collge
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">College State</label>

            <select class="custom-select" id="inlineFormCustomSelectPref" name="costate">
                <option selected>Choose State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Telanga">Telangana</option>
                <option value="Assam">Assam</option>
                <option value="Arunacha Pradesh">Arunachal Pradesh</option>
                <option value="Goa">Goa</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Punjab">Punjab</option>
                <option value="Tamilnadu">Tamilnadu</option>
                <option value="Bihar">Bihar</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">College District</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="College District" value="" minlength="5"name="codist" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">House Number</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="House No" name="hno" value=""minlength="3" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Village</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Village" name="village"minlength="5" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Mandal</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Mandal" name="mandal" minlength="5"value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label for="validationCustom01">District</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="District" name="dist"minlength="5" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">State</label>

            <select class="custom-select" id="inlineFormCustomSelectPref" name="state">
                <option selected>Choose State</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Telanga">Telangana</option>
                <option value="Assam">Assam</option>
                <option value="Arunacha Pradesh">Arunachal Pradesh</option>
                <option value="Goa">Goa</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Punjab">Punjab</option>
                <option value="Tamilnadu">Tamilnadu</option>
                <option value="Bihar">Bihar</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom02">Pincode</label>
            <input type="text" class="form-control" id="validationCustom02"minlength="6" maxlength="6" pattern="[0-9]*" placeholder="Pincode" name="pincode" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-12">
            <h4>Previous Educational Qualification
                <hr>
            </h4>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom01">Debit/Credit Card Number</label>
            <input type="text" class="form-control" id="validationCustom01" minlength="8"  pattern="[0-9]*"placeholder="Debit/Credit Card Number" name="" value="" required>
            <div class="valid-feedback">
              Master Card/Visa
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom02">Card Holder's Name </label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="Card Holder's Name"minlength="5" name="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationCustom02">Card Exp. Date</label>
            <input type="text" class="form-control" id="validationCustom02" minlength="6"placeholder="MM/YYYY" name="" value="" required>
            <div class="valid-feedback">
                Wow!
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationCustom02">CVV Number</label>
            <input type="text" class="form-control" id="validationCustom02" placeholder="CVV"minlength="3" maxlength="3"pattern="[0-9]*"  name="" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-12">
            <h4><br>Previous Educational Qualification
                <hr>
            </h4>
            <label for="">Qualify Exam </label>
            <select class="custom-select" id="inlineFormCustomSelectPref" name="qexam" required>
                <option selected>Choose Course</option>
                <option value="Intermediate">Intermediate</option>
                <option value="Degree - BA">Degree - BA</option>
                <option value="MBA">MBA</option>
                <option value="MCA-2 Year">MCA-2 Year</option>
                <option value="B.Tech">B.Tech</option>
                <option value="Degree-B.Com">Degree-B.Com</option>
                <option value="Degree-B.Sc">Degree-B.Sc</option>
            </select>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>


        <div class="col-md-12">

            <label for="">Choose Exam Center</label>
            <select class="custom-select" id="inlineFormCustomSelectPref" name="tecenter" required>
                <option selected>Choose Center and Place</option>
                <option value="S.V University,     MCA Building - A Center,    SVU CM and CS Tirupathi.">Tirupathi-SVUniversity</option>
                <option value="S.K University, Padmavathi University, Opp to SBI Bank">SKUniversity</option>
                <option value="Tirupathi-IIT,OOpsite to Canara bAnk , Near NTR Circle, Tirumala">Tirupathi-IIT</option>
                <option value="Sri Padmavathi University,     Tirupathi,    Opp to Lakshi Bhavan">Tirupathi-SPMU</option>
                <option value="Kadapa-Yogivemana University, Main Road,    Towards Main Road, Opp to SBI Bank">Kadapa-Yogivemana University</option>
                <option value="Hyderabad-JNTU,     Near Lakhikapoor , A Cnetrer Main Buidling">Hyderabad-JNTU</option>

            </select>
            <div class="valid-feedback">
                Good Exam Center..
            </div>
        </div>
    </div><br>
    <div class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" id="image" size="150" required>
            <label class="custom-file-label" for="validatedCustomFile">Upload Student Photo...</label>
            <div class="invalid-feedback"> Invalid Photo</div>
        </div>
        <hr>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" name="signature" id="signature" size="150" required>
            <label class="custom-file-label" for="validatedCustomFile">Upload Student Signature...</label>
            <div class="invalid-feedback">Invalid Signature</div>
        </div>
    </div>




    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" name="agree" checked="checked" required>
            <label class="form-check-label" for="invalidCheck">
                Agree to terms and conditions for Pecet2020
            </label>
            <div class="invalid-feedback">
                You must agree before submitting.
            </div>
        </div>
    </div>
    <div class="cen">
        <button class="btn btn-primary" type="submit" name="signup" value="Sign Up">Sign Up - 2020</button>
    </div><br>
    <div class="cen">
        <button class="btn btn-danger" type="reset" name="" value="Reset Up">Reset</button>
        <a class="btn btn-success" href="signin.php"> Already Register.. Login</a>

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



</body>
<?php include 'base2.php';?>
