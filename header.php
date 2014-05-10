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
      <a class="navbar-brand" href="index.php">Unbottled</a>
    </div>

    <!-- NAVIGATION!!!!!!! -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
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

<div id="wrap">
