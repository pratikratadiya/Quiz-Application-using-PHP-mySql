<!DOCTYPE HTML>

<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="quiz_app.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
    <style type="text/css">
    .button
{
    background-color: #000099;
    border: 1px solid #33CCFF;
    border-radius: 4px;
    color: #33CCFF;
    font-weight: bold;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    font-size: 110%;
    margin: 4px 30px;
    cursor: pointer;
    text-transform: uppercase;
    position: relative;
    left: 10%;
}
.button:hover
{
    box-shadow: 0 0 10px #33CCFF;
}
#question
{
    font-family: sans-serif;
    text-shadow: 5px 5px 10px #000000;
    color : white;
    font-weight: 300;
    font-size: 110%;
    width: 80%;
    height: 140px;
    position: relative;
    top: 40px;
    left: 10%;
}
.option
{
    background-color: #008CFF;
    border: none;
    color: white;
    width: 40%;
    border-radius: 4px;
    position: relative;
    left: 10%;
    height: 40px;
    padding: 10px;
    margin: 20px;
    font-weight: bold;
    cursor: pointer;
}
.option:hover
{
    background-color: #000099;
    border-color: #33CCFF;
    width: 41%;
    height: 55px;
    color:#33CCFF;
    transition: 0.5s;
    padding: 12px;
    cursor: pointer;
}
.optionActive
{
    background-color: #000099;
    border-color: #33CCFF;
    box-shadow: 0 0 10px #33CCFF;
    width: 41%;
    height: 55px;
    color:#33CCFF;
    transition: 0.5s;
    padding: 12px;
    cursor: pointer;
}
  
        
        #timer
        {
            color: white;
            background-color: #000099;
            text-align: center;
            width: 10%;
            float: right;
        }
        
    </style>
          
    </head>
    <body>
        <div id="header"><span id="header-content"><b>QUIZ NAME</b></span></div>
			
        <div id="timer"></div>
        <div id="question">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
        
        <form class="form-horizontal" role="form" name="optionForm" id="option-form" action="Question_page.php" method="post">
            <div id="option1" class="option" onclick="selectOption(this)">
                <input id="radio1" type="radio" name="answer1" value="1">&nbsp;1
            </div>
            
            <div id="option2" class="option" onclick="selectOption(this)">
                <input id="radio2" type="radio" name="answer1" value="2">&nbsp;2
            </div>
            
            <div id="option3" class="option" onclick="selectOption(this)">
                <input id="radio3" type="radio" name="answer1" value="3">&nbsp;3
            </div>
            
            <div id="option4" class="option" onclick="selectOption(this)">
                <input id="radio4" type="radio" name="answer1" value="4">&nbsp;4
            </div>
            
            <div>
                <input type="button" class="button" value="Questions" onclick="questions()">
                <input type="submit" class="button" value="Previous" onclick="previous()">
                <input type="button" class="button" value="Bookmark" onclick="bookmark()">
                <input type="submit" class="button" value="Next" onclick="next()">
                <input type="submit" class="button" value="Submit" onclick="submit()">
            </div>
            
        </form>
        <div id="ans" style="position:relative;left:20%"></div>
        
        <br><br><br>
		<script type="text/javascript" src="question_page_script.js"></script>
    <!--    <script type="text/javascript">
            var x = setInterval(timer, 1000);
        </script>
        <script>setTimeout(function(){window.location.href='User_Profile.php'},1800000);</script>-->
        <script src="question_page_question_script.js"></script>
		
	</body>
</html>