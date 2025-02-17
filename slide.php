<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>

#myCarousel{
  width:1180px;
left: -25px;
display:flex;
right: -25px;
overflow: hidden;
}
body{
  background-color: black;
}
.carousel .item {
  height: 650px;
  width:1250px;

}
.item img {
    position: absolute;

    left: -25px;
    top: -25px;

}
.container{
  height: 100px;
}
.carousel-indicators li{
  border:none;

  background-color: white;
}
.carousel-indicators .active{
border:none;

background-color: #ddb86a;
}
.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
font-family: "Montserrat",sans-serif;
font-weight: 100;
text-transform: uppercase;
    overflow-x: hidden;
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
#special{
  color:#dbd7d2;
  text-decoration: line-through;
   text-decoration-color: #ddb86a;
text-decoration-thickness: 10px;
}
.overlay a {
  padding: 8px;
  text-decoration: none;
height:75px;
font-weight: 800;

  font-size: 45px;
  color:#dbd7d2;
  display: block;

    letter-spacing: 2.5px;
}

.overlay a:hover{
  color: #ddb86a;
}

.overlay .closebtn {
  position: absolute;

  font-size: 60px;
  color:white;
}
#sub{
  display: none;
}
@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
    overflow-x: hidden;  }
}
body{

background-color: black;

}
img{

margin-left:15px;
margin-top: 10px;
}
#ham{
  transform: translate(80%,80%);
  cursor: pointer;
  position: fixed;
}
#clse{
  float:left;
}
.closebtn{
  transform: translate(80%,80%);
    cursor: pointer;
    float:left;
}
h4{
  transform: translateY(-10%);
  border:none;
}
.dead h1{
  color:white;
  margin-top:500px;
  font-size: 35px;
  text-align: center;
font-family: "Montserrat",sans-serif;
font-weight: 800;
}
.dead{
position: absolute;

}
.parallax {
  /* The image used */
  background-image: url("IMG/ZeNITH v11 Forth Draft Ever Ever Ever.png");

  min-height: 690px;

  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 1370px;
  animation: enter;
  animation-duration: 2s;
  position: relative;
}
body{
  margin:0;
  padding: 0;
}
button{

font-size: 16px;
background-color: white;
border-radius: 25px;
text-transform: uppercase;
padding: 10px;
width:14%;
border: none;
font-weight: 700;
position: relative;
font-family: "Montserrat",sans-serif;
}
button:hover{
  background: #ddb86a;
  transition: 0.5s ease;
}

#thtext{
  background-color: #0d0d0d;
  margin: 0;
padding-top:100px;
padding-bottom:400px;
margin-bottom: 70px;
  transform: translateY(0%);
}
body{
  margin: 0;
    background-color: #0d0d0d;
    overflow-x: hidden;
}
#giant{
  color:white;
  margin-left: 110px;
  margin-right: 110px;
padding-top: 100px;

transform: translateY(-23%);
  font-family: "Montserrat",sans-serif;
  font-size: 42px;
  font-weight: 650;
  display: block;



}
#another{
  background-color: black;
  margin: 0;
  transform: translateY(-6%);
}
.overlay #logo{
width:375px;

transform: translate(15%,-300%);
  }
  .overlay-content a{
    transform: translateY(-120%);
  }
  #asset{
    transform: translate(420%,-150%);
    width:100px;
  }
footer{
  position: absolute;
  transform: translateY(800%);
}
body{
  margin: 0;

}
#myCarousel{
  position: absolute;
  margin-left: 120px;
margin-top: 35px;
}
::-webkit-scrollbar {
  width: 4px;

}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background:#ddb86a;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#ddb86d;
}
body{
    background-color:black;
}
.overlay #logo{
width:375px;

transform: translate(-1%,-115%);
  }
  #ham{
  transform: translate(80%,60%);
    cursor: pointer;
