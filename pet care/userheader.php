<?php include 'connection.php' ;
extract($_GET);


?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="user_viewdiseases.php"> view diseases</a>
	<a href="user_managepet.php"> manage pets</a>
	<a href="user_reportdisease.php">report disease</a>
	<a href="user_viewdoctor.php">view doctor</a>
	<a href="user_viewproduct.php">view product</a>
	<a href="user_viewbuyproduct.php">view buy product</a>
	<a href="user_sendfeedback.php">send feedback</a>
	
	<a href="pet_login.php">logout</a>
 -->
 <!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>pet care</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https:cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https:fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="pet_home.php">
            <img src="images/logo.png" alt="">
            <span>
              Petology
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                
                <li class="nav-item">
                  <a class="nav-link" href="user_viewdiseases.php">view diseases</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_managepet.php"> manage pets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_reportdisease.php">report disease</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="user_viewdoctor.php">view doctor</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="user_viewproduct.php">view product</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user_viewbuyproduct.php">view buy product</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="user_sendfeedback.php">send feedback</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="pet_login.php">logout</a>
               </li>

                
              
              </ul>
             
            </div>
            
          </div>
        </nav>
      </div>
    </header>
