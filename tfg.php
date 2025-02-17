<!DOCTYPE html>
<html>
<head>
      <link rel="icon" href="tfg.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: 'Montserrat', sans-serif;
  margin: 0;
  padding: 0;
}

.overlay {
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;

  background-color:white;
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
body{
  animation: 2s dawn ease forwards;
  position: relative;
  background-color: black;
}
@keyframes dawn{
  from{
    opacity:0;
  }
  to{
    opacity: 1;
  }
}
.overlay img{
  width:70%;
transform: translate(15%,-30%);
top:50%;
animation: dawn 5s;
}
.dot{
  float:left;
  border-radius: 25px;
  width:30px;
  height:30px;
  background-color: linear-gradient(#7FFF00,#E0FFFF, to right);
}


@keyframes scaling{
  0%, 100%{
    transform: scale(0.2);
    background-color: #30FFB7;
  }
  40%{
    transform: scale(1);
    background-color: #07DEFF;
  }
  50%{
    transform: scale(1);
    background-color: #0761FF;
  }
}


</style>
</head>
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
<body onload="closeNav()">

<div id="myNav" class="overlay">

  <div class="overlay-content">



  <img src = "tfglogo.png" />


  </div>
</div>


<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  setTimeout(function(){document.getElementById("myNav").style.height = "0%"},4000);
}
</script>

<!-- SLider begins from here -->
<?php
$url = 'http://rocky-garden-39346.herokuapp.com/images';
$contents = file_get_contents($url);
if($contents !== false){
  $final = json_decode($contents);

  $name1 = $final[0]->student_name;
  $name2 = $final[1]->student_name;
  $name3 = $final[2]->student_name;
  $name4 = $final[3]->student_name;
  $name5 = $final[4]->student_name;
  $name6 = $final[5]->student_name;
  $name7 = $final[6]->student_name;
  $name8 = $final[7]->student_name;
  $name9 = $final[8]->student_name;
  $name10 = $final[9]->student_name;

  $clasec1 = $final[0]->student_class." ".$final[0]->student_section;
  $clasec2 = $final[1]->student_class." ".$final[1]->student_section;
  $clasec3 = $final[2]->student_class." ".$final[2]->student_section;
  $clasec4 = $final[3]->student_class." ".$final[3]->student_section;
  $clasec5 = $final[4]->student_class." ".$final[4]->student_section;
  $clasec6 = $final[5]->student_class." ".$final[5]->student_section;
  $clasec7 = $final[6]->student_class." ".$final[6]->student_section;
  $clasec8 = $final[7]->student_class." ".$final[7]->student_section;
  $clasec9 = $final[8]->student_class." ".$final[8]->student_section;
  $clasec10 = $final[9]->student_class." ".$final[9]->student_section;

  $image1 = $final[0]->image_url;
  $image2 = $final[1]->image_url;
  $image3 = $final[2]->image_url;
  $image4 = $final[3]->image_url;
  $image5 = $final[4]->image_url;
  $image6 = $final[5]->image_url;
  $image7 = $final[6]->image_url;
  $image8 = $final[7]->image_url;
  $image9 = $final[8]->image_url;
  $image10 = $final[9]->image_url;

  $quote1 = $final[0]->student_quote;
  $quote2 = $final[1]->student_quote;
  $quote3 = $final[2]->student_quote;
  $quote4 = $final[3]->student_quote;
  $quote5 = $final[4]->student_quote;
  $quote6 = $final[5]->student_quote;
  $quote7 = $final[6]->student_quote;
  $quote8 = $final[7]->student_quote;
  $quote9 = $final[8]->student_quote;
  $quote10 = $final[9]->student_quote;

}
list($width1, $height1, $type1, $attr1) = getimagesize($image1);
if($width1-$height1>150){

  $store1 = "<img id = 'a1' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image1."' />";

}

if($width1==$height1){
  $store1 = "<img id = 'a1' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image1."' />";
}
if($width1-$height1<150){

  $store1 = "<img id = 'a1' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image1."' />";
}
if ($height1>$width1 && $height1-$width1>100){
  $store1 = "<img id = 'a1' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image1."' />";
}
if($height1>$width1 && $height1-$width1<100){
  $store1 = "<img id = 'a1' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image1."' />";
}
list($width2, $height2, $type2, $attr2) = getimagesize($image2);
if($width2-$height2>150){

  $store2 = "<img id = 'a2' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image2."' />";

}

if($width2==$height2){
  $store2 = "<img id = 'a2' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image2."' />";
}
if($width2-$height2<150){

  $store2 = "<img id = 'a2' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image2."' />";
}
if ($height2>$width2 && $height2-$width2>100){
  $store2 = "<img id = 'a2' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image2."' />";
}
if($height2>$width2 && $height2-$width2<100){
  $store2 = "<img id = 'a2' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image2."' />";
}
list($width3, $height3, $type3, $attr3) = getimagesize($image3);
if($width3-$height3>150){

  $store3 = "<img id = 'a3' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image3."' />";

}

if($width3==$height3){
  $store3 = "<img id = 'a3' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image3."' />";
}
if($width3-$height3<150){

  $store3 = "<img id = 'a3' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image3."' />";
}
if ($height3>$width3 && $height3-$width3>100){
  $store3 = "<img id = 'a3' class = 'mySlides' style = 'width:27%; transform:translateX(120%);'src = '".$image3."' />";
}
if($height3>$width3 && $height3-$width3<100){
  $store3 = "<img id = 'a3' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image3."' />";
}
list($width4, $height4, $type4, $attr4) = getimagesize($image4);
if($width4-$height4>150){

  $store4 = "<img id = 'a4' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image4."' />";

}

if($width4==$height4){
  $store4 = "<img id = 'a4' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image4."' />";
}
if($width4-$height4<150){

  $store4 = "<img id = 'a4' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image4."' />";
}
if ($height4>$width4 && $height4-$width4>100){
  $store4 = "<img id = 'a4' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image4."' />";
}
if($height4>$width4 && $height4-$width4<100){
  $store4 = "<img id = 'a4' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image4."' />";
}
list($width5, $height5, $type5, $attr5) = getimagesize($image5);
if($width5-$height5>150){

  $store5 = "<img id = 'a5' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image5."' />";

}

if($width5==$height5){
  $store5 = "<img id = 'a5' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image5."' />";
}
if($width5-$height5<150){

  $store5 = "<img id = 'a5' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image5."' />";
}
if ($height5>$width5 && $height5-$width5>100){
  $store5 = "<img id = 'a5' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image5."' />";
}
if($height5>$width5 && $height5-$width5<100){
  $store5 = "<img id = 'a5' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image5."' />";
}
list($width6, $height6, $type6, $attr6) = getimagesize($image6);
if($width6-$height6>150){

  $store6 = "<img id = 'a6' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image6."' />";

}


if($width6==$height6){
  $store6 = "<img id = 'a6'class = 'mySlides'  style = 'width:40%; transform:translateX(110%);'src = '".$image6."' />";
}
if($width6-$height6<150){

  $store6 = "<img id = 'a6' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image6."' />";
}
if ($height6>$width6 && $height6-$width6>100){
  $store6 = "<img id = 'a6' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image6."' />";
}
if($height6>$width6 && $height6-$width6<100){
  $store6 = "<img id = 'a6' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image6."' />";
}

list($width7, $height7, $type7, $attr7) = getimagesize($image7);
if($width7-$height7>150){

  $store7 = "<img id = 'a7' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image7."' />";

}

if($width7==$height7){
  $store7 = "<img id = 'a7' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image7."' />";
}
if($width7-$height7<150){

  $store7 = "<img id = 'a7' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image7."' />";
}
if ($height7>$width7 && $height7-$width7>100){
  $store7 = "<img id = 'a7' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image7."' />";
}
if($height7>$width7 && $height7-$width7<100){
  $store7 = "<img id = 'a7' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image7."' />";
}
list($width8, $height8, $type8, $attr8) = getimagesize($image8);
if($width8-$height8>150){

  $store8 = "<img id = 'a8'class = 'mySlides'  style = 'width:75%; transform:translateX(15%);'src = '".$image8."' />";

}

if($width8==$height8){
  $store8 = "<img id = 'a8' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image8."' />";
}
if($width8-$height8<150){

  $store8 = "<img id = 'a8' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image8."' />";
}
if ($height8>$width8 && $height8-$width8>100){
  $store8 = "<img id = 'a8' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image8."' />";
}
if($height8>$width8 && $height8-$width8<100){
  $store8 = "<img id = 'a8' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image8."' />";
}
list($width9, $height9, $type9, $attr9) = getimagesize($image9);
if($width9-$height9>150){

  $store9 = "<img id = 'a9' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image9."' />";

}

if($width9==$height9){
  $store9 = "<img id = 'a9' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image9."' />";
}
if($width9-$height9<150){

  $store9 = "<img id = 'a9' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image9."' />";
}
if ($height9>$width9 && $height9-$width9>100){
  $store9 = "<img id = 'a9' style = 'width:20%; transform:translateX(190%);'src = '".$image9."' />";
}
if($height9>$width9 && $height9-$width9<100){
  $store9 = "<img id = 'a9' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image9."' />";
}
list($width10, $height10, $type10, $attr10) = getimagesize($image10);
if($width10-$height10>150){

  $store10 = "<img id = 'a10' class = 'mySlides' style = 'width:75%; transform:translateX(15%);'src = '".$image10."' />";

}

if($width10==$height10){
  $store10 = "<img id = 'a10' class = 'mySlides' style = 'width:40%; transform:translateX(110%);'src = '".$image10."' />";
}
if($width10-$height10<150){

  $store10 = "<img id = 'a10' class = 'mySlides' style = 'width:44%; transform:translateX(60%);'src = '".$image10."' />";
}
if ($height10>$width10 && $height10-$width10>100){
  $store10 = "<img id = 'a10' class = 'mySlides' style = 'width:20%; transform:translateX(190%);'src = '".$image10."' />";
}
if($height10>$width10 && $height10-$width10<100){
  $store10 = "<img id = 'a9' class = 'mySlides' style = 'width:37%; transform:translateX(90%);'src = '".$image10."' />";
}

?>


<html lang="en">
<head>
  <title>Tech For Good | Futurz Initiative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>

nav{
  height: 190px;
  background-color: whitesmoke;
}
nav img{
  width:27%;
  margin-left: 300px;

}
#tf{
  width:28%;
  margin-left: 320px;
  margin-top: -2.5px;
}
#fc{
    width:12%;
    margin-left: 20px;
    margin-top: 30px;
      float:left;
}
#fc2{
    width:8%;
    margin-left: 20px;
    margin-top: 30px;
      float:right;
      padding-right:15px;
}
h1{
  color:white;
    text-align: center;
  font-family: "Montserrat",sans-serif;
  font-weight: 500;
  font-size: 65px;
}
h1:before {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;

  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;

  position: absolute;
}
.slider{
  width:1349px;
  height: 600px;
  background: url("tfglogo.png");
  background-size:275px;
background-position:center;
}
.caption{
padding-bottom: 0;
position: absolute;
  height:125px;
  width:1349px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 15px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 35px;
  margin-top: 40px;
  text-align: center;

}
html{
  overflow-x: hidden;
}
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: linear-gradient(to left,#16A473 ,#02A197 );
  border-radius: 10px;
  transition: 0.8s;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: linear-gradient(to right,#16A473 ,#02A197 );
}
#one{
transform: translateY(-400%);
  widtH:80px;
  height:80px;
  font-size: 35px;
  font-family: "Montserrat",sans-serif;
  padding: 10px;
  border-radius: 50px;
  margin-left: 10px;
  float:left;
  border: none;
    background:#02A197;
    color:white;
    transition: 0.8s;
    font-weight: bold;
}
#two{
      font-weight: bold;
  margin-top: -300px;
  widtH:80px;
  height:80px;
  font-size: 35px;
      color:white;
  font-family: "Montserrat",sans-serif;
  padding: 10px;
  border-radius: 50px;
  margin-left: 10px;
  margin-right: 10px;
  float:right;
    background:#02A197;
  border: none;