position: absolute;
  }
  span{
    color:white;
  }
  .carousel-indicators li{
    width: 10px;
    height: 10px;
    margin-right:5px;
  }
  .carousel-indicators .active{
    margin-right:5px;
  }
  .overlay a{
    height:80px;
  }
  .left .carousel-control{
    transform: translateX(-40%);
  }
  .underline {
      width: 100%;
      height: 3px;
      background: white;
      border-radius: 1.5px;
      position: absolute;
      margin-top: 10px;
      left: 0;
  }
  #thtext{
    background-color: #0d0d0d;
    margin: 0;
  padding-top:90px;
  padding-bottom:450px;
  margin-bottom: 80px;
    transform: translateY(-10%);
  }

.parallax{
    background-image: url("IMG/v11.png");
    animation-name: intro;
    animation-duration: 6s;
    animation-direction: forwards;
}
@keyframes intro {
0%{
  opacity: 0;
}

100%{
  opacity: 1;
}
}
.event{
  height:300px;
  width:310px;
  background-color:#0d0d0d;
  border-radius: 25px;
}
body{
  background-color: black;
}

.row{
  margin-left: 20px;

}
.event{
  float: left;

  margin-top: 60px;

}
#e1{
  margin-left: 45px;
}
#elone{
  background-color: white;
  width:50px;
  height:50px;
  color:black;
margin-left: 20px;
transform: translateY(0%);
border-radius: 25px;
font-size: 25px;
padding: 8px;
}
#elone:hover{
  color:white;
  background-color: grey;
  transition: 0.5s;
}
#eltwo{
  background-color: white;
  width:50px;
  height:50px;
  color:black;
margin-left: 1200px;
transform: translateY(0%);
border-radius: 25px;
font-size: 25px;
padding: 8px;
margin-right: 25px;
}
.row{
  transform: translateX(-2%);
}

#eltwo:hover{
  color:white;
  background-color: grey;
  transition: 0.5s;
}
#nonlol{
display:none;
}
.t, .s, .n{
background-color: #0d0d0d;
}
#hack{
width:80%;
margin: 25px;
}
.event:hover{
background-color: #0d0d0d;
transition: 0.8s;
height:420px;
}

h1{
color:white;
font-family: 'Syncopate', sans-serif;
font-size: 25px;
text-align: center;
display:none;
}
h2{
color:white;
font-family: "Montserrat",sans-serif;
font-size: 15px;
text-align: center;
letter-spacing: 2px;
display:none;
}
.event:hover h1{
display:block;
transition: 0.5s;
}
.event:hover h2{
display:block;
transition: 0.5s;
}
#myCarousel{
  transform: translateY(-20%);
}
#trans{
margin-left: 400px; width:42%;"
}
#xyz{
  width:15%; margin-left:90px;
}
#glob{
  width:15%; margin-left:90px;
}
#tas{
  width:22%; margin-left:230px;
}
#lef{
  font-size: 50px;
transform: translate(-10%,50%);
}
.carousel-control{
transform: translateY(55%);
}
.carousel-control button{
  width: 70px;
  height:70px;
  font-size: 40px;
  color:white;
  background-color: black;
padding: 5px;
border-radius: 50px;
}
#dead1{
  transform: translate(-25%,3880%);

}
#dead2{
  transform: translate(25%,3880%);
}
.parallax {
  /* The image used */
  background-image: url("IMG/Z3NITH'22 Cover MV.png");
    min-height: 680px;

}
#one{
  transform: translateY(120%);
}
#two{
  transform: translateY(20%);
}
#event{
  color:white;
  font-size: 100px;
  transform: translateY(30%);
}
.videos{
  display: none;
}
#one{
  margin-top: 400px;
}
#only{
  transform: translate(190%,490%);
  width:20%;
}
@media screen and (max-width: 500px){
.slideshow-container{
  display: none;
}
#ham{
  transform: translate(50%,50%);
  cursor: pointer;
  position: absolute;
}

