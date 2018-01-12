<?php
    $connect=mysqli_connect('localhost','root','Pink#4119','players');
    if(mysqli_connect_errno($connect))
    {
        echo "Connection failed";
    }
?>