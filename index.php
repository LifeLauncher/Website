<?php
include_once './models/env.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="5bXSkVhfJEgOdG5fE4dhziAo1Md_9EMYFjunfEhO2pI" />
    <title>Life Launcher</title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" size="180" href="https://www.lifelauncher.io/favicon.png">
    <link rel="icon" href="favicon.png">

    <!-- Bootstrap CSS Link -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- PHP Core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Google Fonts Link -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Quicksand:400,700&display=swap" rel="stylesheet"> -->
    <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans|Quicksand:300,400,700&display=swap');
    </style>
    <!-- Font-Awesome Social Media Incons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- AJAX Configuration -->
    <?php echo ajaxConfig();?>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <img src="assets/images/rocket.svg" height=50 alt=":( Image Unavailable">
      <h1 class="logoTxt">life launcher</h1>
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarToggler">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="https://www.facebook.com/LifeLauncherInc/" target="_blank" class="fa fa-facebook nav-link"></a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/LifeLauncher/" target="_blank" class="fa fa-twitter nav-link"></a>
          </li>
          <li class="nav-item">
            <a href="https://www.linkedin.com/company/life-launcher/" target="_blank" class="fa fa-linkedin nav-link"></a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/lifelauncher/" target="_blank" class="fa fa-instagram nav-link"></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Section 1 -->
    <section class="sb row">
      <div class="container-fluid my-auto">
        <div class="row">
          <!-- First heading -->
          <!-- style="min-height: 290px;" -->
          <div class="col-lg-5 col-md-8 col-sm-10 row">
            <div class="my-auto" style="width: 100%">
                <h1>Are you prepared to pay for college?</h1>
                <p style="text-align: left; margin-bottom: 0;">
                  We help college applicants by providing factual data on all college expenses, as well as personalized, post-graduate financial possibilities, so that they can determine the best
                  way to follow their dreams without the burden of a life of debt.
                </p>
            </div>
          </div>
          <!-- Middle Divider -->
          <div class="col-lg-2"></div>
          <!-- Second heading -->
          <div class="col-lg-5 col-md-8 col-sm-10 row s1hr padslhr">
            <div class="my-auto">
              <h2>
                Find out more!
              </h2>
              <p>
                We'll let you know as soon as our product is available (& don't worry, we don't like spam either)
              </p>
              <form class="form" onsubmit="return sendMail(this)">
                <div class="input-group mb-3 form-group">
                  <input style="color: #2e99bc" type="email" class="form-control" placeholder="yourname@example.com" name="email">
                  <div class="input-group-append">
                    <button class="btn btn-outline" type="submit">Submit</button>
                  </div>
                </div>
                <div class="check-error" style="width: 100%;">
                  <p></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section 2 -->
    <section class="sw row">
      <div class="container-fluid my-auto">
        <div class="row">
          <!-- First heading -->
          <div class="col-lg-5 col-md-8 col-sm-10 s2hr row">
            <div class="my-auto" style="width:100%;">
              <h2 style="color: #5D8000;">How you can help!</h2>
              <iframe class='gfm-media-widget' image='0' coinfo='0' width='100%' height='100%' frameborder='0' id='lifelauncher'></iframe>
            </div>
          </div>
          <!-- Middle Divider -->
          <div class="col-lg-2" style="min-height: 0;"></div>
          <!-- Second heading -->
          <div class="col-lg-5 col-md-8 col-sm-10 row">
            <div class="my-auto" style="width:100%;">
              <p>
                We provide information from every college and university in the US. This includes current tuition costs, living expenses, majors and minors offered, salaries from jobs related to graduates of those majors (by location), and much more. With all of that data we can help you create individualized 'maps'- different representations of your future.
              </p>
              <p style="margin-bottom: 0;">
                You can provide as much of your own information as you'd like (like current debt, future loans, etc) to make your results as accurate as possible. We never store any of your personal data, and you don't even have to provide any! It's only an option for you to visualize your own scenarios and make them as realistic as possible.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section 3 -->
    <section class="sb row">
      <div class="container-fluid my-auto">
        <div class="row">
          <div class="col-20 row">
            <div class="my-auto" style="max-width:100%;">
              <img src="assets/images/logo.svg" style="width: 100%;" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->
    <section class="footer">
      <p class="footer">
        © 2019 Life Launch Inc.
        <br>
        info@lifelauncher.io
      </p>
    </section>
    <!-- Placed at bottom for faster page loads -->
    <!-- GoFundMe Core JavaScript -->
    <script src='//funds.gofundme.com/js/5.0/media-widget.js'></script>

    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/componets.js"></script>
    <script src="assets/js/home.js"></script>
  </body>
</html>
