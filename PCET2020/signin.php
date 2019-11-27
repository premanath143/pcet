

<?php session_start();
require_once('dbconnection.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=md5($password);
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']= $_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['cname']=$num['cname'];
$_SESSION['fname']=$num['fname'];
$_SESSION['mname']=$num['mname'];
$_SESSION['dob']=$num['dob'];
$_SESSION['gender']=$num['gender'];
$_SESSION['aadhar']=$num['aadhar'];
$_SESSION['rcard']=$num['rcard'];
$_SESSION['mobile']=$num['mobile'];
$_SESSION['income']=$num['income'];
$_SESSION['cast']=$num['cast'];
$_SESSION['scat']=$num['scat'];
$_SESSION['coname']=$num['coname'];
$_SESSION['codist']=$num['codist'];
$_SESSION['costate']=$num['costate'];
$_SESSION['hno']=$num['hno'];
$_SESSION['village']=$num['village'];
$_SESSION['mandal']=$num['mandal'];
$_SESSION['dist']=$num['dist'];
$_SESSION['state']=$num['state'];
$_SESSION['pincode']=$num['pincode'];
$_SESSION['qexam']=$num['qexam'];
$_SESSION['tecenter']=$num['tecenter'];
$_SESSION['agree']=$num['agree'];
$_SESSION['image']=$num['image'];
$_SESSION['signature']=$num['signature'];
    $_SESSION['ab']=$num['ab'];
    $_SESSION['mb']=$num['mb'];
    $_SESSION['cb']=$num['cb'];
    $_SESSION['bstate']=$num['bstate'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="signin.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
//header("location:http://$host$uri/$extra");
exit();
}
}
?>
<?php include 'base1.php';?>
        <style>
            .login{
                margin-left: 500px;
            }
</style>

        <form name="registration" method="post" action="" enctype="multipart/form-data" class="form-group">
           
               <div class="cen">
                  <h3>: : Student Login : : </h3><hr><br>
            </div>
            <div class="login">
         <div class="col-md-4 mb-2">          
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" name="uemail" placeholder="Enter Username / Email Id" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Enter Valid Username / Email.
        </div>
             </div></div>
        <div class="col-md-4 mb-2">
     
      <input type="password" class="form-control" id="validationCustom01" name="password"  placeholder="Enter Your Password " value="" required>
      <div class="valid-feedback">
        Ok Good!
      </div>
    </div>                     
               </div>

<div class="cen">
  <button class="btn btn-primary" type="submit" name="login" value="Sign In">Sign In - 2020</button>
  </div><br>
  <div class="cen">
  <button class="btn btn-danger" type="reset" name="" value="Reset Up">Reset</button>
   <a class="btn btn-success" href="signup.php"> New to Register.. </a>
  
  </div>
  <br>                              

                   


        </form>


    
</body>

<?php include 'base2.php';?>