transition: 0.8s;
}
#one:hover,#two:hover{
  background-color: #16A473;
}

#b2,#b3,#b4,#b5,#b6,#b7,#b8,#b9,#b10{
  display: none;
}

#p1,#p2,#p3,#p4,#p5,#p6,#p7,#p8,#p9,#p10{
  display: none;
  font-weight: bold;
margin-top: -275px;
widtH:80px;
height:80px;
font-size: 35px;
  color:white;
font-family: "Montserrat",sans-serif;
padding: 10px;
border-radius: 50px;
margin-left: 10px;
margin-right: 10px;
float:right;
background:#02A197;
border: none;
transition: 0.8s;
}
#p1:hover,#p2:hover,#p3:hover,#p4:hover,#p5:hover,#p6:hover,#p7:hover,#p8:hover,#p9:hover{
    background-color: #16A473;
}
#one,#p1{
  display: block;
}
/* Mobile Adaptations from here 500px to 450px*/
@media only screen and (max-width:500px){
  #nav{
    width:500px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:30%;
  margin-left: 10px;
  margin-top: 25px;
}
#tf{
  width:50%;
  margin-left: -5px;
  margin-top: 20px;
}
#fc2{
  width:20%;
  margin-left: 30px;
  margin-right: 25px;
  margin-top: -125px;
}
h1:before {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;
margin-top: -30px;
  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;
  margin-top: 30px;
  position: absolute;
}

