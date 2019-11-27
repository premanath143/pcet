?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])=="")
    {   
    header("Location: index.php"); 
    }
    else{
if(isset($_POST['submit']))
{
    $marks=array();
$class=$_POST['class'];
$studentid=$_POST['studentid']; 
$mark=$_POST['marks'];

 $stmt = $dbh->prepare("SELECT tblsubjects.SubjectName,tblsubjects.id FROM tblsubjectcombination join  tblsubjects on  tblsubjects.id=tblsubjectcombination.SubjectId WHERE tblsubjectcombination.ClassId=:cid order by tblsubjects.SubjectName");
 $stmt->execute(array(':cid' => $class));
  $sid1=array();
 while($row=$stmt->fetch(PDO::FETCH_ASSOC))
 {

array_push($sid1,$row['id']);
   } 
  
for($i=0;$i<count($mark);$i++){
    $mar=$mark[$i];
  $sid=$sid1[$i];
$sql="INSERT INTO  tblresult(StudentId,ClassId,SubjectId,marks) VALUES(:studentid,:class,:sid,:marks)";
$query = $dbh->prepare($sql);
$query->bindParam(':studentid',$studentid,PDO::PARAM_STR);
$query->bindParam(':class',$class,PDO::PARAM_STR);
$query->bindParam(':sid',$sid,PDO::PARAM_STR);
$query->bindParam(':marks',$mar,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Result added successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include'header.php'?>
    <?php include'nav2.php'?>

    <title>Student Result</title>

    <script>
        function getStudent(val) {
            $.ajax({
                type: "POST",
                url: "get_student.php",
                data: 'classid=' + val,
                success: function(data) {
                    $("#studentid").html(data);

                }
            });
            $.ajax({
                type: "POST",
                url: "get_student.php",
                data: 'classid1=' + val,
                success: function(data) {
                    $("#subject").html(data);

                }
            });
        }

    </script>
    <script>
        function getresult(val, clid) {

            var clid = $(".clid").val();
            var val = $(".stid").val();;
            var abh = clid + '$' + val;
            //alert(abh);
            $.ajax({
                type: "POST",
                url: "get_student.php",
                data: 'studclass=' + abh,
                success: function(data) {
                    $("#reslt").html(data);

                }
            });
        }

    </script>

    <style>
        table,
        th,
        td {
            border: 2px solid black;

        }

        th,
        td {
            padding:10px;

        }

        th,
        td {
            text-align: center;

        }

        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        input[type=text],
        [type=password],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

    </style>
</head>

<body>
    <center>

        <?php if($msg){?>
        <div class="alert alert-success left-icon-alert" role="alert">
            <strong>Sucess !</strong><?php echo htmlentities($msg); ?>
        </div><?php } 
else if($error){?>
        <div class="alert alert-danger left-icon-alert" role="alert">
            <strong>Error !</strong> <?php echo htmlentities($error); ?>
        </div>
        <?php } ?>


        <form method="post">
            <table>
                <tr>
                    <th colspan="2">Adding Result to Students</th>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>
                        <h3> <select name="class" class="form-control clid" id="classid" onChange="getStudent(this.value);" required="required">
                                <option value="">Select Semester</option>
                                <?php $sql = "SELECT * from tblclasses";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
                                <option value="<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->ClassName); ?>&nbsp; Section-<?php echo htmlentities($result->Section); ?></option>
                                <?php }} ?>
                            </select></h3>
                    </td>
                </tr>
                <tr>
                    <td>Student Name </td>
                    <td><select name="studentid" class="form-control stid" id="studentid" required="required" onChange="getresult(this.value);">
                        </select></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div id="reslt">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><label for="date" class="col-sm-2 control-label">Subjects</label></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="form-group">

                            <div class="col-sm-10">
                                <div id="subject">
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit" name="submit" id="submit" class="button">Approve Result</button></td>
                </tr>

            </table>

        </form>


        <script src="js/jquery/jquery-2.2.4.min.js"></script>


        <script>
            $(function($) {
                $(".js-states").select2();
                $(".js-states-limit").select2({
                    maximumSelectionLength: 2
                });
                $(".js-states-hide").select2({
                    minimumResultsForSearch: Infinity
                });
            });

        </script>
    </center><br><hr><br>
</body>
<?php include'footer.php'?>

</html>
<?PHP } ?>
