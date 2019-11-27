<?php
session_start();
include("dbconnection.php");
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="manage-users.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
else
{
$_SESSION['action1']="*Invalid username or password";
$extra="index.php";
echo "<script>window.location.href='".$extra."'</script>";
exit();
}
}

?>

<?php include'base1.php'?>
<style>
    .login {
        margin-left: 500px;
    }

</style>

<form action="" method="post" class="form-group">
    <div class="cen">
        <h3>: : PCET Convener : : </h3>
        <hr><br>
    </div>

    <p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>

    <div class="login">
        <div class="col-md-4 mb-2">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="validationCustomUsername" name="username" placeholder="Convener Id" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Enter Valid Username / Email.
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-2">

            <input type="password" class="form-control" id="validationCustom01" name="password" placeholder="Convener Password " value="" required>
            <div class="valid-feedback">
                Ok Good!
            </div>
        </div>
    </div>
    <div class="cen">
        <button class="btn btn-primary" type="submit" name="login" value="">Convener Login</button>
    </div><br>
    <div class="cen">
        <button class="btn btn-danger" type="reset" name="" value="Reset Up">Reset</button>


    </div>



</form>
<hr>



</body>
<?php include'base2.php'?>