.closebtn{
  transform: translate(50%,70%);
  cursor: pointer;
  position: absolute;
}
.overlay a {
  padding: 8px;
  text-decoration: none;
height:65px;
font-weight: 800;

  font-size: 40px;
  color:white;
  display: block;

    letter-spacing: 2.5px;
}
.overlay #logo{

  width:350px;

  transform: translate(0%,-125%);

}
#myCarousel{
  width: 500px;
  height: 350px;
  transform: translate(-20%,-200%);


display:flex;

overflow: hidden;
}
.carousel .item {
  height: 348px;
  width:500px;
}
.carousel-control{
transform: translateY(250%);
}
.carousel-control button{
  width: 50px;
  height:50px;
  font-size: 30px;
  color:white;
  background-color: black;
padding: 5px;
border-radius: 20px;
}

.item img {
    position: absolute;
transform: translate(3%,4%);


}
.parallax{
  background-size: 650px;
}
button{

font-size: 16px;
background-color: white;
border-radius: 25px;
text-transform: uppercase;
padding: 10px;
width:36%;
border: none;
font-weight: 600;
position: relative;
font-family: "Montserrat",sans-serif;
transform: translateY(-100%);
}
button:hover{
  background: #ddb86a;
  transition: 0.5s ease;
}
#one{
margin-left: 40px;
margin-top:430px;
}
#two{
margin-left: 235px;
transform: translateY(20%);
}
#two{
  width:36%;
}
#thtext{
  margin-top: 570px;
}
#thtext{
  background-color: #0d0d0d;

padding-top:30px;
padding-bottom:640px;
margin-bottom: 10px;
  transform: translateY(-92%);
}
#giant{
padding-top: 10px;
}
#giant{
  color:white;
width:80%;
transform: translateX(-11%);
  font-family: "Montserrat",sans-serif;
  font-size: 32px;
  font-weight: 650;
  display: block;



}
::-webkit-scrollbar {
  width: 0px;

}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background:#ddb86a;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#ddb86d;
}
#event{
  font-size: 80px;
    color:white;

    transform: translateY(-530%);

}
.videos{
  display: flex;
    transform: translateY(-100%);
}
#dead1{
  transform: translate(-15%,1600%);
height:50px;

}
#dead2{
  transform: translate(-5%,1600%);
}

  .sec{
    background-color: #0d0d0d;
    width:300px;
    height:300px;
    border-radius: 20px;
    transition: 0.5s;
    margin-right: 150px;
    margin-left: 100px;
    font-family: "Montserrat",serif;
    font-weight: 500px;
  }
.sec:hover{
    height:400px;
}
.sec:hover h2{
display: block;
}
.sec:hover h3{
display: block;
}
.videos h2{
  transform: translateY(60%);
display: none;
font-size: 22px;
}
.videos h3{
  display:none;

}
.videos h3{
  color:white;
  font-family: "Montserrat",sans-serif;
  font-size: 15px;
  text-align: center;
  letter-spacing: 2px;
  display:none;
      transform: translateY(180%);
}
.parallax{
   background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
   background-size:700px;

   background-repeat: no-repeat;
background-position-y:8px;
background-position-x:-100px;
background-attachment: fixed;
min-height: 660px;

 }

 #sub{
   text-transform: uppercase;
   color:white;
   font-family: "Montserrat",sans-serif;
   font-size: 20px;
   text-align: center;
   letter-spacing: 2px;
display: block;
       transform: translateY(-2210%);
 }

 #text{
   color:white;
   font-size: 25px;
   font-family: "Montserrat",sans-serif;
   font-weight: 500;
   transform: translate(28%,1600%);
 }

  #only{
    display:block;
    width:50%;
transform: translate(40%,570%);
  }
  #text{
    color:white;
    font-size: 25px;
    display: block;
    font-family: "Montserrat",sans-serif;
    font-weight: 500;
    transform: translate(28%,1600%);
  }
    }
    button{
      border: none;
    }
    body{
      background-color: black;
    }
