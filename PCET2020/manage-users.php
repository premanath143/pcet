




        <?php
session_start();
include'dbconnection.php';
include("checklogin.php");
check_login();
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?>
           <?php include'base1.php'?>
           <style>
           .lbutton{
               float: right;
               padding: 5px;
           }

</style>

<div class="lbutton">
           <a href="logout.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Logout</a>
       </div>

<h5 align="center"> Convenor Login -- <?php echo $_SESSION['login'];?></h5>


                            <a href="manage-users.php">
                                <i> <span>Student Lists</span></i></a>



                    <h3><i> : : Student List : : </i> </h3>

                    <table class="table">

                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Sno.</th>
                                <th scope="col">Student Name</th>
                                <th scope="col"> Email Address</th>
                                <th scope="col"> Password</th>
                                <th scope="col"> Mobile Number</th>
                                <th scope="col"> Image</th>
                                <th scope="col"> Marks</th>
                                <th scope="col"> Application</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $ret=mysqli_query($con,"select * from users");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                                <tr>
                                    <td scope="col">
                                        <?php echo $cnt;?>
                                    </td>
                                    <td>
                                        <?php echo $row['cname'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['email'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['password'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['mobile'];?>
                                    </td>
                                    <td><img src="photos/<?php echo $row['image'];?>" width="120" height="128"></td>
                                    </td>
                                     <td><a href="uploadresult.php?uid=<?php echo $row['id'];?>"><img src="images/result.jpg" width="120" height="128"></a></td>
                                    <td><a href="editapplication.php?uid=<?php echo $row['id'];?>"><img src="images/application.png" width="120" height="128"></a></td>


                                </tr>
                                <?php $cnt=$cnt+1; }?>

                        </tbody>
                    </table>
                    <br>
                    <br>

                    <button onclick="myFunction()" class="button">Print Student Data</button>
                    <br>
                    <br>

                    <h3> <a href="signin.php" class="button">Log Out</a></h3>


                    <script>
                        function myFunction() {
                            window.print();
                        }

                    </script>

                    <script>
                        $(function() {
                            $('select.styled').customSelect();
                        });

                    </script>
                </center>

            </body>
            <?php include'base2.php'?>

            </html>