.slider{

  height: 300px;
  background: url("tfglogo.png");
  background-size:175px;
background-position:center;
}
.slider{
  margin-top: 100px;
  width:500px;
}
.slider img{
  margin-top: 10px;
}
.caption{
  margin-top: 10px;
padding-bottom: 0;
position: absolute;
padding: 5px;
  width:490px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 10px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 25px;
  margin-top: 40px;
  text-align: left;

}
#two{
  margin-top: 150px;
}
#one{
  transform: translateY(0%);
    margin-top: 150px;
}
.overlay img{
  width:100%;

margin-top:-10%;
animation: dawn 5s;

}
.overlay{
  overflow-x: hidden;
}
html,body{
  overflow-x: hidden;
}
}
@media only screen and (max-width:450px){
  #nav{
    width:450px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:30%;
  margin-left: 10px;
  margin-top: 25px;
}
#tf{
  width:50%;
  margin-left: -5px;
  margin-top: 20px;
}
#fc2{
  width:20%;
  margin-left: 40px;
  margin-right: 25px;
  margin-top: -105px;
}
h1:before {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;
margin-top: -30px;
  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 300px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;
  margin-top: 30px;
  position: absolute;
}

.slider{

  height: 300px;
  background: url("tfglogo.png");
  background-size:175px;
background-position:center;
}
.slider{
  margin-top: 100px;
  width:450px;
}
.slider img{
  margin-top: 10px;
}
.caption{
  margin-top: 10px;
padding-bottom: 0;
position: absolute;
padding: 5px;
  width:450px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 10px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 25px;
  margin-top: 40px;
  text-align: left;

}
#two{
  margin-top: 150px;
}
#one{
  transform: translateY(0%);
    margin-top: 150px;
}
.overlay img{
  width:100%;

margin-top:-10%;
animation: dawn 5s;

}
.overlay{
  overflow-x: hidden;
}
html,body{
  overflow-x: hidden;
}
}
@media only screen and (max-width:400px){
  #nav{
    width:400px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:35%;
  margin-left: 5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -25px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -115px;
}
h1:before {
  content: "";
  display: block;
  width: 250px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;
margin-top: -30px;
  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 250px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;
  margin-top: 30px;
  position: absolute;
}