@media screen and (max-width: 450px){
#only{
  width:60%;
transform:translate(20%,420%);
}
.parallax{
   background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
   background-size:650px;

   background-repeat: no-repeat;
background-position-y:8px;
background-position-x:-100px;
background-attachment: fixed;
min-height: 660px;

 }

#overlay-content a{
  font-size: 20px;
}
#one{
  margin-top: 460px;
  margin-left: 10px;
}
#event{
      font-size: 60px;
            transform: translateY(-720%);
}
.parallax{
   background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
   background-size:700px;

   background-repeat: no-repeat;
background-position-y:8px;
background-position-x:-100px;
background-attachment: fixed;
min-height: 660px;

 }


button{
  font-size: 15px;
  transform: translateX(30%);
}
#two{
  margin-left: 180px;
  width:35%;
}

#thtext{

padding-bottom:680px;
margin-bottom: 10px;
  transform: translateY(-82%);
}
#giant{

  padding-bottom:520px;
  margin-bottom: 10px;
    transform: translateY(-42%);
transform: translateX(-20%);
font-size: 29px;
  }
#dead1{
  transform: translate(-15%,2150%);
height:50px;

}
#dead2{
  transform: translate(-75%,2150%);
}
.sec{
    margin-left: 75px;
}
.parallax{
     background-size:610px;
}
#myCarousel{
  width: 470px;
  height: 350px;
}
}
@media screen and (max-width: 400px){
  #dead1{
    transform: translate(-15%,2150%);
  height:50px;

  }
  #dead2{
    transform: translate(15%,2150%);
  }
  .parallax{
       background-size:600px;
  }
  #only{
    width:70%;
  transform:translate(18%,430%);
  }
  .parallax{
     background: url("IMG/MVV.jpg"),linear-gradient(to top,black ,#ccc );
     background-size:600px;
     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
   .parallax{
      background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
      background-size:500px;

      background-repeat: no-repeat;
   background-position-y:8px;
   background-position-x:-100px;
   background-attachment: fixed;
   min-height: 660px;

    }


  #one{
    margin-top: 390px;
    margin-left: 30px;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:32%;
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-20%);
font-size: 28px;
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 70px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 350px;
    height: 350px;
  }
  #myCarousel img{
