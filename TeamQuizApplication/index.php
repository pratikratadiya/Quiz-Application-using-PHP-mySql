<?php include "db_connect.php"; ?>
<?php
    session_start();
    for($i=1;$i<=20;$i++)
    {
        $_SESSION["answer".$i]='';
    }
/*  $_SESSION["answer1"]='';
    $_SESSION["answer2"]='';
    $_SESSION["answer3"]='';
    $_SESSION["answer4"]='';
    $_SESSION["answer5"]='';
    $_SESSION["answer6"]='';
    $_SESSION["answer7"]='';
    $_SESSION["answer8"]='';
    $_SESSION["answer9"]='';
    $_SESSION["answer10"]='';
    $_SESSION["answer11"]='';
    $_SESSION["answer12"]='';
    $_SESSION["answer13"]='';
    $_SESSION["answer14"]='';
    $_SESSION["answer15"]='';
    $_SESSION["answer16"]='';
    $_SESSION["answer17"]='';
    $_SESSION["answer18"]='';
    $_SESSION["answer19"]='';
    $_SESSION["answer20"]='';
*/    
?>
<?php
    if(isset($_SESSION["username"]))
    {
        $username=$_SESSION["username"];
        $query=mysqli_query($connect,"SELECT quiz1 FROM details
                                WHERE Username='$username'");
        $record=$query->fetch_assoc();
        if($record["quiz1"]==1)
        {
            header('Location:User_Profile.php');
        }
    }
?>
<?php
    $res=mysqli_query($connect,"SELECT * FROM timer");
    while($row=$res->fetch_assoc())
    {
        $duration=$row["duration"];
    }
$_SESSION["duration"]=$duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$end_time=date("Y-m-d H:i:s",strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));

$_SESSION["end_time"]=$end_time;

?>

<script type="text/javascript">
    window.location="question1_page.php";
</script>