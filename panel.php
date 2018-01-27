<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">LOG OUT</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container-fluid bg-3 text-center"> 
  <h1 class="margin">SUBJECTS</h1><br>   
  <div class="row">
    <div class="col-sm-4">
      <h3>MATHS</h3>
      <a href="maths.php">
  <img src="maths.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
     <div class="col-sm-4">
         <h3>PHYSICS</h3>
      <a href="physics.php">
  <img src="physics.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
    <div class="col-sm-4"> 
      <h3>CHEMISTRY </h3>
      <a href="chemistry.php">
  <img src="chemistry.jpg" style="width:300px;height:300px;border:0;">
    </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-4">
      <h3>ECOLOGY</h3>
      <a href="ecology.php">
  <img src="ecology.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
     <div class="col-sm-4">
         <h3>WORKSHOP</h3>
      <a href="workshop.php">
  <img src="workshop.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
    <div class="col-sm-4"> 
      <h3>ENGINEERING MECHANICS </h3>
      <a href="mechanics.php">
  <img src="mech.jpg" style="width:300px;height:300px;border:0;">
    </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center"> 
  <div class="row">
    <div class="col-sm-4">
      <h3>CHEMISTRY LAB</h3>
      <a href="chem lab.php">
  <img src="chem lab.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
     <div class="col-sm-4">
         <h3>ENGLISH LAB</h3>
      <a href="englab.php">
  <img src="englab.gif"  style="width:300px;height:300px;border:0;">
</a>
    </div>
    <div class="col-sm-4"> 
      <h3>COMMUNICATION SKILL WORKSHOP</h3>
      <a href="comm.php">
  <img src="comm.jpg" style="width:300px;height:300px;border:0;">
    </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">  
  <div class="row">
    <div class="col-sm-4">
      <h3>ENGINEERING DRAWING</h3>
      <a href="ed.php">
  <img src="ed.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
     <div class="col-sm-4">
         <h3>C LAB</h3>
      <a href="clab.php">
  <img src="c lab.jpg"  style="width:300px;height:300px;border:0;">
</a>
    </div>
    <div class="col-sm-4"> 
      <h3>PHYSICS LAB</h3>
      <a href="phylab.php">
  <img src="physics lab.jpg" style="width:300px;height:300px;border:0;">
    </div>
  </div>
</div>

<footer class="container-fluid bg-4 text-center">
  <p>Website made by <a href="about.php">ABOUT</a></p> 
</footer>

</body>
</html>
