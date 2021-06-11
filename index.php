<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <link rel='icon' href='ellipsisIcon.png' type='image/x-icon'/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto+Slab&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=index.css>
    <script type="text/javascript" src = "script.js"></script>
    <div class=topnav id=myTopnav>
      <a href=index.html><img class="logo" src=ellipsisLong.svg></a>
      <div class="container" onclick="menuBtnToggle(this)">
        <span class="menuBtn" onclick="openOrCloseNav()">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
      
        </span>
    </div>
      <div id="mySidenav" class="sidenav">
        
        <a href=index.html>Home</a>
        <a href=about.php>About us</a>
        <a href=latestMeditations.html>Latest</a>
        <a href=search.html>Search</a>
        <a href=data.php style=color:black>Test</a>
        
      </div>
      
      
    </div>
    <?php 
      $articles = array(
        array("The First Autobiography: Augustine's Confessions","augustine.jpeg","meditation4.html","Thoughts on the work and the author.","Desmond Jones"),
        array("Thoughts on London's \"Sea-Wolf\".","jlondon.jpeg","meditation3.html","Is the will to power admirable or reprehensible?","Eric Claassen"),
      );
      $article1 = array(
        "title" => "The First Autobiography: Augustine's Confessions",
        "img" => "augustineMeditating.jpg",
        "link" => "meditation4.html",
      );
      $article2 = array(
        "title" => "Thoughts on London's \"Sea-Wolf\".",
        "img" => "seawolfPic.jpg",
      );
      $sideVal = array(
        "<a href=index.html>Home</a>",
        "<a href=latestMeditations.html>Latest</a>",
        "<a href=search.html>Search</a>",
        "<a href=test.html style=color:black>Test</a>",
      );
      ?>
    <h1>Popular</h1>
   <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img  class="slideCrop" src="Eric Claassen's Background Photoshop Project (Spongebob with Greece's Greatest Thinkers!).jpg" style="width:100%">
  <div class="text">"Of Intellect and Mediocrity": photo manipulation of Raphael's "School of Athens" by Desmond Jones</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href="meditation4.html">
  <?php echo '<img class="slideCrop" src="' . $article1["img"] . '" style="width:100%">'; ?>
  
  <div class="text"><?php echo $article1["title"] ?></div>
  </a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href=meditation3.html>
  <?php echo '<img class="slideCrop" src="' . $article2["img"] . '" style="width:100%">'; ?>
  <div class="text"><?php echo $article2["title"] ?></div>
  </a>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
  var slides = document.getElementsByClassName("mySlides");
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
  </head>
  <body>
    <!--
    <div id="rSidebar" class = "rSidebar">
      <script type="text/javascript" src="//rf.revolvermaps.com/0/0/8.js?i=59xkqm0n5p1&amp;m=6&amp;c=ff0000&amp;cr1=ffffff&amp;f=arial&amp;l=33" async="async"></script>
    </div>
-->
<div class="writingBody">
      
    
    </div>

<h1>The Latest</h1>
<div class="endList">
  <?php
    foreach($articles as $article){
      echo "
    <a href=". $article[2] ." style=\"text-decoration:none;color:black;\">
    <div class=paneUpdate id=myPane style=\"margin-top:2%\">
    <img src=". $article[1] .">
    <div class=banner-text>
    <h4>" . $article[0] ."</h4>
    <p>". $article[3] ."</p>
       <h5>" . $article[4] . "</h5>
    </div>
  </div></a>
  "
  ;
    }
    
  ?>
</div>
<style>
.footer {
  position: bottom;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: whitesmoke;
  color: black;
  text-align: left;
}
.footerText{
  margin-left: 5%
}
</style>



<hr style="margin-top:15%">
<div class=topnav id=myTopnav style="margin-top:2.5%">
      <a href=index.html style="color:black;text-decoration:none">Contact us</a>
      <a href=latestMeditations.html style="color:black;text-decoration:none">&emsp;The Latest Meditations</a>
      <a href=search.html style="color:black;text-decoration:none">&emsp;Search</a>
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0;float:right;" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
    </div>

<!--
<div class="footer">
  <p class="footerText">Footer</p>
</div>
-->

  </body>
</html>
