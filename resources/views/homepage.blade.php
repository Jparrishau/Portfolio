<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taylor Parrish</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" >
        
        <!-- Bootstrap Core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Theme CSS -->
        <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top" class="index">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <!-- Navigation -->
                <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header page-scroll">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="#page-top">Joseph Taylor Parrish</a>
                        </div>
            
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="hidden">
                                    <a href="#page-top"></a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#portfolio">Portfolio</a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#about">About</a>
                                </li>
                                <li class="page-scroll">
                                    <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            
                <!-- Header -->
                <header>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <img class="img-responsive" src="img/profile.png" alt="">
                                <div class="intro-text">
                                    <span class="name">Joseph Taylor Parrish</span>
                                    <hr class="star-light">
                                    <span class="skills"> Developer - Researcher - Dreamer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            
                <!-- Portfolio Grid Section -->
                <section id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>Portfolio</h2>
                                <hr class="star-primary">
                            </div>
                        </div>
                            <div class="col-sm-12 portfolio-item">
                                <a href="#taylorslistModal" class="portfolio-link" data-toggle="modal">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img style="width:360px; height:260px;" src="img/portfolio/taylorslist.png" class="img-responsive" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            
                <!-- About Section -->
                <section class="success" id="about">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>About</h2>
                                <hr class="star-light">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-lg-offset-2">
                                <p>My name is Taylor Parrish and I am a recent graduate from Auburn University with a Bachelors of Science in Software Engineering.
                                I have hands on experience with Android Mobile development, Full-Stack Web development and SQL development. </p>
                            </div>
                            <div class="col-lg-4">
                                <p>My passion is in Full-Stack Web Development using HTML, PHP, SQL and Javascript.
                                I really enjoy developing with the Laravel framework (MVC), Bootstrap and SaSS.
                                As well as contemplating what the next big software need will be.
                                In my free time I enjoy watching movies of just about any genre and time.
                                </p>
                            </div>
                            <div class="col-lg-8 col-lg-offset-2 text-center">
                                <a href="{{ asset('Resume.pdf') }}" download class="btn btn-lg btn-outline">
                                    <i class="fa fa-download"></i> Download Resume
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            
                <!-- Contact Section -->
                <section id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2>Contact Me</h2>
                                <hr class="star-primary">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                                <form name="sentMessage" id="contactForm" novalidate>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>                             
                                    <div class="row control-group">
                                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                            <label>Message</label>
                                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            
                <!-- Footer -->
                <footer class="text-center">
                    <div class="footer-below">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    Copyright &copy; 2016
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            
                <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
                <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
                    <a class="btn btn-primary" href="#page-top">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            
                <!-- Portfolio Modals -->
                <div class="portfolio-modal modal fade" id="taylorslistModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal">
                            <div class="lr">
                                <div class="rl">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
                                    <div class="modal-body">
                                        <h2>Taylorslist</h2>
                                        <hr class="star-primary">
                                        <img src="img/portfolio/taylorslist.png" class="img-responsive img-centered" alt="">
                                        <p>A web platform for buying and selling goods locally. Built with the the Laravel framework using the MVC pattern and Bootstrap.</p>
                                        <ul class="list-inline item-details">
                                            <li>Client:
                                                <strong><a href="http://startbootstrap.com">Personal Project</a>
                                                </strong>
                                            </li>
                                            <li>Date:
                                                <strong><a href="http://startbootstrap.com">August 2016</a>
                                                </strong>
                                            </li>
                                            <li>Service:
                                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                                </strong>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
    </body>
</html>
    
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/freelancer.js"></script>