.slider{

  height: 300px;
  background: url("tfglogo.png");
  background-size:175px;
background-position:center;
}
.slider{
  margin-top: 100px;
  width:400px;
}
.slider img{
  margin-top: 10px;
}
.caption{
  margin-top: 10px;
padding-bottom: 0;
position: absolute;
padding: 5px;
  width:400px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 10px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 20px;
  margin-top: 40px;
  text-align: left;

}
#two{
  margin-top: 150px;
}
#one{
  transform: translateY(0%);
    margin-top: 150px;
}
.overlay img{
  width:100%;

margin-top:-10%;
animation: dawn 5s;

}
.overlay{
  overflow-x: hidden;
}
html,body{
  overflow-x: hidden;
}
}
@media only screen and (max-width:380px){
  #nav{
    width:380px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:35%;
  margin-left: 5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -25px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -110px;
}
.slider{
  margin-top: 100px;
  width:380px;
}
}
@media only screen and (max-width:350px){
  #nav{
    width:350px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:35%;
  margin-left: -5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -25px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -95px;
}
h1:before {
  content: "";
  display: block;
  width: 220px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;
margin-top: -30px;
  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 220px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;
  margin-top: 30px;
  position: absolute;
}

.slider{

  height: 300px;
  background: url("tfglogo.png");
  background-size:175px;
background-position:center;
}
.slider{
  margin-top: 100px;
  width:350px;
}
.slider img{
  margin-top: 10px;
}
.caption{
  margin-top: 10px;
padding-bottom: 0;
position: absolute;
padding: 5px;
  width:400px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 10px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 18px;
  margin-top: 40px;
  text-align: left;

}
#two{
  margin-top: 150px;
}
#one{
  transform: translateY(0%);
    margin-top: 150px;
}
.overlay img{
  width:100%;

margin-top:-10%;
animation: dawn 5s;

}
.overlay{
  overflow-x: hidden;
}
html,body{
  overflow-x: hidden;
}
}
@media only screen and (max-width:330px){
  #nav{
    width:330px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
.slider{
  margin-top: 100px;
  width:330px;
}
#fc{
  width:35%;
  margin-left: 5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -20px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -95px;
}
}
@media only screen and (max-width:310px){
  #nav{
    width:330px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
.slider{
  margin-top: 100px;
  width:330px;
}
#fc{
  width:35%;
  margin-left: 5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -20px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -75px;
}
h1{
  font-size: 45px;
}
}
@media only screen and (max-width:300px){
  #nav{
    width:300px;
  }
