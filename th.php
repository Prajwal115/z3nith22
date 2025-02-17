<html>
<style>
.scrolling-text{
  margin: 0;
  padding: 0;
  height: 100vw;
  overflow-x: hidden;
}
h1{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  position: fixed;
  top: 50%;
  transform: translateY(150%);
  white-space: nowrap;
  font-size: 100px;
  left: 100vw;
}


</style>
<body >



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <div class="scrolling-text">
   <h1>Moving Text on Scroll</h1>
   </div>
<script>
   jQuery(document).on('scroll', function(){
               jQuery('h1').css("left", Math.max(100 - 0.13*window.scrollY, 1) + "vw");
               })

   </script>
</body>
