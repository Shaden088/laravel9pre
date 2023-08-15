<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  font-family: "Montserrat", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("hh.jpg");
  min-height: 90%;
  min-width: 40%;
}
	
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #d9bebe;
}


li {
  float: left;
}

li a {
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: black;
}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body>

<!-- Nav Bar -->
<div class="w3-top">
<body dir="ltr">
 <ul>
 <li><a href="#home">Home</a></li>
  <li><a href="#about">About me</a></li>
  <li><a href="#Experience">Experience</a></li>
  <li><a href="#Contact">Contact</a></li>
</ul>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  <div class="w3-display-middle w3-center">
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale  w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-64"><span class="w3-tag w3-black">About Me</span></h3>
    <p>It is my pleasure to introduce myself as Shaden Alharbi , a student at Qassim University studying Information Technology. I will join a professional work environment that supports my skills in the field of website developer order to achieve my goals and develop the information I require to overcome practical challenges. I am looking forward to working under its umbrella and with its superiors, as well as contributing to the advancement of future common goals by enhancing my experience and knowledge.</p>
  </div>
</div>

<!-- Experience Container -->
<div class="w3-container" id="Experience">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-48"><span class="w3-tag w3-black">My Experience</span></h3>
    <p> I worked on several projects during the study period, including a project in the Python language to arrange tasks, a project in the web language for a sports club, and also a project in the Android Studio language to record and remind daily notes ,also I worked on a graduation project to determine the indoor position of the Computer College for Girls in Qassim University. In addition,I have several courses in the field of artificial intelligence , cybersecurity and website development.</p>
    <p> In additional, I have programming skills and frontend and bakcend development also communication skills and time management.</p>
   <!-- <img src="exp.jpeg" style="width:100%;max-width:1000px;margin-top:32px;">*/-->
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="Contact" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h3 class="w3-center w3-padding-48"><span class="w3-tag w3-black">Contact Me</span></h3>

    <div class="w3-section">
    <p><i class="fa fa-map-marker fa-fw w3-text-black w3-xxlarge w3-margin-right"></i> Buraydah, Al-Qassim</p>
      <p><i class="fa fa-phone fa-fw w3-text-black w3-xxlarge w3-margin-right"></i> Phone: +966531422036</p>
      <p><i class="fa fa-envelope fa-fw w3-text-black w3-xxlarge w3-margin-right"> </i> Email: Shaden.088@icloud.com</p>
    </div>

    <br>

    <p>Let's get in touch. Send me a message:</p>

    <form action="d" method="GET" role="form">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE </button></p>
    </form>
<!-- End page content -->
</div>
</body>
</html>