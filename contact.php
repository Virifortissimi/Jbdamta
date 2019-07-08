<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="JB DAM TA Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  
  
    <title>Document</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/bootscrap.css">


  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <link href="css/logo-slider.css" rel='stylesheet' type='text/css' media="all">
  
</head>

<body>

  <?php include('form_process.php'); ?>

    <nav class="navbar fixed-top aboutus-nav navbar-light bg-light">
        <a href="tel:+2348183779494">+(234) 818 377 9494</a>
    
        <a href="tel:+2348066101215">+(234) 806 610 1215</a>

        <a href="https://twitter.com/JbDamta">Follow us on LinkedIn</a>
    
        <a href="https://twitter.com/JbDamta">Follow us on Twitter</a>
      </nav>
    
      <nav class="navbar navbar-expand-lg below-aboutus-nav navbar-light bg-light fixed-top">
          <a class="navbar-brand" href="./index.html">
              <img src="./img/CompanyLogo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo">
            </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="floatleft">
                <ul class="navbar-nav nav-float-left mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./about.html">About Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="./service.html">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./projects.html">Projects</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php">Contact Us</a>
                </li>
                </ul>
              </div>
          </div>
        </nav>




      <main class="contact-main">
        <div class="row">
        <div class="container">
          <h2>CONTACT US</h2>
          <h2>Contaminated Fuel Can Spell Disaster for Your Equipment</h2>
          <h3>SCHEDULE A FUEL TANK DECONTAMINATION SERVICE IN JB DAMTA</h3>
          <p>Thank you for visiting the website of JB DAMTA. We offer fuel tank cleaning services, Routine Tank Cleaning & Sludge Evacuation, Tank Calibration, Tank Level Monitoring etc.</p>
          <p>Please use the form on this page to contact us. You may also call us at <a href="tel:+2348183779494">+(234) 818 377 9494</a> or <a href="tel:+2348066101215">+(234) 806 610 1215</a>. We look forward to serving you.</p>        
        </div>
      </div>



      <div class="row">
        <div class="container">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="cards">
              <h5>JB DAMTA</h5>
              <h4>13B Olubiyi Street, Iju Agege, Lagos Nigeria</h4>
            </div>
          </div>
          <!-- <div class="col-lg-1 col-md-1 col-sm-12"></div> -->
          <div class="col-lg-8 col-md-8 col-sm-12 form-bg">
            
            <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
               <h3>Contact Us</h3> 
                <h4>Contact us today and get a reply in 24hours</h4>
                <div class="row">
                 
                 
                  <fieldset>
                    <input type="text" tabindex="1" placeholder="Your Name" value="<?= $name ?>" s autofocus>
                    <span class="error"><?= $name_error ?></span>
                  </fieldset>

                  <fieldset>
                    <input type="text" tabindex="2" placeholder="Your Email Address" value="<?= $email ?>" name="email" >
                    <span class="error"><?= $email_error ?></span>
                  </fieldset>

                  <fieldset>
                    <input type="text" tabindex="3" placeholder="Your Phone Number" value="<?= $phone ?>" name="phone">
                    <span class="error"><?= $phone_error ?></span>
                  </fieldset>

                  <fieldset>
                    <textarea tabindex="4" placeholder="Type your message here..." value="<?= $message ?> name="message"></textarea>
                  </fieldset>

                  <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                  </fieldset>

                  <div class="success"><?= $success ?></div>
                </div>
              </form>
          </div>
        </div>
      </div>



      


      
  <!--contact-map -->
  <div class="address_mail_footer_grids">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.977217810282!2d3.321124050253201!3d6.649745423504272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b914d72da5765%3A0x46bab0c9bd88ae1f!2sIju+Rd%2C+Lagos!5e0!3m2!1sen!2sng!4v1560336039060!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <!--//contact-map -->
      </main>
      



      <div class="row footer-logo">
          <div class="container">
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
              <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><img src="./img/CompanyLogo.png" alt="" logo></div>
              <div class="col-lg-5 col-md-5 col-sm-4 col-xs-4"></div>
          </div>
        </div>
        <div class="row">
          <footer style="width: 100% !important">
            <p>Copyright © 2019 JB DAMTA, all rights reserved.</p>
            <p>13B Olubiyi Street, Iju Agege, Lagos Nigeria, +(234) 818 377 9494, +(234) 806 610 1215</p>
          </footer>
        </div>
    



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>