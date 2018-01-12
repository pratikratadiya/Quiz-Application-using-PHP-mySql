<!DOCTYPE html>
<?php
    session_start();
    for($i=1;$i<=20;$i++)
    {
        if(isset($_POST["submit".$i]) && isset($_POST["answer"]))
        {
            $_SESSION["answer".$i]=$_POST["answer"];
            break;
        }
    }
    
    $score=0;
//    $answers=array("A","B","B","B","D","B","B","A","A","A","D","D","D","B","A","A","A","A","B","B");


?>
<?php include "db_connect.php"; ?>
<?php 
    $query=mysqli_query($connect,"SELECT * FROM quiz1");
    $answer=mysqli_query($connect,"SELECT answer FROM quiz1");
    if(isset($_SESSION["username"]))
    {
        $j=1;
        while($ans=$answer->fetch_assoc())
        {
            if($_SESSION["answer".$j]==$ans["answer"])
            {
                ++$score;
            }
            $j++;
        }           
        $username=$_SESSION["username"];
        $sql=mysqli_query($connect,"SELECT quiz1 FROM details
                                WHERE Username='$username'");
        $record=$sql->fetch_assoc();
        if($record["quiz1"]==1)
        {
            header('Location:User_Profile.php');
        }

        //updating points
        $get=mysqli_query($connect,"SELECT Points FROM details
                                    WHERE Username='$username'");
        $record=$get->fetch_assoc();
        $points=$record["Points"];
        $points=$points+$score;
        mysqli_query($connect,"UPDATE details
                                SET Points='$points'
                                WHERE Username='$username'");
        mysqli_query($connect,"UPDATE details
                                SET quiz1=1
                                WHERE Username='$username'");
        
    }
    else
    {
        header("Location:User_Login.php");
    }
?>
<html lang="en">
    <head>
        <title>Quiz Login</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="quiz_app.css">
        <link rel="stylesheet" href="quiz_app_links.css">
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style type="text/css">
            #score
            {
                font-size: 300%;
                color: white;
                text-shadow: 5px 5px 10px #000000;
                width: 100%;
            }
            .question
            {
                background-color: white;
                border-radius: 4px;
                padding: 10px;
                text-shadow:  1px 1px 10px #666666;
                width: 70%;
                margin-bottom: 30px;
            }
            .answer
            {
                background-color: white;
                border-radius: 4px;
                padding: 10px;
                text-shadow:  1px 1px 10px #666666;
                width: 70%;
                height: 40px;
                margin-bottom: 25px;
            }
        </style>
    </head>
    <body>
        <div id = "header"><span id = "header-content"><b>SCORE</b></span> </div>
        <center><div id="score">Congratulations!!<p>Your score is: <?php echo $score; ?></p></div></center><p><p>
        <center>
            <?php
                $qNo=1;
                while($row=$query->fetch_assoc())
                {
                    echo "<div class='question'>{$qNo}.{$row['question']}<br><br><span style='float:left'>Your Answer: {$_SESSION['answer'.$qNo]}</span>Answer:{$row['answer']}</div>";
                    $qNo++;
                }

            ?>
        </center>
        <center>
            <div class="link">
                <i class="material-icons" style="font-size:180px">exit_to_app</i><br>
                <a href="User_Logout.php" button class="button"><span>Log out</span></a>
            </div>
        </center>
        <?php  session_destroy();  $_SESSION = array(); ?>

    </body>
</html>