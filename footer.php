<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport", content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="style1.css">
  <script src="https://kit.fontawesome.com/5787a7a885.js" crossorigin="anonymous"></script>
</head>
<style>

body{
    background-color:black;
}
.underline {
    width: 100%;
    height: 3px;
    background: white;
    border-radius: 1.5px;
    position: absolute;
    top: 25px;
    left: 0;
}

.events{
  width:300px;
  height:300px;
  background-color: white;
margin-right: -20px;
}
.events{
  border-radius: 30px;
}
.rows #pehla{
margin-left: 120px;
}
.rows button{
  width:5%;
  margin-left: 5px;
transform: translateY(-150%);
margin-bottom: 5%;
}
.rows button:hover{
transform: translateY(-152%);
  color:white;
}

.rows button:hover{
background-color: #0d0d0d;
}
.events{
  float:left;
}
#sec{
  display: none;

}
#sec button{
float:right;
}
.event:hover img{
width:81%;
transition: 0.8s;

}
@media screen and (max-width: 500px){
  footer{
    position: absolute;
    transform: translateY(470%);
  }
#so{
transform: translateX(100%);

}
#li{
  transform: translateX(-10%);
}
}
@media screen and (max-width: 450px){
#so{
  transform: translateX(78%);
}
#add{
  transform: translateX(-20%);
}
#li{
      transform: translateX(-55%);
}
}






@media screen and (max-width: 490px){
  footer{
transform: translate(-4%,650%);
  }
  #so{
    transform: translateX(15%);
  }
}
@media screen and (max-width: 420px){
#li{
  transform: translateX(-30%);
}
}
@media screen and (max-width: 400px){
#add{
  transform: translateX(-15%);
}
footer .logo{
  transform: translateX(-5%);
}
}
@media screen and (max-width: 390px){
#li{
  transform: translateX(-5%);
}
}
@media screen and (max-width: 380px){
  #li{
    transform: translateX(-10%);
  }
}
@media screen and (max-width: 370px){
#li{
  transform: translateX(-20%);
}
footer{
  transform: translateY(620%);
}

}
@media screen and (max-width: 360px){
#li{
  transform: translateX(40%);
}
footer{
  transform: translateY(620%);
}

}
@media screen and (max-width: 350px){
#li{
  transform: translateX(40%);
}
footer{
  transform: translate(-5%,560%);
}

}
@media screen and (max-width: 320px){
#li{
  transform: translateX(20%);
}
#so{
  transform: translateX(7%);
}
footer{
  transform: translate(-5%,560%);
}

}
@media screen and (max-width: 300px){
#li{
  transform: translateX(-50%);
}
  #add{
    transform: translateX(20%);
  }
  #so{
    transform: translateX(10%);
  }
}
html,body{
  overflow-x: hidden;

}
@media screen and (max-width: 320px){
.social-icons .fa-brands {
    width:40px;
    height: 40px;
}
}

</style>

<body>
  <footer>
    <div class="row">
      <div class="col">
        <img src="IMG/2022.png" class="logo">
      </div>
      <div class="col" id ="add">
        <h3>Address <div class="underline"><span></span></div> </h3>

        <p>Air Force Golden Jubilee</p>
        <p>Institute, Subroto Park</p>
        <p>New Delhi, India - 110010</p>
        <p class="email-id">futurz.afgji@gmail.com</p>
      </div>
      <div class="col" id = "li">
        <h3>Links <div class="underline"></div></h3>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="IMG/Z3NITH'22 Brochure.pdf">Brochure</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="video.php">Videos</a></li>
          <li><a href="home.php#myCarousel">Archive</a></li>
        </ul>
      </div>
      <div class="col" id = "so">
        <h3>Our Socials <div class="underline"><span></span></div></h3>
        <div class="social-icons">
          <a href = "https://discord.gg/DUt9xfmR">
          <i class="fa-brands fa-discord"></i>
          </a>
          <a href = "https://www.instagram.com/futurzclub/">
          <i class="fa-brands fa-instagram"></i>
          </a>
          <a href = "https://www.linkedin.com/company/futurzclub/">
          <i class="fa-brands fa-linkedin-in"></i>
          </a>
          <a href = "https://www.youtube.com/channel/UCruoGaN8tygeJs3aY0K3n3w">
          <i class="fa-brands fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <p class="copyright">© 2022 Futurz Club | All Rights Reserved</p>
  </footer>
  <script>
function die(){
  document.getElementById("bione").style.display = "none";
  document.getElementById("bitwo").style.display = "none";
  document.getElementById("sec").style.display = "block";
  document.getElementById("pehle").style.display = "none";
  document.getElementById("bifor").style.display = "block";
  document.getElementById("bithr").style.display = "block";
}
  </script>
</body>
</html>
