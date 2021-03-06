<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<title>My Cv Online</title>
		<meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/carousel.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
<!-- NAVBAR -->
  <div class="navbar-wrapper" style="position:fixed">
    <div class="container">
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="index.php">
              <img class="logo" src="img/logo/myCVOnline_white.png" alt="company logo">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="jobs.php">Browse Jobs</a></li>
              <li><a href="jobseekers.php">Job-Sekeers</a></li>
            </ul>
            <?php while(!empty($_SESSION['EMP_ID']) || !empty($_SESSION['SEEK_ID']))
              {
                include 'title_bar.php';
                include 'navigation_bar.php';
              } ?>
            <ul class="nav navbar-nav pull-right">
              <?php if(isset($_SESSION['user'])): ?>
              <li><a href="logout.php">Logout</a></li>
              <?php else : ?>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="login.php">Login</a></li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>

<!--Corsule -->
<?php if(isset($_SESSION['user'])): ?>
  <div class="searchBar">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img class="second-slide" src="img/second.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
            <h1 style="color:#53b7f4">Search Thousands of Jobs</h1>
              <p><a class="btn btn-lg btn-primary" href="jobs.php" role="button">Browse Jobs</a></p>
            </div>
          </div>
        </div>
        <div class="item">
        <img class="first-slide" src="img/first.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">

            </div>
          </div>
          
        </div>
        <div class="item">
          <img class="third-slide" src="img/third.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
  
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
        </a>
    </div>
  </div> 
<?php else : ?>  
  <div class="searchBar">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/first.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Get Your Dream Job Now</h1>
              <p style="color:#24141e">Get Instant Acess To Today's Most Wonderful Hiring Tools-Post Jobs and Streamline Your Entire Hiring Process</p>
              <p>
              <a class="btn btn-lg btn-primary" href="login.php" role="button">Login</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/second.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Hire Better Talent</h1>
              <p style="color:#24141e">Get The Coolest Employess for Your Company,Hire Fresh Talent or Experienced View Their Resume and Select The Best</p>
              <p><a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign-Up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/third.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 style="color:#53b7f4">Search Thousands of Jobs</h1>
              <p style="color:#24141e">Build and Post Your Resume and Access Thousands of Pages of Career Info and Advice</p>
              <p><a class="btn btn-lg btn-primary" href="jobs.php" role="button">Browse Jobs</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php endif; ?>
<!-- START THE FEATURETTES -->
    <div class="container">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">"Choose a job you love, <span class="text-muted"> and you will never have to work a day in your life"</span></h2>
          <p class="lead">No matter where you are in your career, chances are you're in need of a little motivation to get to the next step—to go for the job you'll actually love waking up for, to ask for that promotion, or to just push through a rough day.</p>
        </div>
        <div class="col-md-5" >
          <img class="featurette-image img-responsive center-block" src="img/image1.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">"Find out what you like doing best,<span class="text-muted"> and get someone to pay you for doing it."</span></h2>
          <p class="lead">The truth is that our finest moments are most likely to occur when we are feeling deeply uncomfortable, unhappy, or unfulfilled. For it is only in such moments, propelled by our discomfort, that we are likely to step out of our ruts and start searching for different ways or truer answers.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/image2.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">"Consult not your fears <span class="text-muted">but your hopes and your dreams."</span></h2>
          <p class="lead">Think not about your frustrations, but about your unfulfilled potential. Concern yourself not with what you tried and failed in, but with what it is still possible for you to do.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/image3.jpg" alt="Generic placeholder image">
        </div>
      </div>
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->
     <!-- Marketing messaging and featurettes -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
  <!-- Three columns of text below the carousel -->
  <div class="teamSection">
    <h1 class="center teamSection_title">Team</h1>
  </div>
    <div class="row">
      <div class="col-lg-4">
        <img class="img-circle" src="img/me3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Me</h2>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-circle" src="img/me3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Myself</h2>
      </div>
      <div class="col-lg-4">
        <img class="img-circle" src="img/me3.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>I</h2>
      </div>
    </div><!-- /.row -->
      <hr class="featurette-divider">
</div>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2018 my CV online &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')         </script> 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	</body>
</html>