#fc,#tf,#fc2{
  margin: 0;
  padding: 0;
}
#fc{
  width:35%;
  margin-left: -5px;
  margin-top: 25px;
}
#tf{
  width:60%;
  margin-left: -25px;
  margin-top: 20px;
}
#fc2{
  width:22%;
  margin-left: 80px;
  margin-right: 5px;
  margin-top: -105px;
}
h1:before {
  content: "";
  display: block;
  width: 220px;
  height: 10px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  border-top-right-radius: 35px;
  border-bottom-right-radius: 35px;
  left: 0;
margin-top: -30px;
  position: absolute;
}

h1:after {
  content: "";
  display: block;
  width: 220px;
  height: 10px;
  border-top-left-radius: 35px;
  border-bottom-left-radius: 35px;
  background: linear-gradient(to right,#16A473,#2DA84C,#02A197);
  right: 0;
  margin-top: 30px;
  position: absolute;
}

.slider{

  height: 300px;
  background: url("tfglogo.png");
  background-size:175px;
background-position:center;
}
.slider{
  margin-top: 100px;
  width:300px;
}
.slider img{
  margin-top: 10px;
}
.caption{
  margin-top: 10px;
padding-bottom: 0;
position: absolute;
padding: 5px;
  width:400px;
  background: linear-gradient(to left,#16A473 ,#02A197 );
  transform: translateY(-10%);
}
.caption h2{
  color:White;
  margin-left: 10px;
font-family: "Montserrat",sans-serif;
font-weight: 500;
  font-size: 15px;
  margin-top: 40px;
  text-align: left;

}
#two{
  margin-top: 150px;
}
#one{
  transform: translateY(0%);
    margin-top: 150px;
}
.overlay img{
  width:100%;

margin-top:-10%;
animation: dawn 5s;

}
.overlay{
  overflow-x: hidden;
}
html,body{
  overflow-x: hidden;
}
}
</style>




