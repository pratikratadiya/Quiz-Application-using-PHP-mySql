<!DOCTYPE HTML>
<?php
    session_start();
    
    if(!isset($_SESSION["username"]))
    {
        header('Location:User_Logout.php');
    }
?>

<?php
    for($i=1;$i<=20;$i++)
    {
        if(isset($_POST["questions".$i]) && isset($_POST["answer"]))
        {
            $_SESSION["answer".$i]=$_POST["answer"];
            break;
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
        
    <style type="text/css">
        #links
        {
            width: 100%;
            text-decoration: none;
            padding: 50px;
            font-size: 125%;
        }
        .questionlink
        {
            width: 100px;
            height: 40px;
            padding: 5px;
            border-radius: 0 4px 0 4px;
            margin: 0 40px 30px 20px;
            border: 1px solid #33CCFF;
            background-color: #000099;
            color: white;
            float: left
        }
        .questionlink:hover
        {
            color: white;
            box-shadow: 0 0 5px #33CCFF
        }
        .link
        {
            color: white;
        }
        .link:hover
        {
            color: #33CCFF;
            text-decoration: underline;
        }
    
        
    </style>
      
    </head>
    <body>
        <div id="header"><span id="header-content"><b>QUIZ NAME</b></span></div>
			
        <div id="timer"></div>
        <span id="book-mark">&nbsp;</span>
        <center>
            <div id="links">
                <div class="questionlink"><a class="link" href="question1_page.php">Q1</a></div>
                <div class="questionlink"><a class="link" href="question2_page.php">Q2</a></div>
                <div class="questionlink"><a class="link" href="question3_page.php">Q3</a></div>
                <div class="questionlink"><a class="link" href="question4_page.php">Q4</a></div>
                <div class="questionlink"><a class="link" href="question5_page.php">Q5</a></div>
                <div class="questionlink"><a class="link" href="question6_page.php">Q6</a></div>
                <div class="questionlink"><a class="link" href="question7_page.php">Q7</a></div>
                <div class="questionlink"><a class="link" href="question8_page.php">Q8</a></div>
                <div class="questionlink"><a class="link" href="question9_page.php">Q9</a></div>
                <div class="questionlink"><a class="link" href="question10_page.php">Q10</a></div>
                <div class="questionlink"><a class="link" href="question11_page.php">Q11</a></div>
                <div class="questionlink"><a class="link" href="question12_page.php">Q12</a></div>
                <div class="questionlink"><a class="link" href="question13_page.php">Q13</a></div>
                <div class="questionlink"><a class="link" href="question14_page.php">Q14</a></div>
                <div class="questionlink"><a class="link" href="question15_page.php">Q15</a></div>
                <div class="questionlink"><a class="link" href="question16_page.php">Q16</a></div>
                <div class="questionlink"><a class="link" href="question17_page.php">Q17</a></div>
                <div class="questionlink"><a class="link" href="question18_page.php">Q18</a></div>
                <div class="questionlink"><a class="link" href="question19_page.php">Q19</a></div>
                <div class="questionlink"><a class="link" href="question20_page.php">Q20</a></div>
            </div>
        </center>
        <br><br><br>
        <script type="text/javascript" src="timer_script.js"></script>        
		
	</body>
</html>