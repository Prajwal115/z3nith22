<?php
session_start();
if($_SESSION['name'] != "futurz"){
  header("Location: form.php");
}

$conn = mysqli_connect("localhost","root","","z3nith");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<style>
h1{
  text-align: center;
  color:black;
  font-family: "Montserrat",sans-serif;
  font-size: 50px;
  margin-top:30px;
}
h2{
  color:black;
  text-align: center;
    font-family: "Montserrat",sans-serif;
      font-size: 30px;
}
h3{
  font-family: "Montserrat",sans-serif;
    font-size: 25px;
text-align: center;
}
#one{
float:left;
  width:50px;
  height:50px;
  margin-left: 20px;
}
.mem{
  height:300px;
  width: 300px;
border: 5px solid white;
float:left;
margin-right: 100px;
  }
  #o{
    margin-left: 100px;
  }

  body{
    background-image: linear-gradient(to right,rgba(234,98,20,255),white );

  }
  input{
    text-align: center;
    margin-left: 110px;

font-size: 25px;
  }
  #hah{
    height:80px;
    width:80px;
  }
  #yea{
    margin-left: 50px;
    width:220px;
  }
  p{
    color:black;
    text-align: center;
    font-size: 20px;
    font-family: "Montserrat",serif;
    font-weight: 800;
  }
  input[type = "submit"]{
transform: translateY(100%);
padding: 15px;
border-radius: 25px;
border:none;
    color:black;
    background-color: rgba(234,98,20,255);
  }
  input[type = "submit"]:hover{
    background-color: black;
    transition: 0.8s;
    color:white;
  }
.mem{
    margin-bottom: 100px;
  }
  button{
  padding: 15px;
  border-radius: 25px;
  border:none;
  font-size: 30px;
  transform: translate(500%,-100%);
      color:black;
      background-color: rgba(234,98,20,255);
    }
    button:hover{
      background-color: black;
      transition: 0.8s;
      color:white;
    }
</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">

<h1>Update Leaderboard here</h1>
<p>
  Click Submit after each entry! if it's successfully done you'll be redirected to the ldb page! good luck!
</p>
<h2>Enter here</h2>



<div class = "mem" id = "o">
<h3 id = "od">Position</h3>

<form action="authen.php" method="POST">
<input type = "text" name = "num" id = "hah" required/>


</div>
<div class = "mem">
<h3 id = "od">Name/Team</h3>
<input type = "text" name = "uname" id = "yea"required />




</div>
<div class = "mem">
  <h3 id = "od">Points</h3>
<input type = "text" name = "points" id = "hah"required />



<input type = "submit" value="Submit"/>
</form>
</div>

<!--second row-->
<p>
  don't forget to!
</p>
<a href="destroy.php">
<button>LOGOUT</button>
</a>

</html>
