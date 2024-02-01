<?php 
session_start();

	include("connection.php");
	include("functions.php");
  
	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="anita.jfif"
  type="image/x-icon">

  <style>

/* Header Style */
.header {
  padding: 50px;
  text-align: center;
  background-image: url('bj.jpg');
  color: white;
  font-size: 50px;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  height: 75%;
}

/* Button Style */
.button {
  border: none;
  color: white;
  padding: 10px 39px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #04AA6D; 
  color: white; 
  border: 2px solid #04AA6D;
  margin: 4px 30px;
  border-radius: 12px;
}

.button1:hover {
  background-color: gray;
  color: white;
}

.button2 {
  background-color: #008CBA; 
  color: white; 
  border: 2px solid #008CBA;
  margin: 4px 25px;
  border-radius: 12px;
}

.button2:hover {
  background-color: gray;
  color: white;

}


* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 20px 10px;/*background of navigator*/
  font-size: 20px;
  width: 10%;

}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 50px 20px;
  height: 100%;
}

/* BACKGROUND COLOR FOR EVERY PAGE*/
#Home {background-color: black;}
#Highlights {background-color: black;}
#Contact {background-color: black;}
#About {background-color: black;}

/* Images Style */
div.gallery {
  border: 5px solid #ccc;
}

div.gallery:hover {
  border: 5px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}




/*LOGO STYLE*/
.logo-img{
    float: left;
    position: relative;
    margin: 0px 0px 0px 0px;
}
    /* SEQUENCE OF MARGIN-TOP/LEFT/BOTTOM/RIGHT*/
</style>


</head>
<body>

	<a href="logout.php">Logout</a>
	

  <body>
<img class="logo-img" src="lance.jpg" width="150" height="64" ALT="valorant" ALIGN=CENTER>
<button class="tablink" onclick="openPage('Home', this, '#04AA6D')"id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('Highlights', this, '#04AA6D')">Highlights</button>
<button class="tablink" onclick="openPage('Contact', this, '#04AA6D')">Contact</button>
<button class="tablink" onclick="openPage('About', this, '#04AA6D')">About</button>

<div class="header">
  <h1>Valorant</h1>
  <p>Enjoy fps game with us</p>
</div>


<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <div class="responsive">
  <div class="gallery">
    <a target="_blank" href="valorant.png">
      <img src="ariana.jpg" alt="Valorant">
    </a>
    <div class="desc">Add a description of the image here</div>

  <button class="button button1">Add</button>
  <a href="Checkout.html">
  <button class="button button2">Buy</button>
  </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="valorant.png">
      <img src="ariana.jpg" alt="Valorant">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="valorant.png">
      <img src="ariana.jpg" alt="Valorant">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="valorant.png">
      <img src="ariana.jpg" alt="Valorant">
    </a>
    <div class="desc">Add a description of the image here</div>
  </div>
</div>

<div class="clearfix"></div>
</div>

<div id="Highlights" class="tabcontent">
  <h3>Highlights</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>



<script>
  //javascript
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</body>
</html>