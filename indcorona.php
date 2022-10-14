<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include 'D:\xampp\htdocs\coronago\link\links.php'; ?>
  <?php include 'D:\xampp\htdocs\coronago\css\style.php'; ?>
  
</head>
<body>

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li c lass="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a></li>
        <li class="nav-item">
        <a class="nav-link" href="#indcorona.php">IndiaCoronaLive</a></li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a></li>
    

    <!--////////////top cursor///////////////-->
<div class="container scrolltop float-right pr-5"
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
  </div>

<!--Footer-->
<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
  <p>copyright by V.E.S.T</p>
</div>
</footer>


<script>

</script>

<!--top arrow button-->

<script type="text/javascript">

  mybutton=document.getElementById("myBtn");
  //when the use scrolls down 20px from the top document,show button
  window.onscroll=function(){ scrollFunction()};
  function scrollFunction(){
    if(document.body.scrollTop>100 || document.documentElement.scrollTop>100){
      mybutton.style.display="block";
    } 
    else{ mybutton.style.display="none";
    } 
  }
//when the user clicks on the button,scroll to top
function topFunction(){
  document.body.scrollTop=0; //safari
  document.documentElement.scrollTop=0; //chrome,firefox,ie,opera
}
</script>
</body>
</html> 