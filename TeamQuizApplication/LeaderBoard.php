<!DOCTYPE html>
<?php include "db_connect.php"; ?>
<?php
    $query=mysqli_query($connect,"SELECT Username,Points FROM details
                            ORDER BY Points DESC,Username ASC");
?>
<html>
<head>
    <title>Leaderboard</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="quiz_app.css">
    <link rel="stylesheet" href="quiz_app_links.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
    align-items: center;
}

#customers td, #customers th {
    height: 50px;
    text-align: center;
    vertical-align: middle;
    border: 1px solid #ddd;
    padding: 8px;
    color: white;
}

#customers tr
{background-color: #00acc1;
}
#customers tr:hover {background-color: #00bcd4;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #00838f;
    color: white;
}
.link
        {
            margin: 20px;
        }
        
    </style>
</head>
<body>
 
<div id="header">
    <span id="header-content"><b> LEADERBOARD</b></span>
</div>
<p>
<center>
    <br><br><br>
  <table style="width:70%"  id="customers">
      <thead>
        <tr>
            <th>Rank</th>
            <th>Player</th>
            <th>Points</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(mysqli_num_rows($query)==0)
          {
              echo '<tr><td colspan="2">No players yet registered</td></tr>';
          }
          else
          {
              $rank=1;
              while($row=mysqli_fetch_assoc($query))
              {
                  echo "<tr><td>{$rank}</td><td>{$row['Username']}</td><td>{$row['Points']}</td></tr>\n";
                  $rank++;
              }
          }
        ?>
      </tbody>
  </table>
</center>
</p>
</body>
<div id="links">
    <div class="link">
        <i class="material-icons" style="font-size:180px">account_box</i> <br>
        <a href="User_Profile.php" button class="button"><span>My Profile</span></a>
    </div>

    <div class="link">
        <i class="material-icons" style="font-size:180px">assessment</i> <br>
        <a href="index.php" button class="button"><span>Quizzes</span></a>
    </div>

    <div class="link">
        <i class="material-icons" style="font-size:180px">exit_to_app</i> <br>
        <a href="User_Logout.php" button class="button"><span>Log out</span></a>
    </div>
</div>
</html>