</head>
<body>
<nav>
  <img id = "fc" src = "IMG/fc.png" />
  <img id = "tf" src = "IMG/tfg.png" />
  <img id = "fc2" src = "IMG/2022.png" />
</nav>
<br />
<h1>The Creations</h1>
<br />
<div class = "slider">

  <div class = "image">
<?php
echo $store1;





 ?>
    </div>

  <div class = "caption">
        <!---BUTTON one-->
    <h2 id = "b1" ><?php echo $name1," | ",$clasec1," | ",$quote1?></h2>
  </div>
  </div>
  <div class = "slider">

    <div class = "image">
  <?php
  echo $store2;





   ?>
      </div>

    <div class = "caption">
          <!---BUTTON one-->
      <h2 id = "b1" ><?php echo $name2," | ",$clasec2," | ",$quote2?></h2>
    </div>
    </div>
    <div class = "slider">

      <div class = "image">
    <?php
    echo $store3;





     ?>
        </div>

      <div class = "caption">
            <!---BUTTON one-->
        <h2 id = "b1" ><?php echo $name3," | ",$clasec3," | ",$quote3?></h2>
      </div>
      </div>
      <div class = "slider">

        <div class = "image">
      <?php
      echo $store4;





       ?>
          </div>

        <div class = "caption">
              <!---BUTTON one-->
          <h2 id = "b1" ><?php echo $name4," | ",$clasec4," | ",$quote4?></h2>
        </div>
        </div>
        <div class = "slider">

          <div class = "image">
        <?php
        echo $store5;





         ?>
            </div>

          <div class = "caption">
                <!---BUTTON one-->
            <h2 id = "b1" ><?php echo $name5," | ",$clasec5," | ",$quote5?></h2>
          </div>
          </div>
          <div class = "slider">

            <div class = "image">
          <?php
          echo $store6;





           ?>
              </div>

            <div class = "caption">
                  <!---BUTTON one-->
              <h2 id = "b1" ><?php echo $name6," | ",$clasec6," | ",$quote6?></h2>
            </div>
            </div>
            <div class = "slider">

              <div class = "image">
            <?php
            echo $store7;





             ?>
                </div>

              <div class = "caption">
                    <!---BUTTON one-->
                <h2 id = "b1" ><?php echo $name7," | ",$clasec7," | ",$quote7?></h2>
              </div>
              </div>
              <div class = "slider">

                <div class = "image">
              <?php
              echo $store8;





               ?>
                  </div>

                <div class = "caption">
                      <!---BUTTON one-->
                  <h2 id = "b1" ><?php echo $name8," | ",$clasec8," | ",$quote8?></h2>
                </div>
                </div>

                  <div class = "slider">

                    <div class = "image">
                  <?php
                  echo $store9;





                   ?>
                      </div>

                    <div class = "caption">
                          <!---BUTTON one-->
                      <h2 id = "b1" ><?php echo $name9," | ",$clasec9," | ",$quote9?></h2>
                    </div>
                    </div>
                    <div class = "slider">

                      <div class = "image">
                    <?php
                    echo $store10;





                     ?>
                        </div>

                      <div class = "caption">
                            <!---BUTTON one-->
                        <h2 id = "b1" ><?php echo $name10," | ",$clasec10," | ",$quote10?></h2>
                      </div>
                      </div>

        <!---BUTTON TWO-->

        <button id = "one" onclick="plusSlides(-1)">←</button>
        <button id = "two" onclick="plusSlides(1)">→</button>

                <!---Captions-->



</div>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slider");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<div class = "space" style="height:200px;">

</div>

</html>
