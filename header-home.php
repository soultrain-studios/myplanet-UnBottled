<!doctype html>
<html ng-app="unbottled">

<head>

  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
  
  <!-- Our CSS files -->
  <link rel="stylesheet" type="text/css" href="css/layout.css">
  <link rel="stylesheet" type="text/css" href="css/organization.css">
  
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <!-- Bootstrap css -->
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Bootstrap js -->
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

  <title>Unbottled - a fundraiser hub</title>

</head>

<body ng-controller="UnbottledController">

 <!-- NAV BAR!!! -->
 <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <img src="images/unbottled-logo.png" />

      <a class="navbar-brand" href="index.php">Unbottled</a>
    </div>

    <!-- NAVIGATION!!!!!!! -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="organization-list.php">Organizations</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facts<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="waterScarcity.php">Water Scarcity</a></li>
            <li class="divider"></li>
            <li><a href="tech.php">Technology</a></li>
            <li class="divider"></li>
            <li><a href="progress.php">Progress</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="top: 110px; margin-bottom: 100px"> 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
    <div class="item active" style="height: 400px; background: url(images/water01.jpg) bottom center;">
      <div class="carousel-caption">
        <h1>1.75 billion people in this world do not have access to clean water. This is our solution!</h1>
      </div>
    </div>
    
    <div class="item" style="height: 400px; background: url(images/water02.jpg) bottom center;"> 
      <div class="carousel-caption">
        <h1>The Water Project</h1>
        <p><button class="btn btn-success">Learn More</button></p>
      </div>
    </div>
    
    <div class="item" style="height: 400px; background: url(images/water03.jpg) bottom center;"> 
      <div class="carousel-caption">
        <h1>Donate to a good cause, volunteer!</h1>
        <p><button class="btn btn-success">Sign Up</button></p>
      </div>
    </div>
    
  </div>
  
  <!-- Controls --> 
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>


<div id="wrap">