left:-35px;
  }

}
@media screen and (max-width: 390px){
  .parallax{
       background-size:600px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),linear-gradient(to top,black ,#ccc );

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
   .parallax{
      background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
      background-size:500px;

      background-repeat: no-repeat;
   background-position-y:8px;
   background-position-x:-100px;
   background-attachment: fixed;
   min-height: 660px;

    }

  #only{
    width:70%;
  transform:translate(18%,470%);
  }
  #one{
    margin-top: 450px;
transform: translate(-20%,120%);
        width:45%;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:32%;
    transform: translateX();
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-20%);
font-size: 28px;
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 70px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }
  #dead1{
    transform: translate(-15%,2150%);
  height:50px;

  }
  #dead2{
    transform: translate(15%,2150%);
  }
}
@media screen and (max-width: 380px){
  .parallax{
       background-size:580px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),linear-gradient(to top,black ,#ccc );

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
   .parallax{
      background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
      background-size:500px;

      background-repeat: no-repeat;
   background-position-y:8px;
   background-position-x:-100px;
   background-attachment: fixed;
   min-height: 660px;

    }

  #only{
    width:70%;
  transform:translate(18%,300%);
  }
  #one{
    margin-top: 290px;
    margin-left: 30px;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:32%;
        transform: translateY(1170%);
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-20%);
font-size: 28px;
  }
  #only{
    width:70%;
  transform:translate(18%,300%);
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    transform: translate(35%,70%);
    width:50%;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 150px;
    width:62%;
    transform: translate(-43%,100%);
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 70px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }

}
@media screen and (max-width: 360px){
  #thtext{
    padding-bottom:750px;
    margin-bottom: 10px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
     background-size:500px;

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }

  #giant{

    padding-bottom:750px;
    margin-bottom: 10px;
      transform: translateY(-82%);
  transform: translateX(-20%);
  font-size: 28px;
    }
  .parallax{
       background-size:600px;
  }
  #only{
    width:70%;
  transform:translate(18%,470%);
  }
  #one{
    margin-top: 390px;
    margin-left: 30px;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:52%;
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    transform: translate(36%,20%);
    width:50%;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 150px;
    width:32%;
    transform: translate(-45%,20%);
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-20%);
font-size: 28px;
  }
  #dead1{
    transform: translate(-15%,2350%);
  height:50px;

  }
  #dead2{
    transform: translate(15%,2350%);
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 70px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }

}
@media screen and (max-width: 370px){
  .parallax{
       background-size:380px;
  }

  #only{
    width:70%;
  transform:translate(18%,450%);
  }
  #one{
    margin-top: 390px;
    margin-left: 30px;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:32%;
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-20%);
font-size: 28px;
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 70px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
     background-size:500px;

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
}
@media screen and (max-width: 350px){
  .parallax{
       background-size:350px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),linear-gradient(to top,black ,#ccc );
background-size: 470px;
     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
  #only{
    width:80%;
  transform:translate(10%,410%);
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    width:30%;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
     background-size:500px;

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 150px;
    width:62%;
    transform: translate(-39%,150%);
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-40%);
font-size: 25px;
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 60px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    transform: translate(0%,120%);
    width:50%;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 180px;
    width:62%;
    transform: translate(30%,20%);
  }
}
@media screen and (max-width: 300px){
  .parallax{
       background-size:350px;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),linear-gradient(to top,black ,#ccc );
background-size: 470px;
     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-100px;
  background-attachment: fixed;
  min-height: 660px;

   }
  #only{
    width:80%;
  transform:translate(10%,410%);
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    width:30%;
  }
  .parallax{
     background: url("IMG/MVV.jpg"),rgba(55,55,55,0.1);
     background-size:600px;

     background-repeat: no-repeat;
  background-position-y:8px;
  background-position-x:-90px;
  background-attachment: fixed;
  min-height: 660px;

   }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 150px;
    width:32%;
    transform: translate(-39%,150%);
  }
#giant{

  padding-bottom:670px;
  margin-bottom: 10px;
    transform: translateY(-82%);
transform: translateX(-40%);
font-size: 25px;
  }
  .sec{
      margin-left: 50px;
  }
  #event{
    font-size: 60px;
      color:white;

      transform: translateY(-620%);

  }
  #myCarousel{
    width: 500px;
    height: 350px;
  }
  #one{
    margin-top: 350px;
    margin-left: 86px;
    transform: translate(0%,120%);
    width:30%;
  }
  button{
    font-size: 14px;
  }
  #two{
    margin-left: 150px;
    width:22%;
    transform: translate(-29%,150%);
  }

}
.spon{
transform:translateY(-50%);
}
#tit{
  text-align:center;font-size:28px; color:white; font-family:'Montserrat',sans-serif; transform:translateY(70%); font-weight:600; text-transform:uppercase;
}
</style>
<body>
<link rel = "stylesheet" href = "media.css" />
<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      <li data-target="#myCarousel" data-slide-to="7"></li>
      <li data-target="#myCarousel" data-slide-to="8"></li>
      <li data-target="#myCarousel" data-slide-to="9"></li>
      <li data-target="#myCarousel" data-slide-to="10"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="IMG/update_3.png" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="IMG/update_1.png" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="IMG/update_2.png" alt="New york" style="width:110%;">
      </div>
      <div class="item">
        <img src="IMG/update_4.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_5.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_6.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_7.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_8.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_9.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_10.png" alt="New york" style="width:100%;">
      </div>
      <div class="item">
        <img src="IMG/update_5.png" alt="New york" style="width:100%;">
      </div>

    </div>

    <!-- Left and right controls -->


  </div>

</div>
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
<button id = "dead1" value="⟵">⟵</button>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
<button id = "dead2" value="gsfg">⟶</button>
</a>
</body>
</html>
