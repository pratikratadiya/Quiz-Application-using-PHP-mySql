<!DOCTYPE HTML>
<?php include "db_connect.php" ?>
<?php 
    session_start();

    $query=mysqli_query($connect,"SELECT * FROM quiz1
                                    WHERE qNo=2");
    $row=$query->fetch_assoc();
?>
<?php
    if(!isset($_SESSION["username"]))
    {
        header('Location:User_Logout.php');
    }
?>

<?php
    $option1='';
    $option2='';
    $option3='';
    $option4='';

    if(isset($_POST["next"]) && isset($_POST["answer"]))
    {
        $_SESSION["answer1"]=$_POST["answer"];
    }
    else if(isset($_POST["prev"]) && isset($_POST["answer"]))
    {
        $_SESSION["answer3"]=$_POST["answer"];
    }
    if($_SESSION["answer2"]!='')
    {
        switch($_SESSION["answer2"])
        {
            case $row['option1']:
                $option1="checked";
                break;
            case $row['option2']:
                $option2="checked";
                break;
            case $row['option3']:
                $option3="checked";
                break;
            case $row['option4']:
                $option4="checked";
                
        }
        
    }

?>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="quiz_app.css">
    <link rel="stylesheet" href="question_page_stylesheet.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>
    <body>
        <div id="header"><span id="header-content"><b>QUIZ NAME</b></span></div>
			
        <div id="timer"></div>
        <span id="book-mark">&nbsp;</span>
        <div id="question"><?php echo $row["qNo"].".".$row["question"]; ?></div>
        
        <form class="form-horizontal" role="form" name="optionForm" id="option-form" method="post">
            <div id="option1" class="option" onclick="selectOption(this)">
                <input id="radio1" type="radio" name="answer" value="<?php echo $row["option1"] ?>" <?php echo $option1; ?>>&nbsp;<?php echo $row["option1"] ?>
            </div>
            
            <div id="option2" class="option" onclick="selectOption(this)">
                <input id="radio2" type="radio" name="answer" value="<?php echo $row["option2"] ?>" <?php echo $option2; ?>>&nbsp;<?php echo $row["option2"] ?>
            </div>
            
            <div id="option3" class="option" onclick="selectOption(this)">
                <input id="radio3" type="radio" name="answer" value="<?php echo $row["option3"] ?>" <?php echo $option3; ?>>&nbsp;<?php echo $row["option3"] ?>
            </div>
            
            <div id="option4" class="option" onclick="selectOption(this)">
                <input id="radio4" type="radio" name="answer" value="<?php echo $row["option4"] ?>" <?php echo $option4; ?>>&nbsp;<?php echo $row["option4"] ?>
            </div>
            
            <div>
                <input type="submit" name="prev" class="button" value="Previous" formaction="question1_page.php">
                <input type="submit" name="questions2" class="button" value="Questions" formaction="questions.php">
                <input type="submit" name="next" class="button" value="Next" formaction="question3_page.php">
                <input type="submit" name="submit2" class="button" value="Submit" formaction="result.php">
            </div>
            
        </form>
        <div id="ans" style="position:relative;left:20%"></div>
        
        <br><br><br>
		<script type="text/javascript" src="question_page_script.js"></script>
        <script type="text/javascript" src="timer_script.js"></script>
	</body>
</html>