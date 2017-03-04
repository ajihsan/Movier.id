<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movier</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- Stroke 7 font by Pixeden (http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set)-->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/helper.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- owl carousel-->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <!-- plugins-->
    <link rel="stylesheet" href="css/simpletextrotator">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="justlogosmall.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="img/justlogosmall.png" alt="logo" class="hidden-xs hidden-sm"><img src="img/justlogosmall.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
              <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="pe-7s-menu"></i></button>
              </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#features" class="scroll-to">Features</a></li>
                <li><a href="#movier" class="scroll-to">Movier </a></li>
                <!-- <li><a href="#integrations" class="scroll-to"></a></li> -->
                <li><a href="#testimonials" class="scroll-to">Feedback</a></li>
                <li><a href="#contact" class="scroll-to">Contact</a></li>
              </ul>
              <a href="#get-started" data-toggle="modal" data-target="#get-started" class="btn navbar-btn btn-ghost">Sign In</a>
              <a href="#register" data-toggle="modal" data-target="#register" class="btn navbar-btn btn-ghost">Register</a>
            </div>
          </div>
        </div>
      </header>
      <!-- *** SIGNUP MODAL ***_________________________________________________________
      -->
      <div id="get-started" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
              <h4 class="modal-title text-center">Sign In</h4>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="Email" class="form-control">
                  <input id="password_modal" type="password" placeholder="Password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="pe-7s-magic-wand"></i> Sign In</button>
                  <!-- <a href="#register" method="post" class="scroll-to" type="submit" name="action">Register</a> -->
                </p>
              </form>
              <p class="text-center text-muted">Subscribe here to be update</p>
            </div>
          </div>
        </div>
      </div>

      <div id="register" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
              <h4 class="modal-title text-center">Register</h4>
            </div>
            <div class="modal-body">
              <form action="{{url (action('RegisterController@postRegister'))}}" method="post">
                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}"/>
                <div class="form-group">
                  <input id="namaRule" type="text" name="nama" placeholder="Nama" class="form-control">
                  <input id="username" name="username" type="text" placeholder="Username" class="form-control">
                  <input id="email_modal" type="text" name="email"  placeholder="Email" class="form-control">
                  <input id="password_modal" type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="pe-7s-magic-wand"></i> Register</button>
                  <!-- <a href="#register" method="post" class="scroll-to" type="submit" name="action">Register</a> -->
                </p>
              </form>
              <p class="text-center text-muted">Subscribe here to be update</p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** SIGNUP MODAL END ***-->
      <section id="intro" class="text-intro no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>THE EASY WAY TO BUY YOUR <span class="rotate">MOVIE TICKET</span> </h1>
              <h3 class="weight-300">giving you access in every cinema</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>We'll notify you if movier is ready to use.<br />Subscribe here</p>
              <form class="form-inline margin-top sign-up-form">
                <input id="email_intro" type="email" placeholder="name@company.com" class="form-control">
                <input id="submit_intro" type="submit" value="Subscribe" class="btn btn-primary">
              </form> <br> <br><br><br>
            </div>
            <!-- <div class="col-md-12 col-lg-8 col-lg-offset-2">
              <p class="margin-bottom--zero"><img alt="" src="img/features3.png" class="img-responsive"></p>
            </div> -->
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS ***-->
      <!-- <section id="customers" class="section background-gray-lightest padding--small">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/kofola.png" title="Kofola" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/evian.png" title="Evian" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/cslink.png" title="CS Link" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/botas66.png" title="Botas 66 Concept store" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/mdfc.png" title="MediaFabríca" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/vanek.png" title="VANĚK Strojírenská výroba" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
      </section> -->
      <!--   *** CUSTOMERS END ***-->
      <!--   *** FEATURES ***-->
      <section id="features" class="section">
        <div class="container">
          <div class="row text-center-mobile">
            <div class="col-md-6">
              <div class="icon"><i class="pe-7s-diamond"></i></div>
              <h2>Book Any Ticket Everytime</h2>
              <p>Don't have time for booking ticket? Now your problem solved with Movier! You can book your own ticket everytime you want.  </p>
            </div>
            <div class="col-md-6">
              <p><img alt="" src="img/film.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section class="section background-gray-lightest">
        <div class="container">
          <div class="row text-center-mobile">
            <div class="col-md-6">
              <p><img alt="" src="img/seat.png" class="img-responsive"></p>
            </div>
            <div class="col-md-6">
              <div class="icon brand-terciary"><i class="pe-7s-rocket"></i></div>
              <h2>Choose Your Seat Everywhere</h2>
              <p>Always running out of seat in cinema? Now your problem solved with Movier! You can choose your own seat before anyone does so you can get your own seat. </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8 col-lg-offset-2 text-center">
              <div class="icon brand-secondary"><i class="pe-7s-graph1"></i></div>
              <h2>Watch Your Movie In Every Cinema</h2>
              <p>Have you ever feel like you don't know where to find cinema for watching movie? Now your problem's solved with Movier! You can choose which cinema you want to visit so you won't feel confuse anymore. </p>
              <p class="margin-bottom--zero"><img alt="" src="img/cinema.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <!--   *** FEATURES END ***  -->
      <!--   *** TEXT ***-->
      <section id="movier" class="text-page section-inverse background-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Movier</h2>
              <p class="lead text-center">The easy way to buy your movie ticket.</p>
              <div class="row">
                <div class="col-sm-6">
                  <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                  <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other. </p>
                </div>
                <div class="col-sm-6">
                  <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                  <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** TEXT END ***-->
      <!--   *** INTEGRATIONS ***-->
      <!-- <section id="integrations" class="section-gray">
        <div class="container clearfix">
          <div class="row services">
            <div class="col-md-12">
              <h4 class="services-heading">Integrations</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-alarm"></i></div>
                    <h4 class="heading">Webdesign</h4>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-cloud"></i></div>
                    <h4 class="heading">Print</h4>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-coffee"></i></div>
                    <h4 class="heading">SEO and SEM</h4>
                    <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                  </div>
                </div>
              </div>
              <h4 class="services-heading">TOOLS</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-monitor"></i></div>
                    <h4 class="heading">Consulting</h4>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-signal"></i></div>
                    <h4 class="heading">Email Marketing</h4>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-id"></i></div>
                    <h4 class="heading">UX &amp; UI</h4>
                    <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!--   *** INTEGRATIONS END ***-->
      <!-- <section id="testimonials" class="section testimonails background-gray-lightest">
        <div class="container">
          <h2 class="text-center">

            What our customers say
          </h2>
          <p class="lead text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>
          <div class="row">
            <div class="col-md-12">
              <ul class="owl-carousel testimonials same-height-row">
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-1.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-2.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                      <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-3.png">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-4.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-4.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section> -->
      <section id="testimonials" class="signup-section text-center no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>Get In Touch</h3>
              <p class="lead text-gray-light">We love feedback. Fill out the form below and we'll get back to you as soon as possible</p>
              <form class="form-horizontal margin-bottom--big sign-up-form">
                <center>
                <input id="email" type="email" placeholder="name@company.com" class="form-control"> <br>
                <textarea class="form-control" placeholder="Your message here.."></textarea><br>
                <input id="submit" type="submit" value="Send" class="btn btn-primary">
                </center>
              </form>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="section background-gray-lightest">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-map-2"></i></div>
                <h3>Our Home</h3>
                <p>Jl. Tirtawangi Raya No. 10<br>Bojongsoang Bandung 40287<br><strong>Indonesia</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-phone"></i></div>
                <h3>Call center</h3>
                <p class="text-muted">This number is used to talk with our team.</p>
                <p><strong>+62 811 511 225</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-mail-open-file"></i></div>
                <h3>Electronic support</h3>
                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                <p><strong><a href="mailto:">info@movier.com</a></strong></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>&copy;2016 Movier</p>
              </div>
              <div class="col-md-6">
                <p class="credit pull-right">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious</a></p>
               <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"> </script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/ekko-lightbox.js"></script>
    <script src="js/jquery.simple-text-rotator.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
