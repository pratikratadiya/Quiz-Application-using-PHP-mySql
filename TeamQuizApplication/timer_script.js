setInterval(function(){
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","timer.php",false);
    xmlhttp.send(null);
    document.getElementById("timer").innerHTML=xmlhttp.responseText;
    
},1000)
setTimeout(function(){
    window.location="result.php";
},1800000)
setTimeout(function(){
    document.getElementById("timer").style.backgroundColor="#EEEE00";
},1200000)
setTimeout(function(){
    document.getElementById("timer").style.backgroundColor="#990000";
},600000)