<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Helping Hand - Fund rise for great events</title>
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!--Bootstrap Select-->
    <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">
    
    <!--Theme Styles-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
    
    <!--[if lt IE 9]>
        
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
   
    <?php include 'includes/navigation.php'; ?>
    
    <section class="row page-header">
        <div class="container">
            <h4>contact us</h4>
        </div>
    </section>
    
    <section class="row contact-content page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="contact_page_title">have an idea to help us ? - contact us</h3>
                    <p class="contact_page_para">Pellentesque mollis eros quis massa interdum porta et vel nisi. Duis vel viverra quamam molesvulputate femy contenteu.</p>
                    <form action="contact_process.php" class="row m0 contact-form" id="contactForm">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                        <input type="submit" value="submit" class="btn-primary">
                    </form>
                    <h3 class="contact_page_title map-title">find us on map</h3>
                    <div id="mapBox" class="row m0" data-lat="37.3818288" data-lon="-122.0636325" data-zoom="15" data-marker="images/map-marker.png"></div>
                </div>
                <div class="col-md-4 contact-sidebar">
                    <div class="row m0 address_box">
                        <div class="inner row">
                            <h3>Ibadan</h3>
                            <address>
                                40 mainu Street, <br>
                                Suite 330, New York, <br>
                                NY 10013. <br>
                                <br>
                                tel. 1-800-123-4567 <br>
                                <br>
                            </address>
                        </div>
                    </div>
                    <div class="row m0 address_box">
                        <div class="inner row">
                            <h3>Calabar</h3>
                            <address>
                                23, Sherbrooke West, <br>
                                Suite 330, New York, <br>
                                NY 10013. <br>
                                <br>
                                tel. 1-800-123-4567 <br>
                                <br>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="row newsletter_signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4>NEWSLETTER SIGN-UP</h4>
                    <p>Praesent diam massa, interdum quis ex id, laoreet interdum odio.</p>
                </div>
                <form class="col-sm-7 form-inline newsletter_signup_form">
                    <input type="text" class="form-control" placeholder="Name">
                    <input type="email" class="form-control" placeholder="Email Address">
                    <input type="submit" value="submit" class="btn-primary white">
                </form>
            </div>
        </div>
    </section>
    
    <?php include 'includes/footer.php'; ?>
    
  
    
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--Google Map-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/gmaps.min.js"></script>
    <!--Bootstrap Select-->
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!--Magnific Popup-->
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!--Owl Carousel-->
    <script src="vendors/owl.carousel/owl.carousel.min.js"></script>
    <!--CounterUp-->
    <script src="vendors/couterup/jquery.counterup.min.js"></script>
    <!--WayPoints-->
    <script src="vendors/waypoint/waypoints.min.js"></script>
    <!--Theme Script-->    
    <script src="js/theme.js"></script>
</body>
</html>